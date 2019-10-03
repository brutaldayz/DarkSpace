<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $Name = Security::Post('Param1');
        Security::Empty($Name);
        $Tag = Security::Post('Param2');
        Security::Empty($Tag);
        $Description = Security::Post('Param3');
        Security::Empty($Description);
        /*
        //TODO: Fix
        $ClanCompany = Security::Post('Param4');
        Security::Empty($ClanCompany);
        */
        $Clan = Clan::GetClan($Player->Data['clanID']);
        $db = Database::Connection();

        /*
        if (!in_array($ClanCompany, [1,2,3])) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));
        */

        if($Player->Data['userID'] != $Clan['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        if($Name != $Clan['name']){
            Functions::Long("ClanName", $Name);
            Functions::Short("ClanName", $Name);
            Functions::checkRow("server_clan", "name", $Name);

            $Query = $db->prepare("UPDATE server_clan SET name = ? WHERE clanID = ?");
            $Complete = $Query->execute(array($Name, $Clan['clanID']));
        }

        if($Tag != $Clan['tag']){
            Functions::Long("ClanTag", $Tag);
            Functions::Short("ClanTag", $Tag);
            Functions::checkRow("server_clan", "tag", $Tag);

            $Query = $db->prepare("UPDATE server_clan SET tag = ? WHERE clanID = ?");
            $Complete = $Query->execute(array($Tag, $Clan['clanID']));
        }
        
        if($Description != $Clan['description']){
            Functions::Long("ClanDescription", $Description);
            Functions::Short("ClanDescription", $Description);

            $Query = $db->prepare("UPDATE server_clan SET description = ? WHERE clanID = ?");
            $Complete = $Query->execute(array($Description, $Clan['clanID']));
        }

        /*
        if($ClanCompany != $Clan['factionID']){
            $Query = $db->prepare("UPDATE server_clan SET factionID = ? WHERE clanID = ?");
            $Complete = $Query->execute(array($ClanCompany, $Clan['clanID']));
        }
        */
        
        //Socket::Send('ChangeClanData', array('ClanId' => $Clan['clanID'], 'FactionId' => 1, 'Tag' => $Tag, 'Name' => $Name));
        Socket::Send('ChangeClanData', array('ClanId' => $Clan['clanID'], 'Tag' => $Tag, 'Name' => $Name));

        die(json_encode(["error" => false, "Param1" => ": " . $Name . " [" . $Tag . "]", "Param2" => $Description, "msg" => Lang::Get('ClanInfoUpdated')]));       
    }else Functions::router('Home');

?>