<?php

class Advisory {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createAdvisory($titulo, $descripcion, $horarios, $id_categoria, $id_usuario) {
        $sql = "INSERT INTO publicaciones(titulo, descripcion, horarios, id_categoria, id_usuario) 
        VALUES (?,?,?,?,?)";
        $st = $this->conn->prepare($sql);
        return $st->execute([$titulo, $descripcion, $horarios, $id_categoria, $id_usuario]);
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
        order by fecha desc
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllAdvisoriesWithUser($empezar_desde, $resultados_por_pagina, $id_user, $titulo, $categoria) {
        $st = $this->conn->prepare("SELECT p.*, u.nombre, c.nombre as categoria
        FROM publicaciones p 
        INNER JOIN usuarios u ON u.id_usuario = p.id_usuario 
        INNER JOIN categorias c ON p.id_categoria = c.id_categoria 
        where p.id_usuario <> ?
        and p.titulo like '%' ? '%'
        and p.id_categoria like '%' ? '%'
        order by fecha desc
        LIMIT $empezar_desde , $resultados_por_pagina");
        $st->execute([$id_user,$titulo, $categoria]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>