<?php

class Review {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getReview($data) {
        $st = $this->conn->prepare("SELECT * FROM resenas r left join usuarios r on u.id_usuario = u.id_usuario WHERE comentario = ? or valoracion = ?");
        $st->execute([$data, $data]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function deleteReview($id) {
        $st = $this->conn->prepare("DELETE FROM resenas WHERE id_resena = ?");
        return $st->execute([$id]);
    }

    public function getAllReviews($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query("SELECT r.*, u.nombre, u.apellidos as nombreUsuario 
        FROM resenas r
        inner join usuarios u
        on r.id_usuario = u.id_usuario
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>