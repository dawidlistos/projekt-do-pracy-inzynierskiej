<?php

class Router {
    public function route($requestUri) {
        $parsedUrl = parse_url($requestUri);
        $path = trim($parsedUrl['path'], '/');
        $segments = explode('/', $path);

        $controllerName = !empty($segments[0]) ? ucfirst($segments[0]) . 'Controller' : 'AuthController';
        $actionName = !empty($segments[1]) ? $segments[1] : 'default';

        $controllerFile = "../app/controllers/{$controllerName}.php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            if (class_exists($controllerName)) {
                $controller = new $controllerName();
                if (method_exists($controller, $actionName)) {
                    $controller->{$actionName}();
                } else {
                    http_response_code(404);
                    include '../app/views/other/error_404.php';
                }
            } else {
                http_response_code(404);
                include '../app/views/other/error_404.php';
            }
        } else {
            http_response_code(404);
            include '../app/views/other/error_404.php';
        }
    }
}
