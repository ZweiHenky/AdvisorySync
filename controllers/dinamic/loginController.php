<?php

require_once 'render.php';


class LoginController {
    public function index() {
        
        $render = new Render();
        $render->render('dinamic/login', []);
    }
}
?>