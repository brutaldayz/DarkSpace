<?php
    date_default_timezone_set('Europe/Istanbul');
    setlocale(LC_ALL, 'tr_TR.UTF-8');
    
    if (session_start()) {
        setcookie(session_name(), session_id(), null, '/', null, null, true);
    }

    define("Main", ((isset($_SERVER["HTTPS"]) && $_SERVER["HTTPS"] == "on") && (isset($_SERVER["SERVER_PORT"]) && $_SERVER["SERVER_PORT"] == 443) ? "https" : "http") . "://" . $_SERVER['SERVER_NAME'] . "/");

    ini_set('log_errors', 1);
    ini_set('error_log', './Logs/' . DIRECTORY_SEPARATOR . 'php_error_log');
    ini_set('display_errors', 0);
    ini_set('error_reporting', E_ALL);

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
    require_once('Classes/Class.SkillTree.php');
?>
