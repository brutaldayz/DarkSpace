<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        if($Player->Data['clanID'] != 0) die(json_encode(["error" => true, "msg" => "Senin klanın var."]));
        $UserID = $Player->Data['userID'];

        $Name = Security::Post('Param1');
        $Tag = Security::Post('Param2');
        $Tag = Security::Clear($Tag);
        $Description = Security::Post('Param3');
        Security::Empty($Name);
        Security::Empty($Tag);
        Security::Empty($Description);
        Functions::Long("ClanName", $Name);
        Functions::Short("ClanName", $Name);
        Functions::Long("ClanTag", $Tag);
        Functions::Short("ClanTag", $Tag);
        Functions::Long("ClanDescription", $Description);
        Functions::Short("ClanDescription", $Description);
        Functions::checkRow("server_clan", "name", $Name);
        Functions::checkRow("server_clan", "tag", $Tag);
        $db = Database::Connection();

        $query = $db->prepare("INSERT INTO server_clan SET name = ?, tag = ?, description = ?, leaderID = ?, randomID = ?, factionID = ?");
        $insert = $query->execute(array(
            $Name,
            $Tag,
            $Description,
            $UserID,
            Functions::generateCode(6),
            $Player->Data['factionID']
        ));

        $ClanID = $db->lastInsertId();

        if ($insert) Socket::Send('CreateClan', array('UserId' => $UserID, 'ClanId' => $ClanID, 'Name' => $Name, 'Tag' => $Tag, 'FactionId' => $Player->Data['factionID']));

        $Query = $db->prepare("UPDATE player_accounts SET clanID = ? WHERE userID = ?");
        $Complete = $Query->execute(array($ClanID, $UserID));

        $Get = $db->query("SELECT members FROM server_clan WHERE clanID = '$ClanID'")->fetch()['members'];
        $array = json_decode($Get);

        array_push($array, array('userID' => $UserID, 'date' => date('d.m.Y H:i:s')));
        $array = json_encode($array, JSON_UNESCAPED_UNICODE);

        $Query = $db->prepare("UPDATE server_clan SET members = ? WHERE clanID = ?");
        $Complete = $Query->execute(array($array, $ClanID));

        $query = $db->query("SELECT userID FROM server_clan_applications WHERE userID = '$UserID'");
        $query_count = $query->rowCount();

        if($query_count != 0){
            $query = $db->prepare("DELETE FROM server_clan_applications WHERE userID = ?");
            $delete = $query->execute(array(
                $UserID
            ));

            die(json_encode(["error" => false]));
        }else die(json_encode(["error" => false]));

    }else Functions::router('Home');

?>
