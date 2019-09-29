<?php
    date_default_timezone_set('Europe/Istanbul');
    setlocale(LC_ALL, 'tr_TR.UTF-8');
    session_start();

    define("Main", ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") && (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] == 443) ? "https" : "http") . "://" . $_SERVER['SERVER_NAME'] . "/");



    /* Require Class */
    require_once('Classes/Class.Config.php');
    require_once('Classes/Class.Database.php');
    require_once('Classes/Class.Function.php');
    require_once('Classes/Class.Security.php');
    require_once('Classes/Class.Player.php');
    require_once('Classes/Class.Rank.php');
    require_once('Classes/Class.Clan.php');
    require_once('Classes/Class.Socket.php');
    require_once('Classes/Class.Blog.php');
    require_once('Classes/Class.Logger.php');
    require_once('Classes/Class.Cookie.php');
    require_once('Language/' . (isset($_COOKIE['LANGUAGE']) ? $_COOKIE['LANGUAGE'] : 'en') . '.php');
    require_once('Classes/Class.Admin.php');
    require_once('Classes/Class.User.php');
?>
