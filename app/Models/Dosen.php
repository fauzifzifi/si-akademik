<?php

class Dosen
{
    public function getAll()
    {
        return [
            [
                'nidn' => '001',
                'nama' => 'Bapak Ahmad'
            ],
            [
                'nidn' => '002',
                'nama' => 'Ibu Siti'
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