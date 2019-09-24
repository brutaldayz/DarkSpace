<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../System/Init.php');
    
        if(isset($_POST['terms'])){
            $_SESSION['agreement'] = 1;
            die(json_encode(["error" => false]));
        }else die(json_encode(["error" => true, "msg" => Lang::Get('AgreementError')]));
    }else Functions::router('Home');

?>