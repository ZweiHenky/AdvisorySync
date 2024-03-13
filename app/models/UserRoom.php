<?php

class UserRoom {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getUserRoom($data) {
        $st = $this->conn->prepare(
            "SELECT su.id_sala_usuario, u.nombre, u.correo, s.access_token
            FROM salas_usuarios su
            INNER JOIN usuarios u
            on su.id_usuario = u.id_usuario
            INNER JOIN salas s
            on su.id_sala = s.id_sala
            WHERE s.access_token = ?
            or u.nombre = ?
            or u.correo = ? ");
            $st->execute([$data, $data, $data]);
            return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllUserRoom($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query(
        "SELECT su.id_sala_usuario, u.nombre, u.correo, s.access_token
        FROM salas_usuarios su
        INNER JOIN usuarios u
        on su.id_usuario = u.id_usuario
        INNER JOIN salas s
        on su.id_sala = s.id_sala 
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }   

    /* public function deleteUser($id) {
        $st = $this->conn->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
        return $st->execute([$id]);
    } */

}

?>