<?php
namespace MVC\core;
class session{
    public static function start(){
        @session_start();
    }
    public static function Set($key,$value)
    {
        $_SESSION[$key]=$value;
    }

    public static function Get($key)
    {
      if(isset($_SESSION[$key]))
      return $_SESSION[$key];
    }

    public static function stop()
    {
       session_destroy();
    }

}