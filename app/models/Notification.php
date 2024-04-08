<?php

class Notification {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getNotification($data) {
        $st = $this->conn->prepare(
        "SELECT n.id_noti, u.nombre, p.titulo, p.descripcion, n.is_active, n.fecha
        FROM notificaciones n
        INNER JOIN usuarios u
        on n.id_usuario = u.id_usuario
        INNER JOIN publicaciones p
        on n.id_publi = p.id_publi
        WHERE u.nombre = ?
        or p.titulo = ?");
        $st->execute([$data, $data]);
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllNotifications($empezar_desde, $resultados_por_pagina) {
        $st = $this->conn->query(
        "SELECT n.id_noti, u.nombre, p.titulo, p.descripcion, n.is_active, n.fecha
        FROM notificaciones n
        INNER JOIN usuarios u
        on n.id_usuario = u.id_usuario
        INNER JOIN publicaciones p
        on n.id_publi = p.id_publi
        LIMIT $empezar_desde, $resultados_por_pagina");
        return $st->fetchAll(PDO::FETCH_ASSOC);
    }   

    /* public function deleteUser($id) {
        $st = $this->conn->prepare("DELETE FROM usuarios WHERE id_usuario = ?");
        return $st->execute([$id]);
    } */

    public function getUserNotifications($userId){
        $st = $this->conn->prepare(
            "SELECT * FROM notificaciones WHERE id_usuario = ?");
        $st->execute([$userId]);
        return $st->fetch(PDO::FETCH_ASSOC);
    }

}

?>