<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../System/Init.php');
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));

        $db = Database::Connection();
        
        die(json_encode(["error" => false]));
        die(json_encode(["error" => true, "msg" => Lang::Get('Checkbox')]));
    }else Functions::router('Home');

?>