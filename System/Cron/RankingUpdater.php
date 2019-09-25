<?php

    require_once('../../System/Init.php');
    $db = Database::Connection();

    $query = $db->query("SELECT * FROM player_accounts ORDER BY rankPoints DESC")->fetchAll();
    $i = 1;
    
    foreach ($query as $value) {
        $getClan = $db->query("SELECT SUM(rankPoints) as rankPoint FROM player_accounts WHERE userID = ".$value['userID']."")->fetch();

        $update = $db->prepare("UPDATE player_accounts SET rank = ? WHERE userID = ?");
        $update->execute(array($i,$value['userID']));
        
        $i++;
    }

?>