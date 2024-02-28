<?php

require_once 'render.php';


class categoriesController {
    public function index() {
        
        $render = new Render();
        $render->render('admin/categories', []);
    }
}
?>