<?php

require_once __DIR__ . '/../app/Core/Database.php';

$host = 'localhost';
$dbname = 'si_akademik';
$username = 'root';
$password = '';

// object Database ini nanti dikasih ke MahasiswaRepository (constructor injection)
$database = new Database($host, $dbname, $username, $password);

// $pdo ini masih dipake sama DosenController & DosenModel yang belum diubah
$pdo = $database->getConnection();
