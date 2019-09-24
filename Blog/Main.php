<?php

    $Page = explode('/', $_SERVER['REQUEST_URI']);
    file_exists('Public/' . trim(strip_tags($Page[2])) . '.php') ? $Main = $Page[2] : $Main = 'Main';

    require_once('GLOBAL/Header.php');
    
    Functions::controller('loginControl');
    Functions::controller('checkBan');
    Functions::controller('checkSession');
    Functions::controller('checkCompany');
    require_once('../Public/GLOBAL/Navbar.php');
    echo "<div class='spacer-50'></div>";
    require_once('Public/' . $Main . '.php');
    require_once('../Public/GLOBAL/Footer.php');

?>