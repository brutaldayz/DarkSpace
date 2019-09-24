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

        $Query = $db->prepare("UPDATE player_accounts SET shipName = ? WHERE userID = ?");
        $Complete = $Query->execute(array($Param1, $Player->Data['userID']));

        die(json_encode(["error" => false, "msg" => Lang::Get('UsernameChanged')]));
    }else Functions::router('Home');

?>