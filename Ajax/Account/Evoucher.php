<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Code = Security::Post('evoucher');
        Security::Empty($Code);
        $UserID = $Player->Data['userID'];
        if(Config::Get('SERVER_HOST') != "127.0.0.1"){
            $Key		= '6LeDvLoUAAAAAHvACfKYhV0cnYiOoUOQTp-ud2wT';
            $Recaptcha  = Security::Post('g-recaptcha-response');
            $IP 		= $_SERVER['REMOTE_ADDR'];
            $Url = "https://www.google.com/recaptcha/api/siteverify?secret=".$Key."&response=".$Recaptcha."&remoteip=".$IP;
            $Check = file_get_contents($Url);
            $Json  = json_decode($Check, true);
            if(!$Json['success']) die(json_encode(["error" => true, "msg" => Lang::Get('VerificationFailed')]));
        }
        $db = Database::Connection();
        $Check = $db->prepare("SELECT * FROM server_evoucher WHERE Code = ?");  
        $Check->execute(array($Code));
        if($Check->rowCount() == 0) die(json_encode(["error" => true, "msg" => Lang::Get('CodeNotFound')]));
        $Get = $Check->fetch(PDO::FETCH_OBJ);
        if($Get->Used >= $Get->Max) die(json_encode(["error" => true, "msg" => Lang::Get('MaxUsedCode')]));
        $array = json_decode($Get->User, true);
        if (in_array($UserID, $array)) die(json_encode(["error" => true, "msg" => Lang::Get('AlreadyUsed')]));
        array_push($array, $UserID);
        $NewUser = json_encode($array, JSON_UNESCAPED_UNICODE);
        $Query = $db->prepare("UPDATE server_evoucher SET User = ? WHERE Code = ?");
        $Complete = $Query->execute(array($NewUser, $Code));
        $Query = $db->prepare("UPDATE server_evoucher SET Used = ? WHERE Code = ?");
        $Complete = $Query->execute(array($Get->Used + 1, $Code));
        $user_data = json_decode($Player->Data['Data']);
        $user_data->uridium = $user_data->uridium + json_decode($Get->Reward)->Uridium;
        $user_data->credits = $user_data->credits + json_decode($Get->Reward)->Credits;
        $user_data = json_encode($user_data, JSON_UNESCAPED_UNICODE);
        $Query = $db->prepare("UPDATE player_accounts SET Data = ? WHERE userID = ?");
        $Complete = $Query->execute(array($user_data, $UserID));

        die(json_encode(["error" => false, "msg" => Lang::Get('UsedSuccess'), "Param1" => "".number_format($Player->GetData('Data', 'uridium'))."", "Param2" => "".number_format($Player->GetData('Data', 'credits')).""]));
    }else Functions::router('Home');

?>