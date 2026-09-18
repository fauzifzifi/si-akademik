<?php
require_once __DIR__ . '/../Models/Dosen.php';
class DosenController
{
    public function index()
    {
        global $pdo;
        $model = new Dosen($pdo);
        $dosen = $model->getAll();
        require_once __DIR__ . '/../Views/dosen/index.php';
    }
}