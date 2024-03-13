<?php

class SubCategory {

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createSubCategory($nombre, $id_categoria) {
        $sql = "INSERT INTO sub_categorias (nombre, id_categoria) VALUES (?, ?)";
        $st = $this->conn->prepare($sql);
        return $st->execute([$nombre, $id_categoria]);
    }

    public function getSubCategory($data) {
        $st = $this->conn->prepare("SELECT s.*, c.nombre as nombreCategoria
        FROM sub_categorias s
        inner join categorias c
        on c.id_categoria = s.id_categoria
        WHERE c.nombre = ? or s.nombre = ? or s.id_sub = ?" );
        $st->execute([$data,$data, $data]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateSubCategory($nombre, $id_sub) {
        $st = $this->conn->prepare ("UPDATE sub_categorias SET nombre = ? WHERE id_sub = ?");
        $st->execute([$nombre, $id_sub]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
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