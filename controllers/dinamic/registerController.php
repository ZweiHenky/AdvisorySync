<?php

require_once 'render.php';


class RegisterController {
    public function index() {
        
        $render = new Render();
        $render->render('dinamic/register', []);
    }
}
?>