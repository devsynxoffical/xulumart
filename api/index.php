<?php

// Ensure writable storage directories in /tmp for Vercel serverless functions
$storageDirs = [
    '/tmp/storage',
    '/tmp/storage/app',
    '/tmp/storage/app/public',
    '/tmp/storage/framework',
    '/tmp/storage/framework/cache',
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
    '/tmp/bootstrap',
    '/tmp/bootstrap/cache',
];

foreach ($storageDirs as $dir) {
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
}

// Set cache paths for Laravel on Vercel
$_ENV['APP_CONFIG_CACHE'] = $_ENV['APP_CONFIG_CACHE'] ?? '/tmp/config.php';
$_ENV['APP_EVENTS_CACHE'] = $_ENV['APP_EVENTS_CACHE'] ?? '/tmp/events.php';
$_ENV['APP_PACKAGES_CACHE'] = $_ENV['APP_PACKAGES_CACHE'] ?? '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = $_ENV['APP_ROUTES_CACHE'] ?? '/tmp/routes.php';
$_ENV['APP_SERVICES_CACHE'] = $_ENV['APP_SERVICES_CACHE'] ?? '/tmp/services.php';
$_ENV['VIEW_COMPILED_PATH'] = $_ENV['VIEW_COMPILED_PATH'] ?? '/tmp/storage/framework/views';
$_ENV['VERCEL'] = '1';

// Provide default fallback APP_KEY if missing in Vercel project settings to prevent boot crash
if (empty($_ENV['APP_KEY']) && empty($_SERVER['APP_KEY']) && empty(getenv('APP_KEY'))) {
    $fallbackKey = 'base64:7K59H4Fp32v3x6Y8y1qP8jB7n3Wl9z9xU5qL9cM7xQ8=';
    putenv("APP_KEY={$fallbackKey}");
    $_ENV['APP_KEY'] = $fallbackKey;
    $_SERVER['APP_KEY'] = $fallbackKey;
}

try {
    require __DIR__ . '/../public/index.php';
} catch (\Throwable $e) {
    error_log($e->getMessage() . "\n" . $e->getTraceAsString());
    http_response_code(500);
    echo "<h1>Application Boot Error</h1><p>" . htmlspecialchars($e->getMessage()) . "</p>";
}
