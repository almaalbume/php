<?php

class Database {

    private $dbname = 'aburbano';
    private $host = '127.0.0.1';
    private $port = '5432';
    private $user = 'postgres';
    private $password = '390311';
    public $conn;

    public function getConnection() {
        $this->conn = null;
        try {
            $this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->dbname . ";user=" . $this->user . ";password=" . $this->password);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }
        return $this->conn;
    }

    public function closConnection() {
        $this->conn = null;
    }

}
