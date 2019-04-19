<?php
/**
 * Created by PhpStorm.
 * User: eray
 * Date: 26.02.2018
 * Time: 23:10
 */

namespace App\Core;


use App\Controller\AdminController;
use App\Controller\CarController;
use App\Controller\CarRestController;
use App\Controller\HomeController;
use App\Controller\LoginController;
use App\Controller\PlanController;
use App\Controller\RestController;
use App\Controller\SpaceController;
use App\Controller\UserController;

class Router
{
    public function execute()
    {
        $uri = $this->getUri();
        $controller = $this->getController($uri);
        $method =  $this->getMethod($uri);

        unset($uri[0]);
        unset($uri[1]);

        return call_user_func_array(array($controller, $method),$uri);
    }

    protected function getController($uri)
    {
        if(!isset($uri[0]))
        {
            return new HomeController();
        }

        if($uri[0] == "car")
        {
            return new CarController();
        }

        if($uri[0] == "login")
        {
            return new LoginController();
        }

        if($uri[0] == "home")
        {
            return new HomeController();
        }

        if($uri[0] == "admin")
        {
            return new AdminController();
        }

        if($uri[0] == "rest")
        {
            return new RestController();
        }

        if($uri[0] == "plan")
        {
            return new PlanController();
        }

        if($uri[0] == "space")
        {
            return new SpaceController();
        }

        if($uri[0] == "restCar")
        {
            return new CarRestController();
        }

    }

    protected function getMethod($uri)
    {
        if(!isset($uri[1]))
        {
            return "index";
        }

        return $uri[1];
    }

    protected function getUri()
    {
        $uri = explode('/',$_SERVER['REQUEST_URI']);
        $uri_array = [];
        foreach($uri as $segment)
        {
            if(!empty($segment))
            {
                $uri_array[] = $segment;
            }
        }

        return $uri_array;
    }

    public function uri_segment($index)
    {
        $uri = $this->getUri();
        return isset($uri[$index]) ? $uri[$index] : "";
    }

}