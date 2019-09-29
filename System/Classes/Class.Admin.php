<?php

    class Admin
    {
        public static function getTotalPlayers(){ return Database::Connection()->query("SELECT userID FROM player_accounts")->rowCount(); }
        public static function getCompany($Param){ return Database::Connection()->query("SELECT factionID FROM player_accounts WHERE factionID = $Param")->rowCount(); }

        public static function getDailyRevenue(){
            $Amount = 0;

            $Get = Database::Connection()->query("SELECT * FROM server_dsc WHERE DAY(Date) = DAY(CURDATE())");
            if($Get->rowCount() == 0) return $Amount;

            foreach ($Get->fetchAll() as $Data) { $Amount += $Data['Amount']; }
            return $Amount;
        }

        public static function getWeeklyRevenue(){
            $Amount = 0;

            $Get = Database::Connection()->query("SELECT * FROM server_dsc WHERE WEEK(Date) = WEEK(CURDATE())");
            if($Get->rowCount() == 0) return $Amount;

            foreach ($Get->fetchAll() as $Data) { $Amount += $Data['Amount']; }
            return $Amount;
        }

        public static function getMonthlyRevenue(){
            $Amount = 0;

            $Get = Database::Connection()->query("SELECT * FROM server_dsc WHERE MONTH(Date) = MONTH(CURDATE())");
            if($Get->rowCount() == 0) return $Amount;

            foreach ($Get->fetchAll() as $Data) { $Amount += $Data['Amount']; }
            return $Amount;
        }

        public static function getTotalRevenue(){
            $Amount = 0;

            $Get = Database::Connection()->query("SELECT * FROM server_dsc");
            if($Get->rowCount() == 0) return $Amount;

            foreach ($Get->fetchAll() as $Data) { $Amount += $Data['Amount']; }
            return $Amount;
        }
    }

?>