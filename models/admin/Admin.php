<?php

class Admin{

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public static function allUsers(){
        $sql = 'select * from users';
        $consult = $this->conn->prepare($sql);
        $consult->execute();
        $result = $consult->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

}

?>