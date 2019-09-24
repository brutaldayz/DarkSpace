<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $text = GalaxyGates::Randomizer();
        
        die(json_encode(["error" => false, "message" => $text, "msg" => Lang::Get('Successful')]));
    }else Functions::router('Home');

?>