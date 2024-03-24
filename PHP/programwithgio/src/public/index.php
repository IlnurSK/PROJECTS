<?php

// Superglobals Basic Routing

require_once __DIR__ . '/../vendor/autoload.php';

//echo '<pre>';
//print_r($_SERVER);
//echo '<pre>';

$router = new App\Router();

//$router->register(
//    '/',
//    function () {
//        echo 'Home';
//    }
//);

$router
    ->register('/', [App\Classes\Home::class, 'index'])
    ->register('/invoices', [App\Classes\Invoice::class, 'index'])
    ->register('/invoices/create', [App\Classes\Invoice::class, 'create']);

//$router->register(
//    '/invoices',
//    function () {
//        echo 'Invoices';
//    }
//);

echo $router->resolve($_SERVER['REQUEST_URI']);