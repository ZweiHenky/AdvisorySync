<?php

require_once 'render.php';

class PrivacyController {
    public function index() {
        
        $render = new Render();
        $render->render('static/privacy', []);
    }
}
?>