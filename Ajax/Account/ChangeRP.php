<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $db = Database::Connection();

        $PlayerSkill = $db->query("SELECT * FROM player_skilltree WHERE userID = ".$Player->Data['userID']."")->fetch();
        $Required = Functions::getRequiredLogdisk($PlayerSkill['totalRp']+1);

        if($PlayerSkill['logDisk'] >= $Required){
            $Left = $PlayerSkill['logDisk'] - $Required;
            $Query = $db->prepare("UPDATE player_skilltree SET logDisk = ?, currentRp = ? WHERE userID = ?");
            $Complete = $Query->execute(array($Left, $PlayerSkill['currentRp']+1,$Player->Data['userID']));
            die(json_encode(["error" => false, "CurrentRP" => $PlayerSkill['currentRp']+1, "CurrentLog" => number_format($Left), "RequiredLog" => number_format(Functions::getRequiredLogdisk(($PlayerSkill['currentRp']+$PlayerSkill['usedRp'])+2)), "msg" => Lang::Get('Successful')]));
        }else die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));
        
    }else Functions::router('Home');

?>