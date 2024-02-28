<?php
// View.php

class Render {
    public function render($viewName, $data = []) {
        extract($data);
        include 'views/' . $viewName . '.php';
    }
}
?>
