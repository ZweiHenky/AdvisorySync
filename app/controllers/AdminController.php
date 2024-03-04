<?php

    require 'app/models/admin/Admin.php';
    require 'app/models/User.php';
    require 'app/models/Advisory.php';

    class AdminController{
        
        private $admin;
        private $user;
        private $advisory;

        public function __construct() {
            $this->admin = new Admin(Connection::conn());
            $this->user = new User(Connection::conn());
            $this->advisory = new Advisory(Connection::conn());
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
            // Lógica para la página de inicio estática

            $countAdvisory = $this->admin->countAdvisory();
            $countUser = $this->admin->countUser();
            $revenue = $this->admin->revenue();
            $lastAdvisory = $this->admin->lastAdvisory();
            $topUser = $this->admin->topUser();

            include 'app/views/admin/home.php';
        }

        public function users() {

            $countAdviser = $this->admin->countAdviser();
            $countStudent = $this->admin->countStudent();

            $page = isset($_GET['pagina']) ? $_GET['pagina'] : null;
            $total_resultados = $this->admin->allUsers();

            $pagination = $this->pagination($page, $total_resultados);

            $resultados_por_pagina = $pagination[0];
            $empezar_desde = $pagination[1];
            $total_paginas = $pagination[2];
            $pagina_actual = $pagination[3];

            $users = $this->user->getAllUsers($empezar_desde, $resultados_por_pagina);

            if (isset($_POST['delete'])) {

                $id = $_POST['id_usuario'];

                var_dump($id);

                $_SESSION['message'] = $this->user->deleteUser($id);

            }

            if (isset($_POST['btnSearch'])) {
                if ($_POST['search'] == '') {
                    $users = $this->user->getAllUsers();
                }else{
                    $users = $this->user->getUser($_POST['search']);
                }
            }

            include 'app/views/admin/users.php';

            if (isset($_SESSION['message'])) {
                if ($_SESSION['message'] == true) {
                    echo "
                        <script>
                        Swal.fire({
                            icon: 'success',
                            title: 'Eliminacion',
                            text: 'Se elimino con exito el usuario',
                        }).then(function() {
                            window.location.href = 'http://localhost/advisorySync/admin/users';
                        });
                        </script> 
                        ";
                }else{
                    echo "
                    <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Eliminacion',
                        text: 'No se pudo eliminar',
                    }).then(function() {
                        window.location.href = 'http://localhost/advisorySync/admin/users';
                    });
                    </script> 
                    ";
                }
                
                unset($_SESSION['message']);
            }

        }

        public function categories() {
            // Lógica para la página de inicio estática
            include 'app/views/admin/categories.php';
        }

        public function advisories() {
            // Lógica para la página de inicio estática

            $page = isset($_GET['pagina']) ? $_GET['pagina'] : null;
            
            $total_resultados = $this->admin->allAdvisory();

            $pagination = $this->pagination($page, $total_resultados);

            $resultados_por_pagina = $pagination[0];
            $empezar_desde = $pagination[1];
            $total_paginas = $pagination[2];
            $pagina_actual = $pagination[3];

            $advisories = $this->advisory->getAllAdvisories($empezar_desde, $resultados_por_pagina);

            var_dump($advisories);

            include 'app/views/admin/advisories.php';
        }

        // Otros métodos para páginas estáticas según sea necesario
    }

?>