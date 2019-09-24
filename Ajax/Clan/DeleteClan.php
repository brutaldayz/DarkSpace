<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $ClanID = $Player->Data['clanID'];

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $db = Database::Connection();

        $Query = $db->prepare("UPDATE player_accounts SET clanID = ? WHERE clanID = ?");
        $Complete = $Query->execute(array(0, $ClanID));

        $query = $db->prepare("DELETE FROM server_clan_applications WHERE clanID = ?");
        $delete = $query->execute(array($ClanID));

        $query = $db->prepare("DELETE FROM server_clan_diplomacy_applications WHERE senderClan = ? OR toClan = ?");
        $delete = $query->execute(array($ClanID,$ClanID));

        $query = $db->prepare("DELETE FROM server_clan_diplomacy WHERE senderClan = ? OR toClan = ?");
        $delete = $query->execute(array($ClanID,$ClanID));

        $query = $db->prepare("DELETE FROM server_clan WHERE clanID = ?");
        $delete = $query->execute(array($ClanID));

        if ($delete) Socket::Send('DeleteClan', array('ClanId' => $ClanID));
        die(json_encode(["error" => false]));
    }else Functions::router('Home');

?>
