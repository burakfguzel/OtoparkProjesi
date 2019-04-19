<?php

session_start();

require __DIR__ . '/../Helper.php';
require __DIR__ . '/../vendor/autoload.php';

//connect db
$db = new \App\Core\DatabaseConnection();
$db->connect();

//run router
$router = new \App\Core\Router();
echo $router->execute();


//plakanın validation ı yapılacak...



//todo bu dosyadan kaldır...
function requireToVar($file,$params = []){
    ob_start();
    require($file);
    return ob_get_clean();
}

function partial($path)
{
    require_once __DIR__.'/../App/View/partials/'.$path;
}

function view($path,$params = [],$layout = "default.php")
{
    if($layout == "")
    {
        require_once __DIR__.'/../App/View/'.$path;
        return;
    }

    $body = requireToVar(__DIR__.'/../App/View/'.$path,$params);

    require_once __DIR__.'/../App/View/layout/'.$layout;
}