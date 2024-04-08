<?php

class Room{
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function createRoom($id, $token, $channel, $id_noti) {
        $st = $this->conn->prepare("INSERT INTO salas (id_sala, access_token, nombre, id_noti) VALUES (?,?,?,?)");
        return $st->execute([$id, $token, $channel, $id_noti]);
    }
}

?>