<?php

namespace Core;

class Router {
    private $routes = [];
    
    public function addRoute($path, $controller, $method) {
        $this->routes[$path] = [
            'controller' => $controller,
            'method' => $method
        ];
    }
    
    public function dispatch($uri) {
        $uri = parse_url($uri, PHP_URL_PATH);
        $uri = trim($uri, '/');
        
        // Rota padrão para index.html
        if ($uri === 'bank-me') {
            header('Location: /bank-me/index.html');
            exit();
        }
        
        if (array_key_exists($uri, $this->routes)) {
            $controller = $this->routes[$uri]['controller'];
            $method = $this->routes[$uri]['method'];
            
            $controllerInstance = new $controller();
            return $controllerInstance->$method();
        }
        
        // Rota não encontrada
        header('HTTP/1.1 404 Not Found');
        return 'Página não encontrada';
    }
}