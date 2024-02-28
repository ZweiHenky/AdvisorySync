<?php

require_once 'render.php';


class advisoriesController {
    public function index() {
        
        $render = new Render();
        $render->render('admin/advisories', []);
    }
}
?>