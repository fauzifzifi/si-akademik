<?php

require_once __DIR__ . '/../Models/Mahasiswa.php';
class MahasiswaController
{
    public function index()
    {
        $Model = new Mahasiswa();
        $mahasiswa = $Model->getAll();
        require_once __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail()
    {
        $model = new Mahasiswa();
        $nim = $_GET['nim'];
        $mahasiswa = $model->getByNim($nim);
        require_once __DIR__ . '/../Views/mahasiswa/detail.php';
    }
}