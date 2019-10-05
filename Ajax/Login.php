<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../System/Init.php');
        $Token = Security::Post('csrf-token');
        Security::checkToken($_SESSION['csrf_token'], $Token);
        $Username = Security::Post('username');
        $Password = Security::Post('password');
        Security::Empty($Username);
        Security::Empty($Password);
        Functions::checkAccount($Username);
        $db = Database::Connection();

        $User = $db->prepare("SELECT * FROM player_accounts WHERE username = ?");  
        $User->execute(array($Username));
        $User = $User->fetch();

        Functions::checkPassword($Password, $User['password']);
        Functions::checkBan($User['userID']);
        Functions::checkVerified($User['userID']);
        Functions::checkMaintenance();
        $Session = Functions::generateCode(32);
        $LastLoginIP = Functions::getUserIP();
        $array = json_decode($User['Info']);
        $array->LastLoginIP = $LastLoginIP;
        $array = json_encode($array, JSON_UNESCAPED_UNICODE);
        $Query = $db->prepare("UPDATE player_accounts SET sessionID = ?, Info = ? WHERE username = ?");
        $Complete = $Query->execute(array($Session, $array, $Username));
        $_SESSION['USERNAME'] = $User['username'];
        $_SESSION['EMAIL'] = $User['email'];
        $_SESSION['SESSION_ID'] = $Session;

        Logger::addLoginLog($User['userID'], $LastLoginIP);

        die(json_encode(["error" => false]));
    }else Functions::router('Home');

?>