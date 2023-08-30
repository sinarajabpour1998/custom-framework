<?php

namespace SinaR\CustomFramework\app\models;

use SinaR\CustomFramework\core\Model;

class Register extends Model
{
    public string $full_name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirm = '';

    public function register()
    {
        return true;
    }


    public function rules(): array
    {
        return [
            'full_name' => [self::RULE_REQUIRED],
            'email' => [self::RULE_REQUIRED, self::RULE_EMAIL],
            'password' => [self::RULE_REQUIRED, [self::RULE_MIN, 'min' => 8], [self::RULE_MAX, 'max' => 24]],
            'password_confirm' => [self::RULE_REQUIRED, [self::RULE_MATCH, 'match' => 'password']],
        ];
    }
}