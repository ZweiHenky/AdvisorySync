<?php

class Category {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createCategory($nombre, $descripcion, $imagen) {
        $sql = "INSERT INTO categorias (nombre, descripcion, img) VALUES (?, ?, ?)";
        $st = $this->conn->prepare($sql);
        return $st->execute([$nombre, $descripcion, $imagen]);
    }

    public function getCategory($data) {
        $st = $this->conn->prepare("SELECT *
        FROM categorias 
        WHERE nombre = ? or id_categoria = ?");
        $st->execute([$data,$data]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateCategory($id, $nombre, $descripcion, $imagen) {
        $st = $this->conn->prepare("UPDATE categorias SET nombre = ?, descripcion = ?, img = ? WHERE id_categoria = ?");
        return $st->execute([ $nombre, $descripcion, $imagen, $id ]);
    }

    public function deleteCategory($id) {
        $st = $this->conn->prepare("DELETE FROM categorias WHERE id_categoria = ?");
        return $st->execute([$id]);
    }

    public function getAllCategories($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query("SELECT *
        FROM categorias
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllCategoriesS() {
        $st = $this->conn->query("SELECT *
        FROM categorias");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>