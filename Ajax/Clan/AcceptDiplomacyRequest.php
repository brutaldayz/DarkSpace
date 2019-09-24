<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $ClanID = $Player->Data['clanID'];

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $db = Database::Connection();
        $control = $db->query("SELECT * FROM server_clan_diplomacy_applications WHERE ID = $Param1");
        if($control->rowCount() == 0) die(json_encode(["error" => true, "error_msg" => Lang::Get('RequestNotFound')]));
        $control = $control->fetch();

        if($control['diplomacyType'] == 3){
            Socket::Send('EndDiplomacy', array('SenderClanId' => $control['senderClan'], 'TargetClanId' => $ClanID));
            $query = $db->prepare("DELETE FROM server_clan_diplomacy WHERE ID = ?");
            $delete = $query->execute(array($control['appID']));

            $query = $db->prepare("DELETE FROM server_clan_diplomacy_applications WHERE ID = ?");
            $delete = $query->execute(array($Param1));

            die(json_encode(["error" => false, "msg" => Lang::Get('WarEnded')]));
        }else{
            $Sql = $db->prepare('INSERT INTO server_clan_diplomacy (senderClan, toClan, diplomacyType) VALUES (?,?,?)');
            $Result = $Sql->execute(array($control['senderClan'], $ClanID, $control['diplomacyType']));

            Socket::Send('StartDiplomacy', array('SenderClanId' => $control['senderClan'], 'TargetClanId' => $ClanID, 'DiplomacyType' => $control['diplomacyType']));

            $query = $db->prepare("DELETE FROM server_clan_diplomacy_applications WHERE ID = ?");
            $delete = $query->execute(array($Param1));

            die(json_encode(["error" => false, "msg" => Lang::Get('DiplomacyAccepted')]));
        }
    }else Functions::router('Home');

?>