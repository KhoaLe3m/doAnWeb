<?php

class UserController{
    public static function checkSession(){
        self::init();
        if (self::get("userlogin")== false) {
        self::destroy();
        header("Location:login.php");
        }
        }
        
        public static function checkLogin(){
        self::init();
        if (self::get("userlogin")== true) {
        header("Location:index.php");
        }
        }
        public static function checkSign(){
            if (self::get("userlogin")== true) {
                return "Logout";
                } else return "Sign In";
        }
        public static function destroy(){
        session_destroy();
        header("Location:login.php");
        }

    public static function init(){
        if (version_compare(phpversion(), '5.4.0', '<')) {
        if (session_id() == '') {
        session_start();
        }
        } else {
        if (session_status() == PHP_SESSION_NONE) {
        session_start();
        }
        }
    }

    public static function set($key, $val){
        $_SESSION[$key] = $val;
        }

        public static function get($key){
        if (isset($_SESSION[$key])) {
        return $_SESSION[$key];

        } else {
        return false;
        }
    }


}

?>