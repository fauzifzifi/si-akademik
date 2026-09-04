<?php

require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';

$url = $_GET['url'] ?? 'home';

if ($url === 'home') {
    $controller = new HomeController();
    $controller->index();
} elseif ($url === 'mahasiswa') {
    $controller = new MahasiswaController();
    $controller->index();
} elseif ($url === 'mahasiswa/detail') {
    $controller = new MahasiswaController();
    $controller->detail();
} elseif ($url === 'dosen') {
    $controller = new DosenController();
    $controller->index();
} else {
    echo "404 - Halaman tidak ditemukan.";
}