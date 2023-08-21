<?php

require_once __DIR__.'/../vendor/autoload.php';

//var_dump(__DIR__.'/vendor/autoload.php');
//die();

use SinaR\CustomFramework\core\Application;
use SinaR\CustomFramework\app\controllers\ContactController;
use SinaR\CustomFramework\app\controllers\HomeController;

$app = new Application(dirname(__DIR__).'\src');

$app->router->get('/', [HomeController::class, 'show']);

$app->router->get('/contact', [ContactController::class, 'show']);

$app->router->post('/contact', [ContactController::class, 'submit']);

$app->run();
