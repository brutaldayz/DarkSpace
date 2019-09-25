<?php

    class Clan
    {
        public static function MyClan($ClanID, $Target){
            if(isset($ClanID)){
                $Get = Database::Connection()->query("SELECT $Target FROM server_clan WHERE clanID = {$ClanID}")->fetch()[$Target];
                return $Get;
            }
        }

        public static function GetClan($ClanID){
            return Database::Connection()->query("SELECT * FROM server_clan WHERE clanID = {$ClanID}")->fetch();
        }

        public static function GetMemberCount($clanID){
            $Members = Database::Connection()->query("SELECT members FROM server_clan WHERE clanID = {$clanID}")->fetch()['members'];
            return count(json_decode($Members));
        }

        public static function GetClanData($ClanID, $Target){
            return Database::Connection()->query("SELECT $Target FROM server_clan WHERE clanID = $ClanID")->fetch()[$Target];
        }

        public static function GetRelation($Type){
            $Relations = array(
                "1" => Lang::Get('Alliance'), 
                "2" => Lang::Get('Nap'),
                "3" => Lang::Get('War')
            );
            
            return $Relations[$Type];
        }

        public static function CheckClan($Type){
            global $Player;

            switch ($Type) {
                case 1:
                    if($Player->Data['clanID'] !== 0) Functions::router('Clan');
                    break;
                case 2:
                    if($Player->Data['clanID'] === 0) Functions::router('ClanJoin');
                    break;
            }
        }

        public static function ClanDetails($randomID){
            $Data = Database::Connection()->prepare("SELECT * FROM server_clan WHERE randomID = ?");  
            $Data->execute(array($randomID));
            if($Data->rowCount() == 0) Functions::router('ClanJoin');
            else return $Data->fetch();
        }
    }

?>