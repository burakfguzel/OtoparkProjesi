<?php

namespace App\Controller;

use App\Core\Session;
use App\Model\Deneme;
use App\Model\Admins;

class BaseController
{
    public function __construct()
    {
        if(!Session::isLogged())
        {
            redirect("login");
        }
    }
}