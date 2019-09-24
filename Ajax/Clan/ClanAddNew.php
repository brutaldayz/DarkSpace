<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);

        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $db = Database::Connection();

        $News = $db->query("SELECT news FROM server_clan WHERE clanID = {$Player->Data['clanID']}")->fetch()['news'];
        $array = json_decode($News);

        array_unshift($array, array('date' => date('d.m.Y H:i:s'), 'type' => 1,'userID' => $Get['userID'], 'content' => $Param1));
        $array = json_encode($array, JSON_UNESCAPED_UNICODE);

        $Query = $db->prepare("UPDATE server_clan SET news = ? WHERE clanID = ?");
        $Complete = $Query->execute(array($array, $Player->Data['clanID']));
        
        die(json_encode(["error" => false, "msg" => Lang::Get('Successful')]));
    }else Functions::router('Home');

?>