<?php

require_once __DIR__ . '/../app/Controllers/MahasiswaController.php';
require_once __DIR__ . '/../app/Controllers/DosenController.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';

$routes = [
    'GET' => [
        '/' => ['AuthController', 'loginForm'],
        '/login' => ['AuthController', 'loginForm'],
        '/logout' => ['AuthController', 'logout'],
        '/dashboard' => ['AuthController', 'dashboard'],
        '/mahasiswa' => ['MahasiswaController', 'index'],
        '/mahasiswa/detail/{nim}' => ['MahasiswaController', 'detail'],
        '/dosen' => ['DosenController', 'index'],
    ],
    'POST' => [
        '/login/process' => ['AuthController', 'login'],
    ],
];


$protectedRoutes = [
    '/dashboard',
    '/mahasiswa',
    '/mahasiswa/detail/{nim}',
    '/dosen',
];