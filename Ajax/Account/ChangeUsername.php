<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = Security::Clear($Param1);

        Functions::Long("Username", $Param1);
        Functions::Short("Username", $Param1);
        Functions::checkRow("player_accounts", "shipName", $Param1);

        $db = Database::Connection();

        $get = $db->query("SELECT oldShipNames FROM player_accounts WHERE userID = {$Player->Data['userID']}")->fetch()['oldShipNames'];
        $oldShipNames = json_decode($get);
        array_push($oldShipNames, $Player->Data['shipName']);
        $oldShipNames = json_encode($oldShipNames, JSON_UNESCAPED_UNICODE);

        $Query = $db->prepare("UPDATE player_accounts SET shipName = ?, oldShipNames = ? WHERE userID = ?");
        $Complete = $Query->execute(array($Param1, $oldShipNames, $Player->Data['userID']));

        die(json_encode(["error" => false, "msg" => Lang::Get('UsernameChanged')]));
    }else Functions::router('Home');

?>