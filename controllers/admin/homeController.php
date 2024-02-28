<?php

require_once 'render.php';


class homeController {
    public function index() {
        
        $render = new Render();
        $render->render('admin/home', []);
    }
}
?>