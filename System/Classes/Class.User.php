<?php

    class User
    {
        public static function checkUser($User){
            $Control = Database::Connection()->prepare("SELECT profileID FROM player_accounts WHERE profileID = ?");  
            $Control->execute(array($User));
            if($Control->rowCount() == 0) Functions::router('Home');
        }

        public static function getAccount($User){
            $Get = Database::Connection()->prepare("SELECT * FROM player_accounts WHERE profileID = ?");  
            $Get->execute(array($User));
            return $Get->fetch();
        }
    }

?>