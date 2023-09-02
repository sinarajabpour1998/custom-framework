<?php

use SinaR\CustomFramework\core\Application;

require_once __DIR__.'/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$config = [
    'db' => [
        'dsn' => $_ENV['DB_DSN'],
        'user' => $_ENV['DB_USER'],
        'password' => $_ENV['DB_PASS']
    ]
];

$app = new Application(__DIR__.'\src', $config);

$app->db->applyMigrations();
