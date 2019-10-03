<?php

    header('Content-Type: application/json');

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../../System/Init.php');

        $Param1 = Security::Post('Param1');
        Security::Empty($Param1);
        $SkillID = base64_decode(base64_decode(base64_decode(base64_decode($Param1))));

        $SkillHashs = array(
            '1' => 'skill_13',
            '2' => 'skill_5a',
            '3' => 'skill_20',
            '4' => 'skill_6',
            '5' => 'skill_23a',
            '6' => 'skill_21a',
            '7' => 'skill_5b',
            '8' => 'skill_21b',
            '9' => 'skill_23b',
            '10' => 'skill_1'
        );

        $SkillMaxLevels = array(
            'skill_13' => 5,
            'skill_5a' => 2,
            'skill_20' => 5,
            'skill_6' => 5,
            'skill_23a' => 2,
            'skill_21a' => 2,
            'skill_5b' => 3,
            'skill_21b' => 3,
            'skill_23b' => 3,
            'skill_1' => 5
        );

        $SkillLastLevel = array(
            'skill_5b' => "skill_5a",
            'skill_21b' => "skill_21a",
            'skill_23b' => "skill_23a"
        );

        $SkillNextLevel = array(
            'skill_5a' => "skill_5b",
            'skill_21a' => "skill_21b",
            'skill_23a' => "skill_23b"
        );

        $db = Database::Connection();

        $PlayerSkill = $db->query("SELECT * FROM player_skilltree WHERE userID = ".$Player->Data['userID']."")->fetch();

        if (!in_array($SkillID, [1,2,3,4,5,6,7,8,9, 10])) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));

        if($PlayerSkill['currentRp'] == 0) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));
        if($PlayerSkill[$SkillHashs[$SkillID]] >= $SkillMaxLevels[$SkillHashs[$SkillID]]) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));
        if(in_array($SkillHashs[$SkillID], ["skill_5b", "skill_21b", "skill_23b"]) && $PlayerSkill[$SkillLastLevel[$SkillHashs[$SkillID]]] != $SkillMaxLevels[$SkillLastLevel[$SkillHashs[$SkillID]]]) die(json_encode(["error" => true, "msg" => Lang::Get('equippingWrongError')]));

        if (Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false))) Socket::Send('SkillTree', array('UserId' => $Player->Data['userID'], 'SkillName' => $SkillHashs[$SkillID]));

        $Query = $db->prepare("UPDATE player_skilltree SET currentRp = ?, usedRp = ?, ".$SkillHashs[$SkillID]." = ? WHERE userID = ?");
        $Complete = $Query->execute(array($PlayerSkill['currentRp']-1,$PlayerSkill['usedRp']+1,$PlayerSkill[$SkillHashs[$SkillID]]+1,$Player->Data['userID']));

        die(json_encode(["error" => false,"Hash" => $SkillHashs[$SkillID], "SkillName" => (($PlayerSkill[$SkillHashs[$SkillID]]+1) == $SkillMaxLevels[$SkillHashs[$SkillID]]) ? $SkillNextLevel[$SkillHashs[$SkillID]] : 'Empty', "OpenMaxLevel" => (($PlayerSkill[$SkillHashs[$SkillID]]+1) == $SkillMaxLevels[$SkillHashs[$SkillID]]) ? true : false, "Point" => $PlayerSkill[$SkillHashs[$SkillID]]+1,"UsedRP" => Lang::getRP($PlayerSkill['usedRp']+1),"CurrentRP" => $PlayerSkill['currentRp']-1,"msg" => Lang::Get('Successful')]));
    }else Functions::router('Home');

?>
