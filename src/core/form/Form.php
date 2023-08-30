<?php

namespace SinaR\CustomFramework\core\form;

use SinaR\CustomFramework\core\Model;

class Form
{
    public static function start($method = '', $action = '') {

        echo sprintf('<form method="%s" action="%s">', $method, $action);
        return new Form();

    }

    public static function end() {

        echo '</form>';

    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }
}