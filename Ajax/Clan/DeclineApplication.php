<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $AppID = Security::Post('Param1');
        $AppID = base64_decode(base64_decode(base64_decode(base64_decode($AppID))));
        if(empty($AppID) || $AppID == "") die(json_encode(["error" => true, "msg" => Lang::Get('RequestNotFound')]));

        $db = Database::Connection();

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $Get = $db->query("SELECT userID, clanID FROM server_clan_applications WHERE applicationID = $AppID");
        if($Get->rowCount() == 0) die(json_encode(["error" => true, "msg" => Lang::Get('RequestNotFound')]));
        $Get = $Get->fetch();

        $query = $db->prepare("DELETE FROM server_clan_applications WHERE applicationID = ?");
        $delete = $query->execute(array($AppID));
        
        die(json_encode(["error" => false, "msg" => Lang::Get('Decline') . Functions::getUserData('player_accounts', 'userID', $Get['userID'], 'shipName')]));
    }else Functions::router('Home');

?>