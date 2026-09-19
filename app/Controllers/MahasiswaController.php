<?php

require_once __DIR__ . '/../Models/Mahasiswa.php';

class MahasiswaController
{
    public function index()
    {
        global $pdo;
        $Model = new Mahasiswa($pdo);
        $mahasiswa = $Model->getAll();
        require_once __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail($nim)
    {
        global $pdo;
        $model = new Mahasiswa($pdo);
        $mahasiswa = $model->getByNim($nim);
        require_once __DIR__ . '/../Views/mahasiswa/detail.php';
    }
}