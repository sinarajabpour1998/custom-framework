<?php

namespace SinaR\CustomFramework\app\controllers\auth;

use SinaR\CustomFramework\app\models\Register;
use SinaR\CustomFramework\core\Controller;
use SinaR\CustomFramework\core\Request;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout("auth");
        return $this->render('auth/login');
    }

    public function register(Request $request)
    {
        $registerModel = new Register();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {
                echo 'created';
            }

//            var_dump($registerModel->validate(), $registerModel->errors);
//            die();
        }
        $this->setLayout("auth");
        return $this->render('auth/register', [
            'model' => $registerModel
        ]);
    }
}