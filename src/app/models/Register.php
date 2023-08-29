<?php

namespace SinaR\CustomFramework\app\models;

use SinaR\CustomFramework\core\Model;

class Register extends Model
{
    public string $full_name;
    public string $email;
    public string $password;
    public string $passwordConfirm;

    public function register()
    {
        return true;
    }

}