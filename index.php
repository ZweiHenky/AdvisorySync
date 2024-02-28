<?php

include 'router.php';

spl_autoload_register(function ($class) {
    include 'controllers/' . $class . '.php';
});


$router = new Router();
$router->route();
?>
