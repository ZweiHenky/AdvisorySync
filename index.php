<?php
session_start();

echo 'hola';

// Cargar archivos necesarios
require_once 'app/controllers/StaticController.php';
require_once 'app/controllers/DynamicController.php';
require_once 'app/controllers/AdminController.php';
require_once 'app/controllers/AuthController.php';

// Obtener la URL
$url = isset($_GET['url']) ? $_GET['url'] : 'home';

// Dividir la URL en partes
$urlParts = explode('/', rtrim($url, '/'));

// Determinar el controlador y el método
$section = isset($urlParts[0]) ? $urlParts[0] : 'static';
$controllerName = ucfirst($section) . 'Controller';
$methodName = isset($urlParts[1]) ? $urlParts[1] : 'index';

// Ruta al controlador
$controllerPath = 'app/controllers/' . $controllerName . '.php';

// Verificar si el controlador existe
if (file_exists($controllerPath)) {
    require_once $controllerPath;
    $controller = new $controllerName;

    // Verificar si el método existe
    if (method_exists($controller, $methodName)) {
        // Llamar al método del controlador
        call_user_func_array([$controller, $methodName], []);
    } else {
        // Manejar error 404
        echo "404 - Página no encontrada";
    }
} else {
    // Manejar error 404
    echo "404 - Página no encontrada";
}

?>