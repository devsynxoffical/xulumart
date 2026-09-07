<?php
set_time_limit(300);
ini_set('memory_limit', '512M');
$home = '/home/xulumart';

// Read log
echo "=== SETUP LOG ===\n";
echo file_get_contents($home . '/setup_log.txt') . "\n";

// Check if .env exists
echo "=== CHECKS ===\n";
echo ".env exists: " . (file_exists($home . '/.env') ? 'YES' : 'NO') . "\n";
echo "public_html/index.php: " . (file_exists($home . '/public_html/index.php') ? 'YES' : 'NO') . "\n";
echo "storage symlink: " . (is_link($home . '/public_html/storage') ? readlink($home . '/public_html/storage') : 'NO') . "\n";
echo "vendor exists: " . (is_dir($home . '/vendor') ? 'YES' : 'NO') . "\n";
echo "artisan exists: " . (file_exists($home . '/artisan') ? 'YES' : 'NO') . "\n";
echo "zip still exists: " . (file_exists($home . '/xulumart_deploy.zip') ? 'YES - delete needed' : 'NO') . "\n";

// List public_html
echo "=== public_html files ===\n";
foreach (scandir($home . '/public_html') as $f) {
    if ($f !== '.' && $f !== '..') echo $f . "\n";
}
