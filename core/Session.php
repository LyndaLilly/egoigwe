<?php 

class Session{

    public static function put($name,$value){
        $_SESSION[$name] = $value;
    }

    public static function get($name){
        if($_SESSION[$name]){
            return $_SESSION[$name];
        }
    }

    public static function exists($name){
        if(isset($_SESSION[$name])){
            return true;
        }
        return false;
    }

    public static function unset($name){

        unset($_SESSION[$name]);
        return true;
    }
}