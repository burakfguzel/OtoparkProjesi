<?php

function post($key)
{
    return isset($_POST[$key]) ? $_POST[$key] : "";
}

function get($key)
{
    return isset($_GET[$key]) ? $_GET[$key] : "";
}

function redirect($uri, $permanent = false) {
    if($permanent) {
        header('HTTP/1.1 301 Moved Permanently');
    }
    header('Location: '.site_url($uri));
    exit();
}

function site_url($uri = "")
{
    return sprintf(
        "%s://%s/%s",
        isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
        $_SERVER['SERVER_NAME'],
        $uri
    );
}


function display_message()
{
    $msg = new \Plasticbrain\FlashMessages\FlashMessages();
    return $msg->display();
}
