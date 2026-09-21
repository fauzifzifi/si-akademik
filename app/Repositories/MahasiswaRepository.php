<?php

require_once __DIR__ . '/../Core/Database.php';
require_once __DIR__ . '/../Models/Mahasiswa.php';

// Semua query ke tabel mahasiswa dikumpulin di sini.
// Bedanya sama Model Dosen yang lama: Repository ini gak bikin koneksi sendiri,
// tapi dikasih object Database dari luar (lewat constructor).
class MahasiswaRepository
{
    private $pdo;

    public function __construct(Database $database)
    {
        $this->pdo = $database->getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT mahasiswa.*, dosen.nama AS nama_dosen
                FROM mahasiswa
                LEFT JOIN dosen ON mahasiswa.dosen_id = dosen.id
                ORDER BY mahasiswa.nama ASC";

        $stmt = $this->pdo->query($sql);
        $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // ubah tiap baris array jadi object Mahasiswa
        $listMahasiswa = [];
        foreach ($rows as $row) {
            $listMahasiswa[] = $this->arrayToObject($row);
        }

        return $listMahasiswa;
    }

    public function getByNim($nim)
    {
        $stmt = $this->pdo->prepare(
            "SELECT mahasiswa.*, dosen.nama AS nama_dosen
             FROM mahasiswa
             LEFT JOIN dosen ON mahasiswa.dosen_id = dosen.id
             WHERE mahasiswa.nim = :nim"
        );
        $stmt->execute(['nim' => $nim]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$row) {
            return null;
        }

        return $this->arrayToObject($row);
    }

    public function create(Mahasiswa $mhs)
    {
        $stmt = $this->pdo->prepare(
            "INSERT INTO mahasiswa (nim, nama, prodi, dosen_id)
             VALUES (:nim, :nama, :prodi, :dosen_id)"
        );

        return $stmt->execute([
            'nim' => $mhs->getNim(),
            'nama' => $mhs->getNama(),
            'prodi' => $mhs->getProdi(),
            'dosen_id' => $mhs->getDosenId(),
        ]);
    }

    // $nimLama dipake buat cari baris yang mau diupdate,
    // soalnya nim baru bisa aja beda sama nim lama
    public function update($nimLama, Mahasiswa $mhs)
    {
        $stmt = $this->pdo->prepare(
            "UPDATE mahasiswa
             SET nim = :nim, nama = :nama, prodi = :prodi, dosen_id = :dosen_id
             WHERE nim = :nim_lama"
        );

        return $stmt->execute([
            'nim' => $mhs->getNim(),
            'nama' => $mhs->getNama(),
            'prodi' => $mhs->getProdi(),
            'dosen_id' => $mhs->getDosenId(),
            'nim_lama' => $nimLama,
        ]);
    }

    public function delete($nim)
    {
        $stmt = $this->pdo->prepare("DELETE FROM mahasiswa WHERE nim = :nim");
        return $stmt->execute(['nim' => $nim]);
    }

    // helper buat ubah 1 baris hasil query jadi object Mahasiswa
    private function arrayToObject($row)
    {
        $mhs = new Mahasiswa($row['nim'], $row['nama'], $row['prodi'], $row['dosen_id']);
        $mhs->setNamaDosen($row['nama_dosen']);
        return $mhs;
    }
}
