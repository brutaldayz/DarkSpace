<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        if($Player->Data['clanID'] != 0) die();
        
        $Param = Security::Post('Param1');
        Security::Empty($Param);
        $Param = base64_decode(base64_decode(base64_decode(base64_decode($Param))));
        $UserID = $Player->Data['userID'];

        $db = Database::Connection();

        $ClanData = Clan::GetClan($Player->Data['clanID']);

        $GetClan = $db->query("SELECT clanID FROM server_clan WHERE randomID = '$Param'");

        if($GetClan->rowCount() == 0) die();

        $GetClan = $GetClan->fetch()['clanID'];
        $Control = $db->query("SELECT clanID, userID FROM server_clan_applications WHERE clanID = '$GetClan' AND userID = '$UserID'");
        if($Control->rowCount() == 0) die();

        $query = $db->prepare("DELETE FROM server_clan_applications WHERE clanID = ? AND userID = ?");
        $delete = $query->execute(array(
            $GetClan,
            $UserID
        ));
        
        die(json_encode(["error" => false, "msg" => Lang::Get('Successful')]));
    }else Functions::router('Home');

?>