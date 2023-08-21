<?php

namespace SinaR\CustomFramework\app\controllers;

use SinaR\CustomFramework\core\Application;
use SinaR\CustomFramework\core\Request;

class ContactController
{
    public function show()
    {
        return Application::$app->router->renderView('contact');
    }
    public function submit(Request $request)
    {
        //var_dump($request->getBody());
        //die();
        return 'processing data...';
    }
}