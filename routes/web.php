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
        '/mahasiswa/create' => ['MahasiswaController', 'create'],
        '/mahasiswa/edit' => ['MahasiswaController', 'edit'],
        '/mahasiswa/delete' => ['MahasiswaController', 'delete'],
        '/dosen' => ['DosenController', 'index'],
        '/dosen/create' => ['DosenController', 'create'],
        '/dosen/edit' => ['DosenController', 'edit'],
        '/dosen/delete' => ['DosenController', 'delete'],
    ],
    'POST' => [
        '/login/process' => ['AuthController', 'login'],
        '/mahasiswa/store' => ['MahasiswaController', 'store'],
        '/mahasiswa/update' => ['MahasiswaController', 'update'],
        '/dosen/store' => ['DosenController', 'store'],
        '/dosen/update' => ['DosenController', 'update'],
    ],
];

$protectedRoutes = [
    '/dashboard',
    '/mahasiswa',
    '/mahasiswa/detail/{nim}',
    '/mahasiswa/create',
    '/mahasiswa/edit',
    '/mahasiswa/delete',
    '/mahasiswa/store',
    '/mahasiswa/update',
    '/dosen',
    '/dosen/create',
    '/dosen/edit',
    '/dosen/delete',
    '/dosen/store',
    '/dosen/update',
];