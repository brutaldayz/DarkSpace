<?php

    class Config
    {
        public static function Get($Data){
            $Config = array(
                "DB_HOST" => "127.0.0.1",
                "DB_NAME" => "server",
                "DB_USER" => "root",
                "DB_PASS" => "",
                "SERVER_NAME" => "DarkSpace",
                "SERVER_URL" => Main, // http://Domain.com/
                "SERVER_HOST" => $_SERVER['SERVER_NAME'], // Domain.com
                "SERVER_IP" => $_SERVER["SERVER_ADDR"], // XXX.XXX.XX.XX
                "DO_IMG" => Main . 'do_img/', // http://Domain.com/do_img/
                "ASSETS" => Main . 'Assets/', // http://Domain.com/Assets/
                "CSS" => Main . 'Assets/Css/', // http://Domain.com/Assets/Css
                "JS" => Main . 'Assets/Js/', // http://Domain.com/Assets/Js/
                "IMG" => Main . 'Assets/Img/', // http://Domain.com/Assets/Img/
                "ADMIN" => Main . 'Admin/', // http://Domain.com/Admin/
                "ADMIN_CSS" => Main . 'Assets/Admin/Css/', // http://Domain.com/Admin/Css/
                "ADMIN_JS" => Main . 'Assets/Admin/Js/', // http://Domain.com/Admin/Js/
                "ADMIN_IMG" => Main . 'Assets/Admin/Images/', // http://Domain.com/Admin/Img/
                "BLOG" => Main . 'Blog/', // http://Domain.com/Blog/
                "BLOG_CSS" => Main . 'Blog/Css/', // http://Domain.com/Blog/Css/
                "BLOG_JS" => Main . 'Blog/Js/', // http://Domain.com/Blog/Js/
                "BLOG_IMG" => Main . 'Blog/Img/', // http://Domain.com/Blog/Img/
            );
            return $Config[$Data];
        }
    }

?>