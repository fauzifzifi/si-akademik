<?php

class Dosen
{
    public function getAll()
    {
        return [
            [
                'nidn' => '001',
                'nama' => 'Ahmad',
                'prodi' => 'Teknik Informatika'
            ],
            [
                'nidn' => '002',
                'nama' => 'Siti',
                'prodi' => 'Sistem Informasi'
            ],
            [
                'nidn' => '003',
                'nama' => 'Budi',
                'prodi' => 'Teknik Informatika'
            ],
        ];
    }

    public function getByNidn($nidn)
    {
        $dosen = $this->getAll();

        foreach ($dosen as $dsn) {
            if ($dsn['nidn'] === $nidn) {
                return $dsn;
            }
        }

        return null;
    }
}