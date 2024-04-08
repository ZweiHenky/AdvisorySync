<?php
class Favorites{
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
    function getFavorites($data){
        $st = $this->conn->prepare(
            "SELECT p.id_publi,p.titulo,p.descripcion,p.fecha,p.horarios,c.nombre as categoria,u.nombre,u.apellidos
            FROM favoritos f 
            inner join publicaciones p 
            on p.id_publi = f.id_publi 
            inner join usuarios u 
            on u.id_usuario = p.id_usuario 
            inner join categorias c
            on c.id_categoria =p.id_categoria
            WHERE f.id_usuario = 1");
            $st->execute();
            return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    function addFavorites($data){
        $st = $this->conn->prepare(
            "INSERT INTO `favoritos`(`id_fav`, `id_usuario`, `id_publi`) VALUES ('','1','2');");
            $st->execute();
            return $st->fetchAll(PDO::FETCH_ASSOC);
    }

    
}


?>