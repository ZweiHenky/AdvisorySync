<?php

class Auth{

    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function login($email, $password){
        $sql = 'select * from usuarios where correo = :email and password = :password';
        $consult = $this->conn->prepare($sql);
        $consult->execute(array(':email'=> $email, ':password' => $password));
        return $consult->fetch(PDO::FETCH_ASSOC);
    }

    public function register(){

    }

    public function logOut()  {
        unset($_SESSION['usuario']);
        session_destroy();
        header('location: http://localhost/advisorysync/auth/login');
    }
}

?>