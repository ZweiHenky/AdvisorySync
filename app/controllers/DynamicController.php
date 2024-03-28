
<?php


class DynamicController {
    
    public function home() {
        // Lógica para la página de inicio del usuario

        // 1.- buscar todas las publicaciones con paginacion

        // 2.- buscar por titulo y categoria con paginacion 

        // 4.- mostrar las publicaciones

        // 3.- Aceptar publicacion 

        if (isset($_POST['aceptar'])) {
            
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

    // Otros métodos para páginas estáticas según sea necesario
}


?>