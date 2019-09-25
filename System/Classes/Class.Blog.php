<?php

    class Blog
    {
        public static function checkPost($Post){
            $Count = Database::Connection()->prepare("SELECT url FROM server_blog WHERE Url = ?");  
            $Count->execute(array($Post));
            if($Count->rowCount() == 0) Header('Location:' . Config::Get('SERVER_URL') . 'Blog');
        }

        public static function getBlog($Post){
            $Get = Database::Connection()->prepare("SELECT * FROM server_blog WHERE Url = ?");  
            $Get->execute(array($Post));
            return $Get->fetch();
        }

        public static function checkTournament($TournamentID){
            $Count = Database::Connection()->prepare("SELECT id FROM log_event_jpb WHERE id = ?");  
            $Count->execute(array($TournamentID));
            if($Count->rowCount() == 0) Header('Location:' . Config::Get('SERVER_URL') . 'Blog');
        }

        public static function getTournament($TournamentID){
            $Get = Database::Connection()->prepare("SELECT * FROM log_event_jpb WHERE id = ?");  
            $Get->execute(array($TournamentID));
            return $Get->fetch();
        }
    }

?>