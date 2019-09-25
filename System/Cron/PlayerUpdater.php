<?php

    require_once('../../System/Init.php');
    $db = Database::Connection();

    $query = $db->query("SELECT * FROM player_accounts")->fetchAll();

    foreach ($query as $value) {
        $Total = 0;
        $Total += json_decode($value['Data'])->experience / 10000;
        $Total += json_decode($value['Data'])->honor / 100;
        $Total += $value['level'] * 100;

        $tarih1= new DateTime(date('d.m.Y H:i:s'));
        $tarih2= new DateTime(json_decode($value['Info'])->CreatedDate);
        $interval = $tarih1->diff($tarih2);
        $Date = $interval->format('%a');
        if($Date == 0) $Date = 1;
        $Total += $Date * 6;
        
        $Total = round($Total);
        
        $update = $db->prepare("UPDATE player_accounts SET rankPoints = ? WHERE userID = ?");
        $update->execute(array($Total, $value['userID']));
    }

?>