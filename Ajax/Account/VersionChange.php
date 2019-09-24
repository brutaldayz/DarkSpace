<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        
        $Param1 = in_array($Param1, [1,2]) ? $Param1 : 1;

        $db = Database::Connection();

        $Query = $db->prepare("UPDATE player_accounts SET Version = ? WHERE userID = ?");
        $Complete = $Query->execute(array($Param1, $Player->Data['userID']));

        die(json_encode(["error" => false, "msg" => Lang::Get('VersionChanged')]));
    }else Functions::router('Home');

?>