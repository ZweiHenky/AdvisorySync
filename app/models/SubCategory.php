<?php

class SubCategory {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createSubCategory($nombre, $id) {
        $sql = "INSERT INTO sub_categorias (nombre, id_categoria) VALUES (?, ?)";
        $st = $this->conn->prepare($sql);
        return $st->execute([$nombre, $id]);
    }

    public function getSubCategory($data) {
        $st = $this->conn->prepare("SELECT s.*, c.nombre as nombreCategoria
        FROM sub_categorias s
        inner join categorias c
        on c.id_categoria = s.id_categoria
        WHERE c.nombre = ? or s.nombre = ?");
        $st->execute([$data,$data]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateCategory($id, $nombre, $descripcion, $imagen) {
        $st = $this->conn->prepare("UPDATE categorias SET nombre = ?, descripcion = ?, img = ? WHERE id_categoria = ?");
        return $st->execute([ $nombre, $descripcion, $imagen, $id ]);
    }

    public function updateSubCategory($id_sub, $nombre, $id_categoria) {
        $st = $this->conn->prepare("UPDATE sub_categorias SET nombre = ?, id_categoria = ? WHERE id_sub_categoria = ?");
        return $st->execute([ $nombre, $id_categoria, $id_sub ]);
    }

    public function deleteSubCategory($id) {
        $st = $this->conn->prepare("DELETE FROM sub_categorias WHERE id_sub = ?");
        return $st->execute([$id]);
    }

    public function getAllSubCategories($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query("SELECT s.*, c.nombre as nombreCategoria 
        FROM sub_categorias s
        inner join categorias c
        on c.id_categoria = s.id_categoria
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>