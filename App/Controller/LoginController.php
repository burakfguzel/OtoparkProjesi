<?php

namespace App\Controller;

use App\Core\Session;
use App\Model\Deneme;
use App\Model\Admins;
use Plasticbrain\FlashMessages\FlashMessages;

class LoginController
{

    public function __construct()
    {
        if(Session::isLogged())
        {
            redirect("");
        }
    }

    public function index()
    {
        return view('login.php',[],"");
    }

    public function post()
    {
        $session = new Session();
        $msg = new FlashMessages();

        $user = Admins::where('email',post('email'))->where('password',md5(post('password')))->first();
        if($user)
        {
            $session->set('id',$user->id);
            $session->set('email',$user->email);
            $session->set('firstname',$user->firstname);
            $session->set('lastname',$user->lastname);
            redirect("");
        }


        $msg->error("Hatalı Giriş.");

        redirect("login");
    }
}