<?php
require_once __DIR__ . '/src/core/Router.php';
require_once __DIR__ . '/src/controllers/RegisterController.php';

use Core\Router;

$router = new Router();

// Adiciona a rota para o registro
$router->addRoute('bank-me/register', 'RegisterController', 'render');
$router->addRoute('bank-me/registerPost', 'RegisterController', 'processRegistration');

// Despacha a requisição
$uri = $_SERVER['REQUEST_URI'];
echo $router->dispatch($uri);