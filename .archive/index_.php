<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();

// Ambil path dari URL
$requestUri = trim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/');

// Default root
if ($requestUri === '') {
    require_once __DIR__ . '/public/home.php';
    exit;
}

// Sanitasi path (antisipasi ../)
$path = str_replace(['..', './', '\\'], '', $requestUri);

/** 
 * @var string $path 
 * Daftar halaman yang bisa diakses tanpa login
 */
$publicPages = ['login', 'home'];

// Redirect ke login kalau belum login & halaman bukan public
if (!isset($_SESSION['username']) && !in_array($path, $publicPages)) {
    header("Location: /ecommerce/public/login.php");
    exit;
}

// Tentukan target file
$targetFile = __DIR__ . '/public/' . $path;
if (is_dir($targetFile)) {
    $targetFile .= '/index.php';
} else {
    $targetFile .= '.php';
}

// Load file target atau tampilkan 404
if (is_file($targetFile)) {
    require_once $targetFile;
} else {
    require_once __DIR__ . '/404.php';
}
