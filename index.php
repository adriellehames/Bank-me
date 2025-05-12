<?php

require_once './src/core/Autoloader.php';

use Core\Autoloader;
use Core\Routes;

Autoloader::register();

// Definindo as rotas
Routes::add('/bank-me', 'Controllers\HomeController', 'index');
// Despachando a rota
Routes::dispatch();