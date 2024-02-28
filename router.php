<?php
class Router {
    public function route() {
        $url = !empty($_GET['url']) ? $_GET['url'] . 'Controller' : '';
        $path = __DIR__ . '/controllers/';
        $file = $path . $url . '.php';
        $arrayController = explode('/',$url);
        $controllerName = ucfirst($arrayController[1]);
        $controllerMethod = 'index';

        if (!empty($url)) {
            if (is_file($file)) {
                require $file;
                $controller = new $controllerName();
                if (method_exists($controller, $controllerMethod)) {
                    $controller->$controllerMethod();
                } else {
                    echo 'Método no encontrado';
                }
            }else{
                echo 'no se encontro la pagina';
            }
        }else{
            header('location:http://advisorysync.us-east-2.elasticbeanstalk.com/static/home');
        }
    }
}
?>