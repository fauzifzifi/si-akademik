<?php

require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';

$routes = [
    'GET' => [
        '/' => ['HomeController', 'index'],
        '/mahasiswa' => ['MahasiswaController', 'index'],
        '/mahasiswa/detail/{nim}' => ['MahasiswaController', 'detail'],
        '/dosen' => ['DosenController', 'index'],
    ],
    'POST' => [
        // nanti dipakai kalau ada form simpan data
    ],
];