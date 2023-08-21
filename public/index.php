<?php

require_once __DIR__.'/../vendor/autoload.php';

//var_dump(__DIR__.'/vendor/autoload.php');
//die();

use SinaR\CustomFramework\core\Application;

$app = new Application(dirname(__DIR__).'\src');

$app->router->get('/', 'home');

$app->router->get('/contact', 'contact');

$app->run();
