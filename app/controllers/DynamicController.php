
<?php

require_once 'app/assets/stripe-php/init.php';

$stripe = new \Stripe\StripeClient([
    'api_key' => 'sk_test_51OYJJaFjNS97mgyJcoFOfkVpNPryQWtDqFZgiiqyUH95ucET8e2Hc6lm3NfSxsPIV9PgfJ3ZYbH67OKla9bk2FiT001gRttnq0'
]);
  

$account = $stripe->accounts->create([
    'type' => 'express',
    'country' => 'MX',
    'email' => 'ejemplo@example.com',
    'capabilities' => [
      'card_payments' => ['requested' => true],
      'transfers' => ['requested' => true],
    ],
  ]);



class DynamicController {
    
    public function home() {
        // Lógica para la página de inicio del usuario

        // 1.- buscar todas las publicaciones con paginacion

        // 2.- buscar por titulo y categoria con paginacion 

        // 4.- mostrar las publicaciones

        // 3.- Aceptar publicacion 

        if (isset($_POST['aceptar'])) {
            if ($_SESSION['usuario']['id_stripe'] != 'null') {
                // echo 'asesor';
            }else{
                // echo 'estudiante';
            }
        }

        if (isset($_POST['buscar'])) {
            
        }

        include 'app/views/dynamic/home.php';
    }

    public function profile(){
        // Lógica para la página de perfil del usuario

        // 1.- Mostrar los datos del usuario con la variable $_SESSION['usuario']

        // 2.- mostrar las publicaciones de la tabla notificaciones con los datos que estan en la tabla de ejemplo con paginacion

        // 3.- Mostrar las reseñas en la seccion de reseñas con paginacion

        // 4.- Mostrar las publicaciones guardadas del usuario en la seccion de guardados


        include 'app/views/dynamic/profile.php';
    }

    public function settings(){
        // Lógica para la página de perfil del usuario

        // 1.- Mostrar los datos del usuario con la variable $_SESSION['usuario']

        // 2.- mostrar las publicaciones de la tabla notificaciones con los datos que estan en la tabla de ejemplo con paginacion

        // 3.- Mostrar las reseñas en la seccion de reseñas con paginacion

        // 4.- Mostrar las publicaciones guardadas del usuario en la seccion de guardados

        if (isset($_POST['buscar'])) {
            
        }

        include 'app/views/dynamic/settings.php';
    }

    public function stream() {
        include 'app/views/dynamic/stream.php';
    }

    // Otros métodos para páginas estáticas según sea necesario
}


?>