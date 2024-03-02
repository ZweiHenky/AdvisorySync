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
            $users = $this->admin->allUsers();

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