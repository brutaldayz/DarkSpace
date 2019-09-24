<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] == $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));
		    $onlineOrOnlineAndInEquipZone = !Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false)) || (Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false)) && Socket::Get('IsInEquipZone', array('UserId' => $Player->Data['userID'], 'Return' => false)));

        if ($onlineOrOnlineAndInEquipZone) {
            $ClanID = $Player->Data['clanID'];
            $UserID = $Player->Data['userID'];
            $db = Database::Connection();

            Socket::Send('LeaveFromClan', array('UserId' => $UserID));

            $Get = $db->query("SELECT members FROM server_clan WHERE clanID = '$ClanID'")->fetch()['members'];
            $array = json_decode($Get);

            $index = array_search($UserID, array_column($array, 'userID'));
            unset($array[$index]);
            $array = array_values($array);

            $Query = $db->prepare("UPDATE server_clan SET members = ? WHERE clanID = ?");
            $Complete = $Query->execute(array(json_encode($array), $ClanID));

            $Update = $db->prepare("UPDATE player_accounts SET clanID = ? WHERE userID = ?");
            $Result = $Update->execute(array(0, $UserID));

            $News = $db->query("SELECT news FROM server_clan WHERE clanID = $ClanID")->fetch()['news'];
            $array = json_decode($News);

            array_unshift($array, array('date' => date('d.m.Y H:i:s'), 'type' => 2,'userID' => $Get['userID'],'content' => 3));
            $array = json_encode($array, JSON_UNESCAPED_UNICODE);

            $Query = $db->prepare("UPDATE server_clan SET news = ? WHERE clanID = ?");
            $Complete = $Query->execute(array($array, $ClanID));

            die(json_encode(["error" => false]));
        }else{
            die(json_encode(["error" => true, "msg" => Lang::Get('ClanLeaveSocket')]));
        }
    }else Functions::router('Home');

?>
