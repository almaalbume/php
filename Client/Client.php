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
        $query = "INSERT INTO CLIENT(firstname, lastname, birthday, gender) VALUES(?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);

        $this->firstname = htmlspecialchars(strip_tags($this->firstname));
        $this->lastname = htmlspecialchars(strip_tags($this->lastname));
        $this->birthday = htmlspecialchars(strip_tags($this->birthday));
        $this->gender = htmlspecialchars(strip_tags($this->gender));

        $stmt->bindParam(1, $this->firstname);
        $stmt->bindParam(2, $this->lastname);
        $stmt->bindParam(3, $this->birthday);
        $stmt->bindParam(4, $this->gender);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteClient() {
        $query = "DELETE FROM Client WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

}
