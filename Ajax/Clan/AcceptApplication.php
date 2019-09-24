<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $AppID = Security::Post('Param1');
        $AppID = base64_decode(base64_decode(base64_decode(base64_decode($AppID))));
        if(empty($AppID) || $AppID == "") die(json_encode(["error" => true, "msg" => Lang::Get('RequestNotFound')]));

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $db = Database::Connection();

        $Get = $db->query("SELECT userID, clanID FROM server_clan_applications WHERE applicationID = $AppID AND clanID = {$ClanData['clanID']}");
        if($Get->rowCount() == 0) die(json_encode(["error" => true, "msg" => Lang::Get('RequestNotFound')]));
        $Get = $Get->fetch();

        $query = $db->prepare("DELETE FROM server_clan_applications WHERE userID = ?");
        $delete = $query->execute(array($Get['userID']));

        $Query = $db->prepare("UPDATE player_accounts SET clanID = ? WHERE userID = ?");
        $Complete = $Query->execute(array($Get['clanID'], $Get['userID']));

        Socket::Send('JoinToClan', array('UserId' => $Get['userID'], 'ClanId' => $Get['clanID']));

        $Members = $db->query("SELECT members FROM server_clan WHERE clanID = {$Get['clanID']}")->fetch()['members'];
        $array = json_decode($Members);

        array_push($array, array('userID' => $Get['userID'], 'date' => date('d.m.Y H:i:s')));
        $array = json_encode($array, JSON_UNESCAPED_UNICODE);

        $Query = $db->prepare("UPDATE server_clan SET members = ? WHERE clanID = ?");
        $Complete = $Query->execute(array($array, $Get['clanID']));

        $News = $db->query("SELECT news FROM server_clan WHERE clanID = {$Player->Data['clanID']}")->fetch()['news'];
        $array = json_decode($News);

        array_unshift($array, array('date' => date('d.m.Y H:i:s'), 'type' => 2, 'userID' => $Get['userID'], 'content' => 1));
        $array = json_encode($array, JSON_UNESCAPED_UNICODE);

        $Query = $db->prepare("UPDATE server_clan SET news = ? WHERE clanID = ?");
        $Complete = $Query->execute(array($array, $Player->Data['clanID']));
        
        die(json_encode(["error" => false, "msg" => Lang::Get('AcceptApp') . Functions::getUserData('player_accounts', 'userID', $Get['userID'], 'shipName')]));
    }else Functions::router('Home');

?>