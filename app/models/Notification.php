<?php

class Notification {
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createNotification($fecha, $id_usuario, $id_publi)  {

        $st = $this->conn->prepare("INSERT INTO notificaciones(fecha, id_usuario, id_publi) 
        VALUES (?, ?, ?)");
        return $st->execute([$fecha, $id_usuario, $id_publi]);
    }

    public function getNotification($data) {

        $st = $this->conn->prepare(
        "SELECT n.id_noti, p.titulo, p.descripcion, n.is_active, n.fecha, n.estatus, n.id_usuario, s.*,
        (SELECT nombre FROM usuarios WHERE id_usuario = n.id_usuario) AS asesor, 
        (SELECT id_stripe FROM usuarios WHERE id_usuario = n.id_usuario) AS id_stripe, 
        (SELECT nombre FROM categorias WHERE id_categoria = p.id_categoria) AS categoria 
        FROM notificaciones n 
        INNER JOIN usuarios u ON n.id_usuario = u.id_usuario 
        INNER JOIN publicaciones p ON n.id_publi = p.id_publi 
        INNER JOIN salas s ON n.id_noti = s.id_noti
        WHERE u.nombre = ?
        or p.titulo = ?
        or n.id_usuario = ?
        or p.id_publi IN (SELECT id_publi FROM publicaciones WHERE id_usuario = ?)");
        $st->execute([$data, $data, $data, $data]);
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

    public function updateNotification($id) {
        $st = $this->conn->prepare("UPDATE notificaciones SET estatus = 'pagado' WHERE id_noti = ?");
        return $st->execute([$id]);
    }

}

?>