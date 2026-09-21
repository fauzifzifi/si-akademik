<?php

require_once __DIR__ . '/../Repositories/MahasiswaRepository.php';
require_once __DIR__ . '/../Models/Mahasiswa.php';
require_once __DIR__ . '/../Models/Dosen.php';

// Bedanya sama sebelum di-refactor: controller ini gak manggil "global $pdo"
// lagi. Dia dikasih MahasiswaRepository langsung pas dibuat (lihat public/index.php).
class MahasiswaController
{
    private $mahasiswaRepository;

    public function __construct(MahasiswaRepository $mahasiswaRepository)
    {
        $this->mahasiswaRepository = $mahasiswaRepository;
    }

    public function index()
    {
        $mahasiswa = $this->mahasiswaRepository->getAll();
        require __DIR__ . '/../Views/mahasiswa/index.php';
    }

    public function detail($nim)
    {
        $mahasiswa = $this->mahasiswaRepository->getByNim($nim);

        if (!$mahasiswa) {
            echo "Data mahasiswa tidak ditemukan";
            return;
        }

        require __DIR__ . '/../Views/mahasiswa/detail.php';
    }

    public function create()
    {
        $listDosen = $this->getListDosen();
        require __DIR__ . '/../Views/mahasiswa/create.php';
    }

    public function store()
    {
        try {
            $mahasiswa = new Mahasiswa(
                $_POST['nim'],
                $_POST['nama'],
                $_POST['prodi'],
                $_POST['dosen_id'] ?: null
            );

            $this->mahasiswaRepository->create($mahasiswa);

            header('Location: /si-akademik/public/mahasiswa');
            exit;
        } catch (Exception $e) {
            // kalo validasi di setter gagal, balik lagi ke form + tampilin pesan error-nya
            $error = $e->getMessage();
            $listDosen = $this->getListDosen();
            require __DIR__ . '/../Views/mahasiswa/create.php';
        }
    }

    public function edit()
    {
        $nim = $_GET['nim'];
        $mahasiswa = $this->mahasiswaRepository->getByNim($nim);
        $listDosen = $this->getListDosen();
        require __DIR__ . '/../Views/mahasiswa/edit.php';
    }

    public function update()
    {
        $nimLama = $_GET['nim'];

        try {
            $mahasiswa = new Mahasiswa(
                $_POST['nim'],
                $_POST['nama'],
                $_POST['prodi'],
                $_POST['dosen_id'] ?: null
            );

            $this->mahasiswaRepository->update($nimLama, $mahasiswa);

            header('Location: /si-akademik/public/mahasiswa');
            exit;
        } catch (Exception $e) {
            $error = $e->getMessage();
            $mahasiswa = $this->mahasiswaRepository->getByNim($nimLama);
            $listDosen = $this->getListDosen();
            require __DIR__ . '/../Views/mahasiswa/edit.php';
        }
    }

    public function delete()
    {
        $nim = $_GET['nim'];
        $this->mahasiswaRepository->delete($nim);

        header('Location: /si-akademik/public/mahasiswa');
        exit;
    }

    private function getListDosen()
    {
        global $pdo;
        $modelDosen = new Dosen($pdo);
        return $modelDosen->getAll();
    }
}
