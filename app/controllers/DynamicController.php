
<?php
require 'app/models/Favorites.php'; 
require 'app/models/Room.php'; 


class DynamicController {
    private $favorites;
    private $user;
    private $reviews;
    private $notification;
    private $advisory;
    private $admin;
    private $category;
    private $room;

    public function __construct() {
        $this->favorites = new Favorites(Connection::conn());
        $this->user = new User(Connection::conn());
        $this->reviews = new Review(Connection::conn());
        $this->notification = new Notification(Connection::conn());
        $this->advisory = new Advisory(Connection::conn());
        $this->admin = new Admin(Connection::conn());
        $this->category = new Category(Connection::conn());
        $this->room = new Room(Connection::conn());
    }

    public function pagination($page, $total_resultados) {
        // Configuración de la paginación
        $resultados_por_pagina = 5; // Número de resultados por página

        if (isset($page)) {
            $pagina_actual = $page;
        } else {
            $pagina_actual = 1;
        }
        $empezar_desde = ($pagina_actual - 1) * $resultados_por_pagina;

        // Calcular el número total de páginas
        $total_paginas = ceil($total_resultados / $resultados_por_pagina);  

        return array($resultados_por_pagina, $empezar_desde, $total_paginas, $pagina_actual);
    }
    
    public function home() {

        $page = isset($_GET['pagina']) ? $_GET['pagina'] : null;
            
        $total_resultados = $this->admin->allAdvisory();

        $pagination = $this->pagination($page, $total_resultados);

        $resultados_por_pagina = $pagination[0];
        $empezar_desde = $pagination[1];
        $total_paginas = $pagination[2];
        $pagina_actual = $pagination[3];
        $titulo = '';
        $categoria = '';

        $advisories = $this->advisory->getAllAdvisoriesWithUser($empezar_desde, $resultados_por_pagina, $_SESSION['usuario']['id_usuario'], $titulo, $categoria);

        $categories = $this->category->getAllCategoriesS();

        

        if (isset($_POST['aceptar'])) {

            $id_publi = $_POST['id_publi'];
            $fecha = $_POST['fecha'];

            try {
                $res = $this->notification->createNotification($fecha, $_SESSION['usuario']['id_usuario'], intval($id_publi));
                $_SESSION['createNotificacion'] = true;
            } catch (\Throwable $th) {
                $_SESSION['createNotificacion'] = false;
                echo $th;
            }
            
        }

        if (isset($_POST['buscar'])) {
            $titulo = $_POST['titulo'];
            $categoria = $_POST['categoria'];
            $advisories = $this->advisory->getAllAdvisoriesWithUser($empezar_desde, $resultados_por_pagina, $_SESSION['usuario']['id_usuario'], $titulo, $categoria);
        }

        if (isset($_POST['agregar'])) {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $id_categoria = $_POST['categoria'];

            try {
                $res = $this->advisory->createAdvisory($titulo, $descripcion, $_SESSION['usuario']['horarios'], $id_categoria, $_SESSION['usuario']['id_usuario']);
            } catch (\Throwable $th) {
                $_SESSION['statusCreate'] = false;
            }

            if ($res > 0) {
                $_SESSION['statusCreate'] = true;
            }
        }

        include 'app/views/dynamic/home.php';

        if (isset($_SESSION['statusCreate'])) {
            if ($_SESSION['statusCreate'] == true) {
                echo "
                    <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Asesoria',
                        text: 'Se creo con exito la asesoria',
                    }).then(function() {
                        window.location.href = 'http://localhost/advisorySync/dynamic/home';
                    });
                    </script> 
                    ";
            }else{
                echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Asesoria',
                    text: 'El titulo ya existe',
                }).then(function() {
                    window.location.href = 'http://localhost/advisorySync/dynamic/home';
                });
                </script> 
                ";
            }
            
            unset($_SESSION['statusCreate']);
        }

        if (isset($_SESSION['createAdviser'])) {
            if ($_SESSION['createAdviser'] == true) {
                echo "
                    <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Asesor',
                        text: 'Ya es asesor',
                    }).then(function() {
                        window.location.href = 'http://localhost/advisorySync/dynamic/home';
                    });
                    </script> 
                    ";

                    $_SESSION['usuario']['id_stripe'] = $_SESSION['usuario']['false_stripe'];
            }else{
                echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Asesor',
                    text: 'Ocurrio un problema',
                }).then(function() {
                    window.location.href = 'http://localhost/advisorySync/dynamic/home';
                });
                </script> 
                ";
            }
            
            unset($_SESSION['createAdviser']);
        }
        if (isset($_SESSION['createNotificacion'])) {
            if ($_SESSION['createNotificacion'] == true) {
                echo "
                    <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Asesoria',
                        text: 'Se acepto la asesoria',
                    }).then(function() {
                        window.location.href = 'http://localhost/advisorySync/dynamic/home';
                    });
                    </script> 
                    ";
            }else{
                echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Asesoria',
                    text: 'Ocurrio algun error, intentelo despues',
                }).then(function() {
                    window.location.href = 'http://localhost/advisorySync/dynamic/home';
                });
                </script> 
                ";
            }
            
            unset($_SESSION['createNotificacion']);
        }

    }

    public function profile(){

        // $user = $this->user->getUser();
        
        require_once 'app/assets/stripe-php/init.php';

        $stripe = new \Stripe\StripeClient([
            'api_key' => 'sk_test_51P0IeWP9Ot3ecyAmM9aCRnphdEMkJJoLtlHaomOPghHWr8Pt35fH74cCqFN5jYPXYFXNmUphODU0m8tHzVorVm0s00lMeZ1qwy'
        ]);

        if (isset($_GET['data']) && isset($_GET['id_noti']) && isset($_GET['id_stripe']) && isset($_GET['horas'])) {


            $dataChannel = json_decode($_GET['data'], true);

            $res = $this->room->createRoom($dataChannel['project']['vendor_key'], $dataChannel['project']['sign_key'], $dataChannel['project']['name'], $_GET['id_noti']);

            if ($res > 0) {
                function tiempo_a_minutos($tiempo) {
                    // Dividir el tiempo en horas y minutos
                    list($hora, $minuto, $periodo) = sscanf($tiempo, "%d:%d %s");
                
                    // Convertir a formato de 24 horas si es pm y no es 12
                    if ($periodo === 'pm' && $hora !== 12) {
                        $hora += 12;
                    }
                
                    // Convertir a formato de 24 horas si es 12 am
                    if ($periodo === 'am' && $hora === 12) {
                        $hora = 0;
                    }
                
                    // Calcular el total de minutos
                    $minutos_totales = $hora * 60 + $minuto;
                    
                    return $minutos_totales;
                }
                
                function diferencia_entre_tiempos($string_tiempo) {
                    // Extraer tiempos de inicio y fin del string
                    preg_match('/(\d{1,2}:\d{2} [ap]m) - (\d{1,2}:\d{2} [ap]m)/', $string_tiempo, $matches);
                    $tiempo1 = $matches[1];
                    $tiempo2 = $matches[2];
                
                    // Calcular diferencia en minutos
                    $minutos1 = tiempo_a_minutos($tiempo1);
                    $minutos2 = tiempo_a_minutos($tiempo2);
                    $diferencia = abs($minutos2 - $minutos1);
                    return $diferencia;
                }
            
                $diferencia = diferencia_entre_tiempos($_GET['horas']) / 60;
                
                $url = $stripe->checkout->sessions->create([
                    'mode' => 'payment',
                    'line_items' => [
                      [
                        'price' => 'price_1P0v4dP9Ot3ecyAml9PugWsP',
                        'quantity' => $diferencia,
                      ],
                    ],
                    'payment_intent_data' => [
                      'application_fee_amount' => 1000,
                      'transfer_data' => ['destination' => $_GET['id_stripe']],
                    ],
                    'success_url' => "http://localhost/advisorysync/dynamic/success?id={$_GET['id_noti']}",
                    'cancel_url' => 'http://localhost/advisorysync/dynamic/error',
                  ]);
    
                header("location: {$url['url']}");
            }

        }

        $user = $_SESSION['usuario'];
        $review = $this->reviews->getRating($_SESSION['usuario']['id_usuario']);
        $notifications = $this->notification->getNotification($_SESSION['usuario']['id_usuario']);


       $favorite = $this->favorites->getFavorites($_SESSION['usuario']['id_usuario']);
    

        include 'app/views/dynamic/profile.php';


        if (isset($_SESSION['paidAdvisory'])) {
            if ($_SESSION['paidAdvisory'] == true) {
                echo "
                    <script>
                    Swal.fire({
                        icon: 'success',
                        title: 'Pago',
                        text: 'Se realizo el pago con exito',
                    }).then(function() {
                        window.location.href = 'http://localhost/advisorySync/dynamic/profile';
                    });
                    </script> 
                    ";
            }else{
                echo "
                <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Pago',
                    text: 'Ocurrio un problema',
                }).then(function() {
                    window.location.href = 'http://localhost/advisorySync/dynamic/profile';
                });
                </script> 
                ";
            }
            
            unset($_SESSION['paidAdvisory']);
        }
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



        if (isset($_GET['id'])) {
            $res = $this->notification->updateNotification($_GET['id']);
            if ($res > 0) {
                $_SESSION['paidAdvisory'] = true;
            }else{
                $_SESSION['paidAdvisory'] = false;
            }
        }

        header('location: http://localhost/advisorysync/dynamic/profile');

        // include 'app/views/dynamic/success.php';

    // Otros métodos para páginas estáticas según sea necesario
    }
}


?>