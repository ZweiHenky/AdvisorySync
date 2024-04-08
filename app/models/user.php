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
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateUser($email , $id_stripe) {
        $st = $this->conn->prepare("UPDATE usuarios SET id_stripe = ? WHERE correo = ?");
        return $st->execute([$id_stripe, $email]);
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