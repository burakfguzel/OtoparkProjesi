<?php

namespace App\Core;

class Session
{
    /**
     * Session constructor.
     */
    public function __construct()
    {
        session_start();
    }

    public static function isLogged()
    {
        return isset($_SESSION['id']);
    }

    /**
     * @return mixed
     */
    public function getAll()
   {
       return $_SESSION;
   }

    /**
     * @param $key
     * @return string
     */
    public function get($key)
   {
       return isset($_SESSION[$key]) ? $_SESSION[$key] : "";
   }

    /**
     * @param $key
     * @param $val
     */
    public function set($key, $val)
    {
        $_SESSION[$key] = $val;
    }

    /**
     * @param $arr
     */
    public function setArray($arr)
    {
        foreach($arr as $key=>$val)
        {
            $_SESSION[$key] = $val;
        }
    }

    /**
     * @param $key
     */
    public function delete($key)
    {
        unset($_SESSION[$key]);
    }

    /**
     *
     */
    public function destroy()
   {
       session_destroy();
   }
}