<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $UserID = $Player->Data['userID'];
		$onlineOrOnlineAndInEquipZone = !Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false)) || (Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false)) && Socket::Get('IsInEquipZone', array('UserId' => $Player->Data['userID'], 'Return' => false)));

        $db = Database::Connection();

        if($Param1 == "mmo"){
            $Param1 = 1;
            $MapID = 1;
        }elseif($Param1 == "eic"){
            $Param1 = 2;
            $MapID = 5;
        }else{
            $Param1 = 3;
            $MapID = 9;
        }

        if($Param1 == $Player->Data['factionID']) die(json_encode(["error" => true, "msg" => Lang::Get('ChangeFirm1')]));

        $Honor = $Player->GetData('Data','honor') / 2;
        $Honor = ceil($Honor);

        if($Player->GetData('Data','uridium') < 5000) die(json_encode(["error" => true, "msg" => Lang::Get('Uridium')]));

        $Uri = $Player->GetData('Data','uridium') - 5000;
        $Uri = ceil($Uri);

        if ($onlineOrOnlineAndInEquipZone) {
            if(Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false))){
                Socket::Send('ChangeCompany', array("UserId" => $UserID, "FactionId" => $Param1, "UridiumPrice" => 5000, "HonorPrice" => $Honor));
            }else{
                $array = json_decode($Player->Data['Data']);
                $array->honor = $Honor;
                $array->uridium = $Uri;
                $array = json_encode($array, JSON_UNESCAPED_UNICODE);

                $info = json_decode($Player->Data['Info']);
                $info->MapID = $MapID;
                $info = json_encode($info, JSON_UNESCAPED_UNICODE);

                $Query = $db->prepare("UPDATE player_accounts SET factionID = ?, Data = ?, Info = ? WHERE userID = ?");
                $Complete = $Query->execute(array($Param1, $array, $info, $UserID));
            }

            die(json_encode(["error" => false, "msg" => Lang::Get('ChangeFirmOk')]));
        }else die(json_encode(["error" => true, "msg" => Lang::Get('ChangeFirmHangar')]));
    }else Functions::router('Home');
    
?>
