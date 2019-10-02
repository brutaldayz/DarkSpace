<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
        $Param1 = in_array($Param1, ["apis","zeus"]) ? $Param1 : "apis";
        $Param1 == "apis" ? $Type = 1 : $Type = 2;

        $db = Database::Connection();

        $Get = $db->query("SELECT items FROM player_equipment WHERE userId = {$Player->Data['userID']}")->fetch()['items'];
        $Get = json_decode($Get);
        $Cost = Functions::GetPercentage(125000);

        if($Get->$Param1 == true) die(json_encode(["error" => true, "msg" => Lang::Get($Param1)]));
        if($Player->GetData('Data', 'uridium') < $Cost) die(json_encode(["error" => true, "msg" => Lang::Get('Uridium')]));

        Functions::prepareBuySocket($Cost, $Get['Type'], "drone");

        $statement = $db->query("SELECT items FROM player_equipment WHERE userID = {$Player->Data['userID']}");
        $items = json_decode($statement->fetch()['items']);
        $items->$Param1 = true;

        $ss = $db->prepare("UPDATE player_equipment SET items = ? WHERE userID = {$Player->Data['userID']}");
        $ss->execute(array(json_encode($items)));

        Logger::addShopLog($Player->Data['userID'], Functions::getUserIP(), 1, 1, $Cost, 1, $Type);

        die(json_encode(["error" => false, "msg" => $Param1 . Lang::Get('BuyOk'), "Param3" => "".number_format($Player->GetData('Data', 'uridium') - $Cost)."", "Param4" => "".number_format($Player->GetData('Data', 'credits')).""]));
    }else Functions::router('Home');

?>
