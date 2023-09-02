<?php

// it will generate an error with namespace if you include it directly by file address in php (not use !)
//namespace SinaR\CustomFramework\app\migrations;

use SinaR\CustomFramework\core\Application;

class m0002_add_password_to_users_table
{
    public function up()
    {
        $db = Application::$app->db;
        $SQL = "ALTER TABLE `users` ADD COLUMN `password` VARCHAR(512) NOT NULL AFTER `full_name`;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = Application::$app->db;
        $SQL = "ALTER TABLE `users` DROP COLUMN `password`;";
        $db->pdo->exec($SQL);
    }
}