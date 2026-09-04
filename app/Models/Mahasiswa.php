<?php
class Mahasiswa
{
    public function getAll()
    {
        return [
            [
                'nim' => '23001',
                'nama' => 'Andi',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23002',
                'nama' => 'Budi',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23003',
                'nama' => 'Citra',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23004',
                'nama' => 'Wil&',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23006',
                'nama' => 'Rizky',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nim' => '23007',
                'nama' => 'Faul',
                'prodi' => 'Teknik Informatika'
            ]
        ];
    }

    public function getByNim($nim)
    {

        $mahasiswa = $this->getAll();

        foreach ($mahasiswa as $mhs) {
            if ($mhs['nim'] === $nim) {
                return $mhs;
            }
        }

        return null;
    }
}