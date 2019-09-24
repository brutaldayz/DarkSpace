<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param2 = Security::Post('Param2');
        Security::Empty($Param2);

        $db = Database::Connection();
        $GetData = $db->prepare("SELECT online FROM player_accounts WHERE userID = ?");
        $GetData->execute(array($Param1));

        if($GetData->rowCount() == 0) die(json_encode(["error" => true, "msg" => "Player not found."]));
        $GetData = $GetData->fetch()['online'];

        $Check = $db->prepare("SELECT userId, typeId FROM server_bans WHERE userId = ? AND typeId = ?");
        $Check->execute(array($Param1, 1));

        if($Check->rowCount() != 0) die(json_encode(["error" => true, "msg" => "This player is already banned."]));

        $Sql = $db->prepare('INSERT INTO server_bans (userId, modId, reason, typeId, until_date) VALUES (?,?,?,?,?)');
        $Sql->execute(array($Param1, $Player->Data['userID'], $Param2, 1, date('d.m.Y H:i:s')));

        if(Socket::Get('IsOnline', array('UserId' => $Param1, 'Return' => false)) && $GetData == 1){
            Socket::Send('BanUser', array('UserId' => $Param1));
        }

        die(json_encode(["error" => false, "msg" => "Player banned."]));
    }else Functions::router('Home');

?>
