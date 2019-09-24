<?php

    $Page = explode('/', $_SERVER['REQUEST_URI']);
    file_exists('Public/' . trim(strip_tags($Page[2])) . '.php') ? $Main = $Page[2] : $Main = 'Home';

    require_once('GLOBAL/Header.php');
    Functions::controller('loginControl');
    Functions::controller('checkAdmin');
    Functions::controller('checkBan');
    Functions::controller('checkSession');
    Functions::controller('checkCompany');
    require_once('Public/' . $Main . '.php');
    require_once('GLOBAL/Footer.php');
?>