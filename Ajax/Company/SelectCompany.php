<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $UserID   = $Player->Data['userID'];

        $db = Database::Connection();

        if($Param1 == 1) $Map = 1;
        elseif($Param1 == 2) $Map = 5;
        else $Map = 9;

        $array = json_decode($Player->Data['Info']);
        $array->MapID = $Map;
        $array = json_encode($array, JSON_UNESCAPED_UNICODE);

        $Query = $db->prepare("UPDATE player_accounts SET factionID = ?, Info = ? WHERE userID = ?");
        $Complete = $Query->execute(array($Param1, $array, $UserID));

        die(json_encode(["error" => false]));
    }else Functions::router('Home');

?>