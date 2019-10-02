<?php

        header('Content-Type: application/json');

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

                require_once('../../System/Init.php');

                $Param1 = Security::Post('Param1');
                Security::Empty($Param1);
                $Param1 = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));
                $Param1 = in_array($Param1, ["dmg-b01","dmg-b02","ep-b01","ep-b02","hon-b01","hon-b02","hp-b01","hp-b02","rep-b01","rep-b02","shd-b01","shd-b02"]) ? $Param1 : "dmg-b01";
                $Booster = array(
                    "dmg-b01" => array('BoosterID' => "2", "BoosterType" => "0"),
                    "dmg-b02" => array('BoosterID' => "2", "BoosterType" => "1"),
                    "ep-b01" => array('BoosterID' => "0", "BoosterType" => "2"),
                    "ep-b02" => array('BoosterID' => "0", "BoosterType" => "3") ,
                    "hon-b01" => array('BoosterID' => "1", "BoosterType" => "5"),
                    "hon-b02" => array('BoosterID' => "1", "BoosterType" => "6"),
                    "hp-b01" => array('BoosterID' => "7", "BoosterType" => "8"),
                    "hp-b02" => array('BoosterID' => "7", "BoosterType" => "9"),
                    "rep-b01" => array('BoosterID' => "4", "BoosterType" => "10"),
                    "rep-b02" => array('BoosterID' => "4", "BoosterType" => "11"),
                    "shd-b01" => array('BoosterID' => "3", "BoosterType" => "15"),
                    "shd-b02" => array('BoosterID' => "3", "BoosterType" => "16")
                );

                $db = Database::Connection();
                $Get = $db->prepare("SELECT * FROM server_shop WHERE Item = ?");
                $Get->execute(array($Param1));
                $Get = $Get->fetch();
                $Cost = Functions::GetPercentage($Get['Cost']);

                if($Cost > $Player->GetData('Data', 'uridium')) die(json_encode(["error" => true, "msg" => Lang::Get('Uridium')]));

                Functions::prepareBuySocket($Cost, $Get['Type'], "booster");

                $statement = $db->query("SELECT boosters FROM player_equipment WHERE userID = {$Player->Data['userID']}");

                $Boosters = json_decode($statement->fetch()['boosters']);

                if (!isset($Booster[$Param1]['BoosterID'], $Booster[$Param1]['BoosterType'])) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));

                if (isset($Boosters->{$Booster[$Param1]['BoosterID']})) {
                  $index = array_search($Booster[$Param1]['BoosterType'], array_column($Boosters->{$Booster[$Param1]['BoosterID']}, 'Type'));

                  if (is_int($index)) {
                    $Boosters->{$Booster[$Param1]['BoosterID']}[$index]->Seconds += 36000;
                  } else {
                    array_push($Boosters->{$Booster[$Param1]['BoosterID']}, ['Type' => $Booster[$Param1]['BoosterType'], "Seconds" => 36000]);
                  }
                } else {
                  $Boosters->{$Booster[$Param1]['BoosterID']} = [['Type' => $Booster[$Param1]['BoosterType'], 'Seconds' => 36000]];
                }

                $Boosters = json_encode($Boosters, JSON_UNESCAPED_UNICODE);

                $ss = $db->prepare("UPDATE player_equipment SET boosters = ? WHERE userID = {$Player->Data['userID']}");
                $ss->execute(array($Boosters));

                Logger::addShopLog($Player->Data['userID'], Functions::getUserIP(), 1, 1, $Cost, 1, $Get['ItemID']);

                die(json_encode(["error" => false, "msg" => $Param1 . Lang::Get('BuyOk'), "Param3" => "".number_format($Player->GetData('Data', 'uridium') - $Cost)."", "Param4" => "".number_format($Player->GetData('Data', 'credits')).""]));
        }else Functions::router('Home');
        /*
        ID{
                EP, 0
                HONOUR, 1
                DAMAGE, 2
                SHIELD, 3
                REPAIR, 4
                SHIELDRECHARGE, 5
                RESOURCE, 6
                MAXHP, 7
                ABILITY_COOLDOWN, 8
                BONUSBOXES, 9
                QUESTREWARD 10
        }
        */

        /*
        Type{
                DMG_B01, 0
                DMG_B02, 1
                EP_B01, 2
                EP_B02, 3
                EP50, 4
                HON_B01, 5
                HON_B02, 6
                HON50, 7
                HP_B01, 8
                HP_B02, 9
                REP_B01, 10
                REP_B02, 11
                REP_S01, 12
                RES_B01, 13
                RES_B02, 14
                SHD_B01, 15
                SHD_B02, 16
                SREG_B01, 17
                SREG_B02, 18
                BB_01, 19
                QR_01, 20
                CD_B01, 21
                CD_B02, 22
                KAPPA_B01, 23
                HONM_1, 24
                XPM_1, 25
                DMGM_1 26
        }
                36.000 = 10 Saat
                {"1":[{"Type":0,"Seconds":36000}], "2":[{"Type":5,"Seconds":36000}, "3":[{"Type":2,"Seconds":36000}]]}
        */

?>
