<?php

require_once 'render.php';

class CategoryController {
    public function index() {
        
        $render = new Render();
        $render->render('static/category', []);
    }
}
?>