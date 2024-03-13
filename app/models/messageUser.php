<?php

class MessageUser {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getMessage($data) {
        $st = $this->conn->prepare(
        "SELECT * 
        FROM mensajes m
        INNER JOIN usuarios u
        on m.id_usuario = u.id_usuario
        INNER JOIN salas s
        on m.id_sala = s.id_sala
        WHERE s.access_token = ?
        or u.nombre = ?");
        $st->execute([$data, $data]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllMessagesUser($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query(
        "SELECT m.id_mensaje, m.mensaje, m.fecha , u.nombre, s.access_token
        FROM mensajes m
        INNER JOIN usuarios u
        on m.id_usuario = u.id_usuario
        INNER JOIN salas s
        on m.id_sala = s.id_sala 
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }   

    public function deleteUser($id) {
        $st = $this->conn->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
        return $st->execute([$id]);
    }

}

?>