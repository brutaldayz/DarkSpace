<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $Param1 = in_array($Param1, ["Aegis","Citadel","Spearhead","Surgeon","Pusat"]) ? $Param1 : "Aegis";

        $db = Database::Connection();

        $get_ship = $db->query("SELECT * FROM server_shop WHERE Item = '$Param1'")->fetch();

        if($get_ship['Cost'] > $Player->GetData('Data', 'uridium')) die(json_encode(["error" => true, "msg" => Lang::Get('Uridium')]));

        $Control = $db->query("SELECT items FROM player_equipment WHERE userId = ".$Player->Data['userID']."")->fetch()['items'];
        $items_array = json_decode($Control);

        if(in_array($get_ship['ItemID'], $items_array->ships)) die(json_encode(["error" => true, "msg" => $Param1 . " " . Lang::Get('AlreadyExist')]));

        if (Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false))) {
            Socket::Send('BuyItem', array('UserId' => $Player->Data['userID'], 'ItemType' => 'ship', 'DataType' => 0, 'Amount' => $get_ship['Cost']));
        }else{
            $array = json_decode($Player->Data['Data']);
            $array->uridium = $Player->GetData('Data', 'uridium') - $get_ship['Cost'];
            $array = json_encode($array, JSON_UNESCAPED_UNICODE);

            $Query = $db->prepare("UPDATE player_accounts SET Data = ? WHERE userID = ?");
            $Complete = $Query->execute(array($array, $Player->Data['userID']));
        }

        array_push($items_array->ships, $get_ship['ItemID']);
        $items_array = json_encode($items_array, JSON_UNESCAPED_UNICODE);

        $ss = $db->prepare("UPDATE player_equipment SET items = ? WHERE userID = {$Player->Data['userID']}");
        $ss->execute(array($items_array));

        Logger::addLog(Functions::getUserIP(), $Player->Data['userID'], $get_ship['ItemID'], 0);
        Logger::addLog(Functions::getUserIP(), $Player->Data['userID'], 2, $get_ship['Cost']);

        die(json_encode(["error" => false, "msg" => $Param1 . Lang::Get('BuyOk'), "Param3" => "".number_format($Player->GetData('Data', 'uridium') - $get_ship['Cost'])."", "Param4" => "".number_format($Player->GetData('Data', 'credits')).""]));
    }else Functions::router('Home');

?>