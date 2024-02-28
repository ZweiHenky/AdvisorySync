<?php

require_once 'render.php';


class AboutController {
    public function index() {
        
        $render = new Render();
        $render->render('static/about', []);
    }
}
?>