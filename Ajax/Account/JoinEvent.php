<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);

        $db = Database::Connection();

        $Check = $db->query("SELECT userID FROM server_video_event WHERE UserID = {$Player->Data['userID']}");
        if($Check->rowCount() >= 3) die(json_encode(["error" => true, "msg" => Lang::Get('VideoEventMaxApp')]));

        $Sql = $db->prepare('INSERT INTO server_video_event (UserID, Link, RandomID) VALUES (?,?,?)');
        $Sql->execute(array($Player->Data['userID'], $Param1, Functions::generateNumber(8)));
        
        die(json_encode(["error" => false, "msg" => Lang::Get('Successful')]));
    }else Functions::router('Home');

?>