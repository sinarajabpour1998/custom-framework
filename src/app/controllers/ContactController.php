<?php

namespace SinaR\CustomFramework\app\controllers;

use SinaR\CustomFramework\core\Application;
use SinaR\CustomFramework\core\Controller;
use SinaR\CustomFramework\core\Request;

class ContactController extends Controller
{
    public function show()
    {
        return $this->render('contact');
    }
    public function submit(Request $request)
    {
        //var_dump($request->getBody());
        //die();
        return 'processing data...';
    }
}