<?php

require 'app/models/auth/Auth.php';
require 'app/models/config/Connection.php';

class AuthController {

    private $user;
    
    public function __construct() {
        $this->user = new Auth(Connection::conn());
    }

    public function login() {
        if (isset($_SESSION['usuario'])) {
            if ($_SESSION['usuario']['is_admin'] == false) {
                header('location: http://localhost/advisorysync/static/home');
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

        if(isset($_POST['create'])){
            $nombre = $_POST['nombre'];
            $apellidos = $_POST['apellidos'];
            $correo = $_POST['correo'];
            $password = $_POST['password'];

            $errores = [];

            //Validar que sea un correo valido
            if (filter_var($_POST["correo"], FILTER_VALIDATE_EMAIL)) {
            } else {
                $errores[] = "Correo invalido";
                include 'app/views/auth/register.php';
                return;
                
            }

            if (preg_match('/^[\s\p{L}]+$/u', $nombre)) {
            } else {
                $errores[] = "Nombre con valores no validos";
                include 'app/views/auth/register.php';
                return;
            }

            if (preg_match('/^[\s\p{L}]+$/u', $apellidos)) {
            } else {
                $errores[] = "Apellidos con valores no validos";
                include 'app/views/auth/register.php';
                return;
            }

            //Valida que el correo no exista en la base de datos
            if($this->user->usuarioExistente($correo)){
                $errores[] = "El correo ingresado ya esta registrado";
                include 'app/views/auth/register.php';
                if (!empty($errores)) {
                    $_SESSION['datos_formulario'] = $_POST; // Guardar datos en la sesión
                    header('http://localhost/advisorysync/auth/register');
                }
                return;
            }else{
                try {
                    $_SESSION['crear'] = $this->user->registerU($nombre, $apellidos, $correo, $password);
                    if ($_SESSION['usuario']['is_admin'] == false) {
                        header('location: http://localhost/advisorysync/dynamic/home');
                    }else{
                        header('location: http://localhost/advisorysync/admin/home');
                    }
                } catch (\Throwable $th) {
                    $_SESSION['crear'] = false;
                }
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