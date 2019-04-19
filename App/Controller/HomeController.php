<?php

namespace App\Controller;

use App\Core\Session;
use App\Model\Deneme;
use App\Model\Admins;

class HomeController extends BaseController
{
    public function index()
    {
        return view('index.php');
    }

    public function logout()
    {
        $session = new Session();
        $session->destroy();
        redirect("login");
    }
}