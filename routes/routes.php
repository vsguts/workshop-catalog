<?php

use App\Controller\IndexController;
use App\Controller\PagesController;
use App\Http\Router;

$router = new Router();

$router->addRoute('GET', '/', IndexController::class, 'index');
$router->addRoute('GET', '/pages', PagesController::class, 'getList');
$router->addRoute('GET', '/page', PagesController::class, 'getItem');


return $router;
