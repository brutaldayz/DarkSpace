<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param2 = Security::Post('Param2');
        Security::Empty($Param2);
        $Param3 = Security::Post('Param3');
        Security::Empty($Param3);

        Functions::checkPassword($Param1, $Player->Data['password']);

        if($Param2 == $Param3){
            Functions::Long("Password", $Param2);
            Functions::Short("Password", $Param2);
            $db = Database::Connection();
            $Param2 = password_hash($Param2, PASSWORD_DEFAULT);
            $Query = $db->prepare("UPDATE player_accounts SET password = ? WHERE userID = ?");
            $Complete = $Query->execute(array($Param2, $Player->Data['userID']));

            die(json_encode(["error" => false, "msg" => Lang::Get('PasswordChanged')]));
        }else die(json_encode(["error" => true, "msg" => Lang::Get('PasswordError')]));
    }else Functions::router('Home');

?>