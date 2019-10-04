<?php

    require_once('../../System/Init.php');
    $db = Database::Connection();

    function UserCount($FactionID){
        global $db;
        $Count = $db->query("SELECT userID FROM player_accounts WHERE rankPoints > 10 AND factionID = $FactionID AND rankID != 21");
        return $Count->rowCount();
    }

    function GetUsers($FactionID){
        global $db;
        $Users = $db->query("SELECT userID, shipName, rankPoints, verification FROM player_accounts WHERE rankPoints > 10 AND factionID = $FactionID AND rankID != 21 ORDER BY rankPoints DESC")->fetchAll();
        return $Users;
    }

    function EditRank($UserID, $Rank){
        global $db;
        $Edit = $db->prepare("UPDATE player_accounts SET rankID = ? WHERE userID = ?");
        $Edit->execute(array($Rank, $UserID));
    }
    
    for ($i = 1; $i <= 3; $i++) {
    
        $Rank = array(
            1 => 20,
            2 => 12.29,
            3 => 10,
            4 => 9,
            5 => 8,
            6 => 7,
            7 => 6,
            8 => 5,
            9 => 4.5,
            10 => 4,
            11 => 3.5,
            12 => 3,
            13 => 2.5,
            14 => 2,
            15 => 1.5,
            16 => 1,
            17 => 0.5,
            18 => 0.1,
            19 => 0.01
        );
    
        $Addition = 0;
        $UserCount = UserCount($i) - 1;
        $PredictCount = 0;
        $UserList = GetUsers($i);
    
        $Rank = array_reverse($Rank, true);
    
        if(!empty($UserList)){
            EditRank($UserList[0]['userID'], 20);
            unset($UserList[0]);
        
            foreach ($Rank as $Key => $Value) {
                $Preditch = $UserCount / 100 * $Value; //normal = 100
                if ($PredictCount < $UserCount)
                {
                    $PredictCount += ceil($Preditch);
                    $Tmp = 0;
                    foreach ($UserList as $Key2 => $Value2) {
                            if ($Tmp < $Preditch)
                            {
                                EditRank($UserList[$Key2]['userID'], $Key);
                                unset($UserList[$Key2]);
                                $Tmp += 1;
                            }
                    }
                }
                $Addition += $Value;
            }
        }
    }

?>