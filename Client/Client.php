<?php

class Client {

    private $conn;
    public $id;
    public $firstname;
    public $lastname;
    public $birthday;
    public $gender;

    public function __construct($db) {
        $this->conn = $db;
    }

    function readAll() {
        $query = "SELECT * FROM Client";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function createClient() {
        $query = "INSERT INTO CLIENT(firstname, lastname, birthday, gender) "
                . "VALUES('" . $this->firstname . "'"
                . ",'" . $this->lastname . "'"
                . ",'" . $this->birthday . "'"
                . ",'" . $this->gender . "')";
        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return true;
        } else {
            echo "<pre>";
            print_r($stmt->errorInfo());
            echo "</pre>";
            return false;
        }
    }
}
