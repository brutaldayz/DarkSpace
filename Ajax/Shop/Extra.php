<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');
        
        $Param1 = Security::Post('Param1');
        $Param2 = Security::Post('Param2');
        Security::Empty($Param1);
        Security::Empty($Param2);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $Param1 = in_array($Param1, ["LogFile","GreenKey","RedKey","BlueKey"]) ? $Param1 : "LogFile";
        if(!is_numeric($Param2)) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));

        $db = Database::Connection();

        $Get = $db->prepare("SELECT * FROM server_shop WHERE Item = ?");  
        $Get->execute(array($Param1));
        $Get = $Get->fetch();
        $Cost = Functions::GetPercentage($Get['Cost']) * $Param2;

        if($Cost > $Player->GetData('Data', 'uridium')) die(json_encode(["error" => true, "msg" => Lang::Get('Uridium')]));

        Functions::prepareBuySocket($Cost, $Get['Type']);

        if($Param1 != "LogFile"){
            $statement = $db->query("SELECT BootyKeys FROM player_accounts WHERE userID = {$Player->Data['userID']}");
            $items = json_decode($statement->fetch()['BootyKeys']);
            $items->$Param1 = $items->$Param1+$Param2;

            $ss = $db->prepare("UPDATE player_accounts SET BootyKeys = ? WHERE userID = {$Player->Data['userID']}");
            $ss->execute(array(json_encode($items)));
        }else{
            $statement = $db->query("SELECT logDisk FROM player_skilltree WHERE userID = {$Player->Data['userID']}")->fetch()['logDisk'];

            $ss = $db->prepare("UPDATE player_skilltree SET logDisk = ? WHERE userID = {$Player->Data['userID']}");
            $ss->execute(array(json_encode($statement+$Param2)));
        }

        Logger::addShopLog($Player->Data['userID'], Functions::getUserIP(), 1, 1, $Cost, $Param2, $Get['ItemID']);

        die(json_encode(["error" => false, "msg" => $Param1 . Lang::Get('BuyOk'), "Param3" => "".number_format($Player->GetData('Data', 'uridium') - $Cost)."", "Param4" => "".number_format($Player->GetData('Data', 'credits')).""]));

    }else Functions::router('Home');

?>