<?php

namespace SinaR\CustomFramework\core;

class Controller
{

    public function render($view, $params = [])
    {
        return Application::$app->router->renderView($view, $params);
    }

}