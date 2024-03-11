<?php

class Admin{

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function countAdvisory(){
        $sql = 'select count(id_publi) from publicaciones';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function countUser(){
        $sql = 'select count(id_usuario) from usuarios';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function revenue(){
        $sql = 'select count(id_noti)*50 from notificaciones where estatus = "pagado"';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function lastAdvisory(){
        $sql = 'select u.nombre,n.fecha, n.estatus from notificaciones n INNER JOIN usuarios u on n.id_usuario = u.id_usuario order by fecha DESC limit 5;';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchAll(PDO::FETCH_ASSOC);
    }

    public function topUser(){
        $sql ='SELECT u.nombre, ROUND(AVG(r.valoracion), 1) AS valoracion FROM resenas r INNER JOIN usuarios u ON r.id_usuario = u.id_usuario GROUP BY u.nombre ORDER BY valoracion DESC LIMIT 5';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchAll(PDO::FETCH_ASSOC);
    }

    public function countAdviser(){
        $sql ='select count(id_usuario) from usuarios where id_stripe != "null"';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function countStudent(){
        $sql ='select count(id_usuario) from usuarios where id_stripe = "null"';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function allUsers(){
        $sql ='SELECT count(*) from usuarios';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function allAdvisory(){
        $sql ='SELECT count(*) from publicaciones';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function allCategories(){
        $sql ='SELECT count(*) from categorias';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function allSubCategories(){
        $sql ='SELECT count(*) from sub_categorias';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function moreUsedCategory(){
        $sql ='select c.nombre from publicaciones p INNER JOIN categorias c ON p.id_categoria = c.id_categoria GROUP by c.nombre ORDER BY count(c.nombre) DESC limit 1';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        return $consult->fetchColumn();
    }

    public function allCategory(){
        $sql ='SELECT * from categorias';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
       return$consult->fetchAll(PDO::FETCH_ASSOC);
    }

}

?>