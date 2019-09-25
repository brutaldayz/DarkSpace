<?php

    class Player
    {
        public $Data = null;

        public function checkUser(){
            if(isset($_SESSION['USERNAME']) && isset($_SESSION['EMAIL']) && isset($_SESSION['SESSION_ID'])){
                $Check = Database::Connection()->query("SELECT * FROM player_accounts WHERE username = '".$_SESSION['USERNAME']."' AND email = '".$_SESSION['EMAIL']."' AND sessionID = '".$_SESSION['SESSION_ID']."'");
                if($Check->rowCount() != 0) $this->Data = $Check->fetch();
            }
        }

        public function GetData($data, $target){ if(isset(json_decode($this->Data[$data])->$target)) return json_decode($this->Data[$data])->$target; }

        public function Updated($target){ return Database::Connection()->query("SELECT $target FROM player_accounts WHERE userID = {$this->Data['userID']}")->fetch()[$target]; }

        public function getSettings($Where, $Target = '', $return_on_error = '') {
            $Get = Database::Connection()->query("SELECT * FROM player_settings WHERE userId =".$this->Data['userID']."")->fetch(PDO::FETCH_OBJ);
  
            if ($Target != '' && isset(json_decode($Get->$Where)->$Target)) return json_decode($Get->$Where)->$Target;
            elseif ($Target == '' && isset($Get->$Where) && $Get->$Where != "") return $Get->$Where;
            else return $return_on_error;
        }
    }

    $Player = new Player();
    $Player->checkUser();
?>