<?php

require_once __DIR__.'/vendor/autoload.php';

//var_dump(__DIR__.'/vendor/autoload.php');
//die();

use SinaR\CustomFramework\core\Application;

$app = new Application();

$app->router->get('/', function () {
    return 'This is the home page';
});

$app->router->get('/contact', function () {
    return 'This is the contact page';
});

$app->run();