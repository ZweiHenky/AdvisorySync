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

    public function getUser($data) {
        $st = $this->conn->prepare("SELECT * FROM usuarios u left join resenas r on u.id_usuario = r.id_usuario WHERE nombre = ? or correo = ?");
        $st->execute([$data, $data]);
        return $st->fetchU(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $username, $email) {
        $st = $this->conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        return $st->execute([$username, $email, $id]);
    }

    public function deleteUser($id) {
        $st = $this->conn->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
        return $st->execute([$id]);
    }

    public function getAllUsers($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query("SELECT *, u.id_usuario FROM usuarios u left join resenas r on u.id_usuario = r.id_usuario LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>