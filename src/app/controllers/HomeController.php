<?php

namespace SinaR\CustomFramework\app\controllers;

use SinaR\CustomFramework\core\Controller;

class HomeController extends Controller
{
    public function show()
    {
        $params = [
            'name' => 'Custom Framework'
        ];
        return $this->render('home', $params);
    }
}