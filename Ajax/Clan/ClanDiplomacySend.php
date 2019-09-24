<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $Param2 = Security::Post('Param2');
        Security::Empty($Param2);
        $Param2 = base64_decode(base64_decode(base64_decode(base64_decode($Param2))));
        $ClanID = $Player->Data['clanID'];

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $db = Database::Connection();

        $Control = $db->query("SELECT * FROM server_clan_diplomacy WHERE senderClan = $ClanID AND toClan = $Param1 OR senderClan = $Param1 AND toClan = $ClanID");
        if($Control->rowCount() != 0) die(json_encode(["error" => true, "msg" => Lang::Get('DiplomacyAlreadyHave')]));

        $Control = $db->query("SELECT * FROM server_clan_diplomacy_applications WHERE senderClan = $ClanID AND toClan = $Param1 OR senderClan = $Param1 AND toClan = $ClanID");
        if($Control->rowCount() != 0) die(json_encode(["error" => true, "msg" => Lang::Get('DiplomacyAlreadyHave')]));

        $GetTargetName = $db->query("SELECT name FROM server_clan WHERE clanID = $ClanID")->fetch()['name'];

        if($Param2 == 3){ // Savaş gönderilmiş ise
            Socket::Send('StartDiplomacy', array('SenderClanId' => $ClanID, 'TargetClanId' => $Param1, 'DiplomacyType' => $Param2));

            $Sql = $db->prepare('INSERT INTO server_clan_diplomacy (senderClan, toClan, diplomacyType) VALUES (?,?,?)');
            $Result = $Sql->execute(array($ClanID, $Param1, $Param2));

            die(json_encode(["error" => false, "msg" => Lang::Get('StartWar')]));
        }else{
            $Sql = $db->prepare('INSERT INTO server_clan_diplomacy_applications (senderClan, toClan, diplomacyType) VALUES (?,?,?)');
            $Result = $Sql->execute(array($ClanID, $Param1, $Param2));

            die(json_encode(["error" => false, "msg" => Lang::Get('DiplomacySuccess')]));
        }
    }else Functions::router('Home');

?>