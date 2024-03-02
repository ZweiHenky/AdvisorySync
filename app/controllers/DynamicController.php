
<?php


class DynamicController {
    
    public function home() {
        // Lógica para la página de inicio estática

        var_dump($_SESSION['usuario']);

        include 'app/views/dynamic/home.php';
    }

    // Otros métodos para páginas estáticas según sea necesario
}


?>