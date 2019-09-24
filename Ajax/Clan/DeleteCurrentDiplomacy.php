<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $db = Database::Connection();

        $get = $db->query("SELECT * FROM server_clan_diplomacy WHERE ID = $Param1");
        if($get->rowCount() == 0) die(json_encode(["error" => true, "msg" => Lang::Get('RequestNotFound')]));
        $get = $get->fetch();

        if($get['senderClan'] == $Player->Data['clanID']) $Param2 = $get['toClan'];
        else $Param2 = $get['senderClan'];

        if($get['diplomacyType'] == 3){
            // Savaş ise bitirme isteği gönderiyoruz
            
            $Control = $db->query("SELECT appID FROM server_clan_diplomacy_applications WHERE appID = $Param1");

            if($Control->rowCount() == 0){
                $Sql = $db->prepare('INSERT INTO server_clan_diplomacy_applications (appID, senderClan, toClan, diplomacyType) VALUES (?,?,?,?)');
                $Result = $Sql->execute(array($Param1, $Player->Data['clanID'], $Param2, 3));

                die(json_encode(["error" => false, "msg" => Lang::Get('DiplomacySuccess')]));
            }else die(json_encode(["error" => true, "msg" => Lang::Get('DiplomacyAlreadyHave')]));
        }else{
            $query = $db->prepare("DELETE FROM server_clan_diplomacy WHERE ID = ?");
            $delete = $query->execute(array($Param1));

            Socket::Send('EndDiplomacy', array('SenderClanId' => $get['senderClan'], 'TargetClanId' => $get['toClan']));

            die(json_encode(["error" => false, "msg" => Lang::Get('DiplomacyEnded')]));
        }
    }else Functions::router('Home');

?>