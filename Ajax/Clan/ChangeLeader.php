<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $db = Database::Connection();
        $ClanData = Clan::GetClan($Player->Data['clanID']);
        if($Player->Data['userID'] != $ClanData['leaderID']) die(json_encode(["error" => true, "msg" => Lang::Get('LeaderPerm')]));

        $array = json_decode($ClanData['members']);
        if(!in_array($Param1, array_column($array, 'userID'))) die(json_encode(["error" => true, "msg" => Lang::Get('Error')]));

        $Query = $db->prepare("UPDATE server_clan SET leaderID = ? WHERE clanID = ?");
        $Complete = $Query->execute(array($Param1, $Player->Data['clanID']));

        $News = $db->query("SELECT news FROM server_clan WHERE clanID = {$Player->Data['clanID']}")->fetch()['news'];
        $array = json_decode($News);

        array_unshift($array, array('date' => date('d.m.Y H:i:s'), 'type' => 2,'userID' => $Get['userID'],'content' => 4));
        $array = json_encode($array, JSON_UNESCAPED_UNICODE);

        $Query = $db->prepare("UPDATE server_clan SET news = ? WHERE clanID = ?");
        $Complete = $Query->execute(array($array, $Player->Data['clanID']));

        //TODO: İstasyon yapıldığında yeni klan başkanı soketi yapılacak. İstasyon kurulumunda bug olmaması için.
        
        die(json_encode(["error" => false, "msg" => Lang::Get('Successful')]));
    }else Functions::router('Home');

?>