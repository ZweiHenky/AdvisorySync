<?php

require 'app/models/auth/Auth.php';
require 'app/models/config/Connection.php';

class AuthController {
    
    public function login() {
        if (isset($_SESSION['usuario'])) {
            if ($_SESSION['usuario']['is_admin'] == false) {
                header('location: http://localhost/advisorysync/dynamic/home');
            }else{
                header('location: http://localhost/advisorysync/admin/home');
            }
        }
        // Lógica para la página de inicio estática
        $conn = Connection::conn();
        $errorMessage = '';

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $email = $_POST['email'];
            $pasword = $_POST['password'];

            $auth = new Auth($conn);

            $user = $auth->login($email, $pasword);

            if (empty($user)) {
                $errorMessage = 'El correo o la contraseña es incorrecto';
            }else{
                $_SESSION['usuario'] = $user;

                if ($_SESSION['usuario']['is_admin'] == false) {
                    header('location: http://localhost/advisorysync/dynamic/home');
                }else{
                    header('location: http://localhost/advisorysync/admin/home');
                }

                
            }
        }

        include 'app/views/auth/login.php';
    }


    public function register() {
        if (isset($_SESSION['usuario'])) {
            if ($_SESSION['usuario']['is_admin'] == false) {
                header('location: http://localhost/advisorysync/static/home');
            }else{
                header('location: http://localhost/advisorysync/admin/home');
            }
        }
        // Lógica para la página de inicio estática
        include 'app/views/auth/register.php';
    }

    public function logOut(){
        $conn = Connection::conn();
        $auth = new Auth($conn);
        $auth->logOut();
    }
    // Otros métodos para páginas estáticas según sea necesario
}

?>