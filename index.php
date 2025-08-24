<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$basePath = dirname($_SERVER['SCRIPT_NAME']);
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$path = trim(str_replace($basePath, '', $requestUri), '/');

// Default root
if ($path === '') {
    if (empty($_SESSION['username'])) {
        header('Location: /ecommerce/home');
        exit;
    } else {
        header('Location: /ecommerce/auth/login');
        exit;
    }
}

$targetFile = __DIR__ . '/public/' . $path;
if (is_dir($targetFile)) {
    $targetFile .= '/index.php';
} else {
    $targetFile .= '.php';
}

if (is_file($targetFile)) {
    require_once $targetFile;
} else {
    require_once __DIR__ . '/404.php';
}
