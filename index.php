<?php

require_once __DIR__ . '/src/core/Autoloader.php';

use Core\Autoloader;
use Core\Routes;

Autoloader::register();

// Definindo as rotas
Routes::add('/bank-me', 'Controllers\HomeController', 'index');
Routes::add('/bank-me/login', 'Controllers\LoginController', 'index');
Routes::add('/bank-me/register', 'Controllers\RegisterController', 'index');
Routes::add('/bank-me/registerPost', 'Controllers\RegisterController', 'processRegistration');


// Despachando a rota
Routes::dispatch();