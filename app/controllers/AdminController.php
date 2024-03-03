<?php

    require 'app/models/admin/Admin.php';
    require 'app/models/User.php';

    class AdminController{
        
        private $admin;
        private $user;

        public function __construct() {
            $this->admin = new Admin(Connection::conn());
            $this->user = new User(Connection::conn());
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
            // Lógica para la página de inicio estática

            $countAdviser = $this->admin->countAdviser();
            $countStudent = $this->admin->countStudent();

            // Configuración de la paginación
            $resultados_por_pagina = 10; // Número de resultados por página

            if (isset($_GET['pagina'])) {
                $pagina_actual = $_GET['pagina'];
            } else {
                $pagina_actual = 1;
            }
            $empezar_desde = ($pagina_actual - 1) * $resultados_por_pagina;

            // Consulta para obtener el total de resultados
            $total_resultados = $this->admin->allUsers();

            // Calcular el número total de páginas
            $total_paginas = ceil($total_resultados / $resultados_por_pagina);  



            $users = $this->user->getAllUsers($empezar_desde, $resultados_por_pagina);

            

            if (isset($_POST['delete'])) {

                $id = $_POST['id_usuario'];

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
            include 'app/views/admin/advisories.php';
        }

        // Otros métodos para páginas estáticas según sea necesario
    }

?>