<?php

// PHP PDO part 3 - Models & Refactoring

use App\App;
use App\Config;
use App\Controllers\HomeController;
use App\Controllers\InvoiceController;
use App\Router;

//use App\View;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

session_start();

define('STORAGE_PATH', __DIR__ . '/../storage');
define('VIEW_PATH', __DIR__ . '/../views');


//try {
$router = new Router();

$router
    ->get('/', [HomeController::class, 'index'])
    ->get('/download', [HomeController::class, 'download'])
    ->post('/upload', [HomeController::class, 'upload'])
    ->get('/invoices', [InvoiceController::class, 'index'])
    ->get('/invoices/create', [InvoiceController::class, 'create'])
    ->post('/invoices/create', [InvoiceController::class, 'store']);


//    echo $router->resolve(
//        $_SERVER['REQUEST_URI'],
//        strtolower($_SERVER['REQUEST_METHOD'])
//    );
//} catch (\App\Exceptions\RouteNotFoundException $e) {
//    http_response_code(404);
//    echo View::make('error/404');
//}

(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();