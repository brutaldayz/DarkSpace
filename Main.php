<?php

    require_once('System/Init.php'); 
    Functions::controller('loginControl');
    Functions::controller('checkBan');
    Functions::controller('checkSession');
    Functions::controller('checkCompany');

    $Page = explode('/', $_SERVER['REQUEST_URI']);
    if($Page[1] == "indexInternal.es?action=internalNewClan") $Main = "Clan";
    else file_exists('Public/' . trim(strip_tags($Page[1])) . '.php') ? $Main = $Page[1] : $Main = 'Home';

    if($Main == "MapRevolution") return require_once('Public/' . $Main . '.php');
    require_once('Public/GLOBAL/Header.php');
    require_once('Public/GLOBAL/Navbar.php');
    require_once('Public/' . $Main . '.php');
    require_once('Public/GLOBAL/Footer.php');

?>