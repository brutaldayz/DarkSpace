<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));

        $db = Database::Connection();

        $GetAllDesigns = $db->query("SELECT * FROM server_shop WHERE Category = 'Design'")->fetchAll();
        $array = array();
        foreach ($GetAllDesigns as $value) { array_push($array, $value['Item']); }
        $Param1 = in_array($Param1, $array) ? $Param1 : die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));

        $Get = $db->prepare("SELECT * FROM server_shop WHERE Item = ?");
        $Get->execute(array($Param1));
        $Get = $Get->fetch();

        $Cost = Functions::GetPercentage($Get['Cost']);
        if($Cost > $Player->GetData('Data', 'uridium')) die(json_encode(["error" => true, "msg" => Lang::Get('Uridium')]));

        $GetDesignData = $db->query("SELECT * FROM server_ships WHERE shipID = {$Get['ItemID']}")->fetch();
        $Control = $db->query("SELECT items FROM player_equipment WHERE userId = {$Player->Data['userID']}")->fetch()['items'];
        $items_array = json_decode($Control);

        if(!isset($items_array->designs->{$GetDesignData['baseShipId']})){
            $items_array->designs->{$GetDesignData['baseShipId']} = [$Get['ItemID']];
        }else{
            if(in_array($Get['ItemID'], $items_array->designs->{$GetDesignData['baseShipId']})){
                die(json_encode(["error" => true, "msg" => $Param1 . " " . Lang::Get('AlreadyExist')]));
            }else{
                array_push($items_array->designs->{$GetDesignData['baseShipId']}, $Get['ItemID']);
            }
        }

        $items_array = json_encode($items_array, JSON_UNESCAPED_UNICODE);
        $ss = $db->prepare("UPDATE player_equipment SET items = ? WHERE userID = {$Player->Data['userID']}");
        $ss->execute(array($items_array));

        Functions::prepareBuySocket($Cost, $Get['Type']);
        Logger::addShopLog($Player->Data['userID'], Functions::getUserIP(), 1, 1, $Cost, 1, $Get['ItemID']);

        die(json_encode(["error" => false, "msg" => $Param1 . Lang::Get('BuyOk'), "Param3" => "".number_format($Player->GetData('Data', 'uridium') - $Cost)."", "Param4" => "".number_format($Player->GetData('Data', 'credits')).""]));
    }else Functions::router('Home');

?>
