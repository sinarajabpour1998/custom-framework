<?php

use SinaR\CustomFramework\core\Application;
use SinaR\CustomFramework\app\controllers\ContactController;
use SinaR\CustomFramework\app\controllers\HomeController;
use SinaR\CustomFramework\app\controllers\auth\AuthController;

require_once __DIR__.'/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

//var_dump(__DIR__.'/vendor/autoload.php');
//die();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS']
    ]
];

$app = new Application(dirname(__DIR__).'\src', $config);

$app->router->get('/', [HomeController::class, 'show']);
$app->router->get('/contact', [ContactController::class, 'show']);
$app->router->post('/contact', [ContactController::class, 'submit']);

$app->router->get('/login', [AuthController::class, 'login']);
$app->router->post('/login', [AuthController::class, 'login']);
$app->router->get('/register', [AuthController::class, 'register']);
$app->router->post('/register', [AuthController::class, 'register']);

$app->run();
