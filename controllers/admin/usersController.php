<?php

require_once 'render.php';
require_once 'models/admin/Admin.php';
require_once 'models/config/Connection.php';




class usersController{
    public function index() {
        
        $conn = Connection::conn();

        $render = new Render();
        $render->render('admin/users', []);
    }
}
?>