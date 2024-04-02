
<?php



class DynamicController {
    
    public function home() {

        require_once 'app/assets/stripe-php/init.php';

        $stripe = new \Stripe\StripeClient([
            'api_key' => 'sk_test_51P0IeWP9Ot3ecyAmM9aCRnphdEMkJJoLtlHaomOPghHWr8Pt35fH74cCqFN5jYPXYFXNmUphODU0m8tHzVorVm0s00lMeZ1qwy'
        ]);

        // Lógica para la página de inicio del usuario

        // 1.- buscar todas las publicaciones con paginacion

        // 2.- buscar por titulo y categoria con paginacion 

        // 4.- mostrar las publicaciones

        // 3.- Aceptar publicacion 

        // var_dump($_SESSION['usuario']);
        // echo $_SESSION['usuario']['id_stripe'];

        if (isset($_POST['aceptar'])) {
            if (isset($_SESSION['usuario']['id_stripe']) ) {
                // echo 'asesor';

            }else{
                // echo 'estudiante';

                // $account = $stripe->accounts->create([
                //     'type' => 'express',
                //     'country' => 'MX',
                //     'email' => 'ejemplo3@example.com',
                //     'capabilities' => [
                //     'card_payments' => ['requested' => true],
                //     'transfers' => ['requested' => true],
                //     ],
                // ]);

                // $_SESSION['usuario']['id_stripe'] = $account['id'];

                // $url =  $stripe->accountLinks->create([
                //     'account' => $_SESSION['usuario']['id_stripe'],
                //     'refresh_url' => 'http://localhost/advisorysync/dynamic/refresh',
                //     'return_url' => 'http://localhost/advisorysync/dynamic/return',
                //     'type' => 'account_onboarding',
                // ]);

                // header("location: {$url['url']}");

            }
        }

        if (isset($_POST['buscar'])) {
            
        }

        include 'app/views/dynamic/home.php';
    }

    public function profile(){

        
        require_once 'app/assets/stripe-php/init.php';

        $stripe = new \Stripe\StripeClient([
            'api_key' => 'sk_test_51P0IeWP9Ot3ecyAmM9aCRnphdEMkJJoLtlHaomOPghHWr8Pt35fH74cCqFN5jYPXYFXNmUphODU0m8tHzVorVm0s00lMeZ1qwy'
        ]);

        if (isset($_POST['pagar'])) {
            $url = $stripe->checkout->sessions->create([
                'mode' => 'payment',
                'line_items' => [
                  [
                    'price' => 'price_1P0v4dP9Ot3ecyAml9PugWsP',
                    'quantity' => 1,
                  ],
                ],
                'payment_intent_data' => [
                  'application_fee_amount' => 1000,
                  'transfer_data' => ['destination' => 'acct_1P0ruc05JB1M6W66'],
                ],
                'success_url' => 'http://localhost/advisorysync/dynamic/success',
                'cancel_url' => 'http://localhost/advisorysync/dynamic/error',
              ]);

            

            header("location: {$url['url']}");
        }


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
    public function return() {
        include 'app/views/dynamic/return.php';
    }
    public function refresh() {
        include 'app/views/dynamic/refresh.php';
    }
    public function error() {
        include 'app/views/dynamic/error.php';
    }
    public function success() {
        include 'app/views/dynamic/success.php';
    }

    // Otros métodos para páginas estáticas según sea necesario
}


?>