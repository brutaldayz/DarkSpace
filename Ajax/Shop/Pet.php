<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $Param1 = in_array($Param1, ["Pet", "AL", "KK", "REP", "CSR"]) ? $Param1 : "Pet";

        $db = Database::Connection();
        $Get = $db->query("SELECT * FROM server_shop WHERE Item = '$Param1'")->fetch();

        if($Get['Cost'] > $Player->GetData('Data', 'uridium')) die(json_encode(["error" => true, "msg" => Lang::Get('Uridium')]));

        $Control = $db->query("SELECT items FROM player_equipment WHERE userId = ".$Player->Data['userID']."")->fetch()['items'];
        $items_array = json_decode($Control);

        if($Param1 == "Pet"){
            if($items_array->pet) die(json_encode(["error" => true, "msg" => $Param1 . " " . Lang::Get('AlreadyExist')]));
        }else{
            if(in_array($Param1, $items_array->petModules)) die(json_encode(["error" => true, "msg" => $Param1 . " " . Lang::Get('AlreadyExist')]));
        }

        if (Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false))) {
            Socket::Send('BuyItem', array('UserId' => $Player->Data['userID'], 'ItemType' => 'ship', 'DataType' => 0, 'Amount' => $Get['Cost']));
        }else{
            $array = json_decode($Player->Data['Data']);
            $array->uridium = $Player->GetData('Data', 'uridium') - $Get['Cost'];
            $array = json_encode($array, JSON_UNESCAPED_UNICODE);

            $Query = $db->prepare("UPDATE player_accounts SET Data = ? WHERE userID = ?");
            $Complete = $Query->execute(array($array, $Player->Data['userID']));
        }

        $statement = $db->query("SELECT items FROM player_equipment WHERE userID = {$Player->Data['userID']}");
        $items = json_decode($statement->fetch()['items']);

        if($Param1 == "Pet"){
            $items->pet = true;
        }else{
            array_push($items->petModules, $Param1);
            $items = json_encode($items, JSON_UNESCAPED_UNICODE);
        }
        
        $ss = $db->prepare("UPDATE player_equipment SET items = ? WHERE userID = {$Player->Data['userID']}");
        $ss->execute(array($items));

        Logger::addShopLog($Player->Data['userID'], Functions::getUserIP(), 1, 1, $Get['Cost'], 1, $Get['ItemID']);

        die(json_encode(["error" => false, "msg" => $Param1 . Lang::Get('BuyOk'), "Param3" => "".number_format($Player->GetData('Data', 'uridium') - $Get['Cost'])."", "Param4" => "".number_format($Player->GetData('Data', 'credits')).""]));
    }else Functions::router('Home');

?>