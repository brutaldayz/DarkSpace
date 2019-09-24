<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        die(json_encode(["error" => true, "msg" => 'Soon...']));
    }else Functions::router('Home');

?>