<?php

namespace SinaR\CustomFramework\app\models;

use SinaR\CustomFramework\core\DbModel;
use SinaR\CustomFramework\core\Model;

class User extends DbModel
{
    public string $full_name = '';
    public string $email = '';
    public string $password = '';
    public string $password_confirm = '';

    public function tableName(): string
    {
        return 'users';
    }

    public function attributes(): array
    {
        return ['full_name', 'email', 'password'];
    }

    public function register()
    {
        return $this->save();
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