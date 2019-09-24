<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = $_POST['Param1'];
        Security::Empty($Param1);
        $Param2 = Security::Post('Param2');
        Security::Empty($Param2);
        $Param3 = Security::Post('Param3');
        $Param4 = Security::Post('Param4');
        Security::Empty($Param4);

        $db = Database::Connection();

        $Url = Functions::seflink($Param2);

        $Sql = $db->prepare('INSERT INTO server_blog (Url, Type, Title, Image, Content, Author) VALUES (?,?,?,?,?,?)');
        $Sql->execute(array($Url, $Param4, $Param2, $Param3, $Param1, $Player->Data['userID']));
        
        die(json_encode(["error" => false, "msg" => "Success"]));
    }else Functions::router('Home');

?>