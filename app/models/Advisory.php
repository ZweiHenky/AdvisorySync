<?php

class Advisory {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createUser($username, $email) {
        $sql = "INSERT INTO users (username, email) VALUES (?, ?)";
        $st = $this->conn->prepare($sql);
        return $st->execute([$username, $email]);
    }

    public function getAdvisory($data) {
        $st = $this->conn->prepare("SELECT p.*, u.nombre, c.nombre as categoria
        FROM publicaciones p
        INNER JOIN usuarios u ON u.id_usuario = p.id_usuario 
        INNER JOIN categorias c ON p.id_categoria = c.id_categoria 
        WHERE u.nombre = ?
        or titulo = ?
        or c.nombre = ?");
        $st->execute([$data, $data, $data]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateUser($id, $username, $email) {
        $st = $this->conn->prepare("UPDATE users SET username = ?, email = ? WHERE id = ?");
        return $st->execute([$username, $email, $id]);
    }

    public function deleteAdvisory($id) {
        $st = $this->conn->prepare("DELETE FROM publicaciones WHERE id_publi = ?");
        return $st->execute([$id]);
    }

    public function getAllAdvisories($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query("SELECT p.*, u.nombre, c.nombre as categoria
        FROM publicaciones p 
        INNER JOIN usuarios u ON u.id_usuario = p.id_usuario 
        INNER JOIN categorias c ON p.id_categoria = c.id_categoria 
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>