<?php

class User {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createUser($username, $email) {
        $sql = "INSERT INTO users (username, email) VALUES (?, ?)";
        $st = $this->conn->prepare($sql);
        return $st->execute([$username, $email]);
    }

    public function getUser($id) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE id = ?");
        $st->execute([$id]);
        return $st->fetch(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $username, $email) {
        $st = $this->conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        return $st->execute([$username, $email, $id]);
    }

    public function deleteUser($id) {
        $st = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        return $st->execute([$id]);
    }

    public function getAllUsers() {
        $st = $this->conn->query("SELECT * FROM usuarios");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>