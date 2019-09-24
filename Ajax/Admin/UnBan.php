<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);

        $db = Database::Connection();
        $GetData = $db->prepare("SELECT online FROM player_accounts WHERE userID = ?");
        $GetData->execute(array($Param1));
       
        if($GetData->rowCount() == 0) die(json_encode(["error" => true, "msg" => "Player not found."]));

        $Check = $db->prepare("SELECT userId, typeId FROM server_bans WHERE userId = ? AND typeId = ?");
        $Check->execute(array($Param1, 1));
        
        if($Check->rowCount() == 0) die(json_encode(["error" => true, "msg" => "This player is not banned."]));

        $query = $db->prepare("DELETE FROM server_bans WHERE userId = ? AND typeId = ?");
        $delete = $query->execute(array($Param1, 1));
        
        die(json_encode(["error" => false, "msg" => "Player ban has been removed."]));
    }else Functions::router('Home');

?>