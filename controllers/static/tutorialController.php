<?php

require_once 'render.php';


class TutorialController {
    public function index() {
        
        $render = new Render();
        $render->render('static/tutorial', []);
    }
}
?>