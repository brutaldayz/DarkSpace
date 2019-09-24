<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $UserID = Security::Post('Param1');
        Security::Empty($UserID);
        $UserID = base64_decode(base64_decode(base64_decode(base64_decode($UserID))));
        $ClanID = $Player->Data['clanID'];

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));
        if($ClanData['leaderID'] == $UserID) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));
        if($Player->Data['userID'] == $UserID) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $db = Database::Connection();
        $Get = $db->query("SELECT members FROM server_clan WHERE clanID = $ClanID")->fetch()['members'];
        
        $array = json_decode($Get);
        if(!in_array($UserID, array_column($array, 'userID'))) die(json_encode(["error" => true, "msg" => Lang::Get('Error')]));
        $index = array_search($UserID, array_column($array, 'userID'));
        unset($array[$index]);
        $array = array_values($array);

        $Query = $db->prepare("UPDATE server_clan SET members = ? WHERE clanID = ?");
        $Complete = $Query->execute(array(json_encode($array), $ClanID));

        $Query = $db->prepare("UPDATE player_accounts SET clanID = ? WHERE userID = ?");
        $Complete = $Query->execute(array(0, $UserID));

        $News = $db->query("SELECT news FROM server_clan WHERE clanID = {$Player->Data['clanID']}")->fetch()['news'];
        $array = json_decode($News);

        array_unshift($array, array('date' => date('d.m.Y H:i:s'), 'type' => 2,'userID' => $Get['userID'], 'content' => 2));
        $array = json_encode($array, JSON_UNESCAPED_UNICODE);

        $Query = $db->prepare("UPDATE server_clan SET news = ? WHERE clanID = ?");
        $Complete = $Query->execute(array($array, $Player->Data['clanID']));

        Socket::Send('LeaveFromClan', array('UserId' => $UserID));
        die(json_encode(["error" => false, "msg" => Lang::Get('KickedPlayer')]));
    }else Functions::router('Home');

?>