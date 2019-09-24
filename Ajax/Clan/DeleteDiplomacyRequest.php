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
        $control = $db->query("SELECT ID FROM server_clan_diplomacy_applications WHERE ID = $Param1");
        if($control->rowCount() == 0) die(json_encode(["error" => true, "error_msg" => Lang::Get('RequestNotFound')]));

        $query = $db->prepare("DELETE FROM server_clan_diplomacy_applications WHERE ID = ?");
        $delete = $query->execute(array($Param1));

        die(json_encode(["error" => false, "msg" => Lang::Get('DiplomacyDecline')]));
    }else Functions::router('Home');

?>