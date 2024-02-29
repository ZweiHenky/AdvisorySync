<?php

    class AdminController {
        
        public function home() {
            // Lógica para la página de inicio estática
            include 'app/views/admin/home.php';
        }
        public function users() {
            // Lógica para la página de inicio estática
            include 'app/views/admin/users.php';
        }
        public function categories() {
            // Lógica para la página de inicio estática
            include 'app/views/admin/categories.php';
        }
        public function advisories() {
            // Lógica para la página de inicio estática
            include 'app/views/admin/advisories.php';
        }

        // Otros métodos para páginas estáticas según sea necesario
    }

?>