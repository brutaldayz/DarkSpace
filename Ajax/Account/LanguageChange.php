<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);

        $db = Database::Connection();      
		$Param1 = in_array($Param1, ["en","tr"]) ? $Param1 : "en";
        
        Cookie::setCookie('LANGUAGE', $Param1);
        
        die(json_encode(["error" => false, "msg" => Lang::Get('LanguageChanged')]));
    }else Functions::router('Home');

?>