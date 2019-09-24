<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        if($Player->Data['clanID'] != 0) die();
        
        $Value = Security::Post('Param1');
        $Target = Security::Post('Param2');
        Security::Empty($Target);
        $UserID = $Player->Data['userID'];
        $Target = base64_decode(base64_decode(base64_decode(base64_decode($Target))));

        $db = Database::Connection();

        $GetClan = $db->prepare("SELECT clanID FROM server_clan WHERE randomID = ?");  
        $GetClan->execute(array($Target));

        if($GetClan->rowCount() == 0) die();

        $GetClan = $GetClan->fetch()['clanID'];
        $Control = $db->query("SELECT clanID, userID FROM server_clan_applications WHERE clanID = $GetClan AND userID = $UserID");

        if($Control->rowCount() != 0) die();

        $Sql = $db->prepare('INSERT INTO server_clan_applications (clanID, userID, message) VALUES (?,?,?)');
        $Sql->execute(array($GetClan, $UserID, $Value));
        
        die(json_encode(["error" => false, "msg" => Lang::Get('AppSuccess')]));
    }else Functions::router('Home');

?>