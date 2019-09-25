<?php

    class Logger
    {
        public static function addLoginLog($IP, $User){
            $Sql = Database::Connection()->prepare('INSERT INTO log_account (UserID, IP, Content) VALUES (?,?,?)');
            $Sql->execute(array($User, $IP, 1));
        }

        public static function addLog($IP, $User, $Content, $Amount){
            $Sql = Database::Connection()->prepare('INSERT INTO log_account (UserID, IP, Content, Amount) VALUES (?,?,?,?)');
            $Sql->execute(array($User, $IP, $Content, $Amount));
        }
    }

    //TODO: Skill tree log

?>