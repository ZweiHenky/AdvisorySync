
<?php
require 'app/models/Favorites.php'; 



class DynamicController {
    private $favorites;
    private $advisory;
    private $notification;
    private $review;
    private $user;

    public function __construct() {
        $this->favorites = new Favorites(Connection::conn());
        $this->advisory = new Advisory(Connection::conn());
        $this->notification = new Notification(Connection::conn());
        $this->review = new Review(Connection::conn());
        $this->user = new User(Connection::conn());
    }
    
    public function home() {

        // Lógica para la página de inicio del usuario

        // 1.- buscar todas las publicaciones con paginacion

        // 2.- buscar por titulo y categoria con paginacion 

        // 4.- mostrar las publicaciones

        // 3.- Aceptar publicacion 

        var_dump($_SESSION['usuario']);
        // echo $_SESSION['usuario']['id_stripe'];


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

        // verificar si hay información del usuario almacenada en la sesión 
        $usuario = isset($_SESSION['usuario']) ? $_SESSION['usuario'] : null ;
            // obtiene el ID del usuario autenticado y lo asigna a la variable $usuarior
        $usuarior = $_SESSION['usuario']['id_usuario']; 

            // datos para la valoracion
            // llamamos al método  getUserReviews() pasando el ID del usuario ($usuarior) como argumento.
        $userReviews = $this->review->getUserReviews($usuarior);  
            //promediar la valoracion de las reseñas
        $totalValoracion = 0;
        $cantidadResenas = count($userReviews);
        foreach ($userReviews as $review) {
            $totalValoracion += floatval($review['valoracion']);
        }
        $valoracionPromedio = $cantidadResenas > 0 ? $totalValoracion / $cantidadResenas : 0;


        // 2.- mostrar las publicaciones de la tabla notificaciones con los datos que estan en la tabla de ejemplo con paginacion

        
        //datos de la tabla notificaciones(estatus)
        $userNotifications = $this->notification->getUserNotifications($usuarior);
        
        //paginacion
            // contamos el total de publicaciones del usuario para calcular el número total de páginas.
        $total_publicaciones =  $this->advisory->countUserAdvisories($usuarior);
            // establecemos cuántas publicaciones queremos en una sola página.
        $publicaciones_por_pagina = 3;
            // comprobamos si hay un número de página en la URL. Si no hay, se pone en 1, que significa que se mostrará la primera página.
        $pagina_actual = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
            // se calcula el índice de inicio para la consulta SQL según la página actual
        $empezar_desde = ($pagina_actual - 1) * $publicaciones_por_pagina;
            // obtenemos las publicaciones del usuario para la página actual utilizando el índice de inicio y la cantidad de publicaciones 
            // por página para limitar los resultados de la consulta.
       // $userAdvisories = $this->advisory->getUserAdvisories($usuarior, $empezar_desde, $publicaciones_por_pagina);
       $publicaciones = $this->advisory->getUserAdvisories($usuarior, $empezar_desde, $publicaciones_por_pagina);
            // Calcular el número total de páginas, ciel() redondea hacia arriba
        $total_paginas = ceil($total_publicaciones / $publicaciones_por_pagina);

        // datos del asesor
        foreach ($publicaciones as &$publicacion) {
            // Verificar si hay un asesor asociado a la publicación
            if (isset($publicacion['id_publi'])) {
                // Obtener los datos del asesor para esta publicación
                $asesorData = $this->advisory->getAsesorData($publicacion['id_publi']);
                // Verificar si se encontraron datos del asesor
                if ($asesorData) {
                    // Asignar los datos del asesor a la publicación
                    $publicacion['nombre_asesor'] = $asesorData['nombre_asesor'];
                    $publicacion['apellidos_asesor'] = $asesorData['apellidos_asesor'];
                } else {
                    // Si no se encontraron datos del asesor, establecer valores predeterminados o un mensaje de aviso
                    $publicacion['nombre_asesor'] = "No hay datos del asesor disponibles";
                    $publicacion['apellidos_asesor'] = "";
                }
            }
        }
            
        
        //eliminar publicacion
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['id_publi'])) { //verificamos si se envio el parámetro id_publi.
                $id_publi = $_POST['id_publi']; //  obtenemos el valor del parámetro id_publi 
                
                $result = $this->advisory->deleteAdvisory($id_publi); // llamamos al método deleteAdvisory() del modelo Advisory 
                                                                      // para eliminar la publicación de la base de datos.
        
                if ($result) {
                    header("Location: /advisorysync/dynamic/profile"); // si se elimina, nos redirige al perfil del usuario
                    exit();
                } else {
                    // Mostrar un mensaje de error si la eliminación falla
                    echo "Error al eliminar la publicación.";
                }
            }
        }

        // 3.- Mostrar las reseñas en la seccion de reseñas con paginacion
        
         // datos de la tabla reseñas
         $userReviews = $this->review->getUserReviews($usuarior);

       $favorite = $this->favorites->getFavorites($_SESSION['usuario']['id_usuario']);
       //var_dump($favorite);
    

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