<?php

    class Admin
    {
        public static function CheckPlayer($Player){
            $Control = Database::Connection()->prepare("SELECT profileID FROM player_accounts WHERE profileID = ?");  
            $Control->execute(array($Player));
            if($Control->rowCount() == 0) Header('Location:' . Config::Get('SERVER_URL') . 'ACP/Home');
            return false;
        }

        public static function GetPlayer($Player){
            $Get = Database::Connection()->prepare("SELECT * FROM player_accounts WHERE profileID = ?");  
            $Get->execute(array($Player));
            return $Get->fetch();
        }
    }

?>