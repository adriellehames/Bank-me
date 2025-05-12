<?php

namespace Core;

class Routes {
    private static $routes = [];

    public static function add($path, $controller, $action) {
        self::$routes[$path] = [
            'controller' => $controller,
            'action' => $action
        ];
    }

    public static function dispatch() {
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $uri = rtrim($uri, '/');

        if (array_key_exists($uri, self::$routes)) {
            $controller = self::$routes[$uri]['controller'];
            $action = self::$routes[$uri]['action'];

            $controllerInstance = new $controller();
            if (method_exists($controllerInstance, $action)) {
                call_user_func([$controllerInstance, $action]);
                return;
            }
        }

        // Rota não encontrada
        header('HTTP/1.0 404 Not Found');
        echo '404 - Página não encontrada';
    }
}