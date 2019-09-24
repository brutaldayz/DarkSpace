<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $AppID = Security::Post('Param1');
        $AppID = base64_decode(base64_decode(base64_decode(base64_decode($AppID))));
        if(empty($AppID) || $AppID == "") return false;

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $Get = Database::Connection()->prepare("SELECT userID, message FROM server_clan_applications WHERE applicationID = ?");  
        $Get->execute(array($AppID));
        $Get = $Get->fetch();
        die(json_encode(["error" => false, "Param1" => Functions::getUserData('player_accounts', 'userID', $Get['userID'], 'shipName'), "Param2" => $Get['message'], "Param3" => base64_encode(base64_encode(base64_encode(base64_encode($AppID))))]));
    }else Functions::router('Home');

?>