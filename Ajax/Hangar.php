<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../System/Init.php');

        $ShipId = Security::Post('ShipId');
        Security::Empty($ShipId);

        $db = Database::Connection();
        $PlayerID = $Player->Data['userID'];

        /* KONTROL */
        $Control = $db->query("SELECT items FROM player_equipment WHERE userId = '$PlayerID'")->fetch()['items'];
        $array = json_decode($Control);
        array_push($array->ships, 8);
        array_push($array->ships, 10);
        if (!in_array($ShipId, $array->ships)) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));
        /* KONTROL */

        $ship = $db->query('SELECT * FROM server_ships WHERE shipID = '.$ShipId.'')->fetch();
        $onlineOrOnlineAndInEquipZone = !Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false)) || (Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false)) && Socket::Get('IsInEquipZone', array('UserId' => $Player->Data['userID'], 'Return' => false)));

        if ($ship['shipID'] == $db->query('SELECT baseShipId FROM server_ships WHERE shipID = '.$Player->Data['shipID'].'')->fetch()['baseShipId']) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));

        if ($onlineOrOnlineAndInEquipZone) {
          $db->query('UPDATE player_accounts SET shipID = '.$ship['shipID'].' WHERE userID = '.$Player->Data['userID'].'');

          for ($i= 1; $i <= 2; $i++) {
            $drones = '[{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]},{"items":[],"designs":[]}]';
            $db->query("UPDATE player_equipment SET config".$i."_lasers = '[]', config".$i."_generators = '[]', config".$i."_drones = '".$drones."' WHERE userId = ".$Player->Data['userID']."");
          }

          $array = array('Config1Hitpoints' => $ship['health'] + 60000, 'Config1Damage' => 0, 'Config1Shield' => 0, 'Config1Speed' => ($ship['speed'] + $ship['speed'] * 0.2), 'Config2Hitpoints' => $ship['health'] + 60000, 'Config2Damage' => 0, 'Config2Shield' => 0, 'Config2Speed' => ($ship['speed'] + $ship['speed'] * 0.2));
          $db->query("UPDATE player_equipment SET configs = '".json_encode($array, JSON_NUMERIC_CHECK)."' WHERE userId = ".$Player->Data['userID']."");

          Socket::Send('ChangeShip', array('UserId' => $Player->Data['userID'], 'ShipId' => $ship['shipID']));
          Socket::Send('UpdateStatus', array('UserId' => $Player->Data['userID'], 'Status' => $array));
          die(json_encode(["error" => false, "msg" => Lang::Get('hangarChangeSuccess')]));
        } else die(json_encode(["error" => true, "msg" => Lang::Get('equippingError')]));

      }else Functions::router('Home');

?>
