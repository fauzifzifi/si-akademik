<?php

// Class ini tugasnya cuma satu: bikin koneksi ke database pakai PDO.
// Repository nanti tinggal minta object Database ini lewat constructor,
// jadi Repository gak perlu tau host/username/password-nya apa.
class Database
{
    private $host;
    private $dbname;
    private $username;
    private $password;
    private $connection;

    public function __construct($host, $dbname, $username, $password)
    {
        $this->host = $host;
        $this->dbname = $dbname;
        $this->username = $username;
        $this->password = $password;
    }

    public function getConnection()
    {
        // kalo belum pernah konek, baru bikin koneksi baru
        if ($this->connection == null) {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname . ";charset=utf8mb4";
            $this->connection = new PDO($dsn, $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        return $this->connection;
    }
}
