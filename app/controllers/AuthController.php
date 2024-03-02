<?php

session_start();

require 'app/models/auth/Auth.php';
require 'app/models/config/Connection.php';

class AuthController {
    
    public function login() {
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
        // Lógica para la página de inicio estática
        include 'app/views/auth/register.php';
    }
    // Otros métodos para páginas estáticas según sea necesario
}



?>