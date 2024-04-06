<?php

class Auth{

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($email, $password){
        $sql = 'select * from usuarios where correo = :correo and password = :password';
        $consult = $this->conn->prepare($sql);
        $consult->execute(array(':correo'=> $email, ':password' => $password));
        return $consult->fetch(PDO::FETCH_ASSOC);
    }

    public function usuarioExistente($correo) {
        $sql = "SELECT COUNT(*) as count FROM usuarios WHERE correo = :correo";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        return $row['count'] > 0;
    }

    public function registerU($nombre, $apellidos, $correo,$password){
        if ($this->usuarioExistente($correo)) {
            return false; // El usuario ya existe
        }
            $sql = "INSERT INTO usuarios (nombre, apellidos, correo, password) VALUES (?,?,?,?)";
            $st = $this->conn->prepare($sql);
            return $st->execute([$nombre, $apellidos, $correo, $password]);
           
        
}

    public function logOut()  {
        unset($_SESSION['usuario']);
        session_destroy();
        header('location: http://localhost/advisorysync/auth/login');
    }
}

?>