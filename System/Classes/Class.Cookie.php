<?php

    class Cookie
    {
        public static function checkCookie($cookie, $value){
            /*
                if(!isset($_COOKIE[$cookie])) self::setCookie($cookie, $value);
            */
        }

        public static function setCookie($cookie, $value){ setcookie($cookie, $value, time()+(86400*365*10), "/", Config::Get('SERVER_HOST')); }
        public static function getCookie($cookie){ return (isset($_COOKIE[$cookie]) ? $_COOKIE[$cookie] : 'Null'); }
        public static function getLanguage(){ return (isset($_COOKIE['LANGUAGE']) ? $_COOKIE['LANGUAGE'] : 'en'); }
    }
    
?>