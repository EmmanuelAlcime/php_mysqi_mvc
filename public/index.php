<?php

// PHP built-in server: serve existing files directly, rewrite everything else
if (php_sapi_name() === 'cli-server') {
    $path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $resolved = realpath(__DIR__ . $path);
    if ($resolved !== false && is_file($resolved) && str_starts_with($resolved, realpath(__DIR__))) {
        return false;
    }
    $_GET['url'] = trim($path, '/');
}

require __DIR__ . '/../vendor/autoload.php';

use App\Core\App;

$app = new App();
$app->run();
