<?php

// Ini object Mahasiswa. Beda sama versi lama, class ini gak nyentuh
// database sama sekali, cuma nyimpen data 1 mahasiswa aja.
// Atributnya private semua, jadi harus lewat getter/setter kalo mau akses.
class Mahasiswa
{
    private $nim;
    private $nama;
    private $prodi;
    private $dosenId;
    private $namaDosen; // ini bukan kolom asli, cuma ikutan dari JOIN ke tabel dosen

    public function __construct($nim, $nama, $prodi, $dosenId = null)
    {
        $this->setNim($nim);
        $this->setNama($nama);
        $this->setProdi($prodi);
        $this->setDosenId($dosenId);
    }

    // ===== getter =====
    public function getNim()
    {
        return $this->nim;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getProdi()
    {
        return $this->prodi;
    }

    public function getDosenId()
    {
        return $this->dosenId;
    }

    public function getNamaDosen()
    {
        return $this->namaDosen;
    }

    // ===== setter (ada validasi dikit) =====
    public function setNim($nim)
    {
        // nim harus angka semua
        if (!ctype_digit($nim)) {
            throw new Exception('NIM harus berupa angka');
        }
        $this->nim = $nim;
    }

    public function setNama($nama)
    {
        // nama gak boleh kosong
        if (trim($nama) == '') {
            throw new Exception('Nama mahasiswa tidak boleh kosong');
        }
        $this->nama = $nama;
    }

    public function setProdi($prodi)
    {
        if (trim($prodi) == '') {
            throw new Exception('Program studi tidak boleh kosong');
        }
        $this->prodi = $prodi;
    }

    public function setDosenId($dosenId)
    {
        $this->dosenId = $dosenId;
    }

    public function setNamaDosen($namaDosen)
    {
        $this->namaDosen = $namaDosen;
    }
}
