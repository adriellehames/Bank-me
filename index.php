<?php

require_once './src/core/Autoloader.php';

use Core\Autoloader;
use Core\Routes;

Autoloader::register();

// Definindo as rotas
Routes::add('/bank-me', 'Controllers\HomeController', 'index');
Routes::add('/bank-me/Register', 'Controllers\RegisterController', 'index');
Routes::add('/bank-me/Feactures', 'Controllers\FeacturesController', 'index');
Routes::add('/bank-me/Integration', 'Controllers\IntegrationController', 'index');
Routes::add('/bank-me/Login', 'Controllers\LoginController', 'index');
Routes::add('/bank-me/Products', 'Controllers\ProductsController', 'index');
Routes::add('/bank-me/Resources', 'Controllers\ResourcesController', 'index');






// Despachando a rota
Routes::dispatch();