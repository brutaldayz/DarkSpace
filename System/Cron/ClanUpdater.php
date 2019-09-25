<?php

    require_once('../../System/Init.php');
    $db = Database::Connection();

    $query = $db->query("SELECT clanID FROM server_clan ORDER BY rankPoints DESC")->fetchAll();
    $i = 1;

    foreach ($query as $value) {
        $getClan = $db->query("SELECT SUM(rankPoints) as rankPoint FROM player_accounts WHERE clanID = ".$value['clanID']."")->fetch();

        $update = $db->prepare("UPDATE server_clan SET rankPoints = ?, rank = ? WHERE clanID = ?");
        $update->execute(array($getClan['rankPoint'],$i,$value['clanID']));

        $i++;
    }

?>