<?php

require_once 'render.php';

class HomeController {
    public function index() {
        
        $render = new Render();
        $render->render('static/index', []);
    }
}
?>