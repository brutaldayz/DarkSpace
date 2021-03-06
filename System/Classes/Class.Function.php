<?php

    class Functions
    {
        public static function getUserIP(){
            if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
            }

            $client  = @$_SERVER['HTTP_CLIENT_IP'];
            $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
            $remote  = $_SERVER['REMOTE_ADDR'];

            if(filter_var($client, FILTER_VALIDATE_IP)) $ip = $client;
            elseif(filter_var($forward, FILTER_VALIDATE_IP)) $ip = $forward;
            else $ip = $remote;
            return $ip;
        }

        public static function generateCode($length) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) { $randomString .= $characters[rand(0, $charactersLength - 1)]; }
            return $randomString;
        }

        public static function generateNumber($length) {
            $characters = '0123456789';
            $charactersLength = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) { $randomString .= $characters[rand(0, $charactersLength - 1)]; }
            return $randomString;
        }

        public function Long($Type, $Text){
            switch ($Type) {
                case 'Username':
                    if(mb_strlen($Text) > 20) die(json_encode(["error" => true, "msg" => Lang::Get('LongUsername')]));
                    break;
                case 'Password':
                    if(mb_strlen($Text) > 40) die(json_encode(["error" => true, "msg" => Lang::Get('LongPassword')]));
                    break;
                case 'Email':
                    if(mb_strlen($Text) > 255) die(json_encode(["error" => true, "msg" => Lang::Get('LongEmail')]));
                    break;
                case 'ClanName':
                    if(mb_strlen($Text) > 50) die(json_encode(["error" => true, "msg" => Lang::Get('LongClanName')]));
                    break;
                case 'ClanTag':
                    if(mb_strlen($Text) > 4) die(json_encode(["error" => true, "msg" => Lang::Get('LongClanTag')]));
                    break;
                case 'ClanDescription':
                    if(mb_strlen($Text) > 200) die(json_encode(["error" => true, "msg" => Lang::Get('LongClanDescription')]));
                    break;
            }
		}

		public function Short($Type, $Text){
            switch ($Type) {
                case 'Username':
                    if(mb_strlen($Text) < 4) die(json_encode(["error" => true, "msg" => Lang::Get('ShortUsername')]));
                    break;
                case 'Password':
                    if(mb_strlen($Text) < 4) die(json_encode(["error" => true, "msg" => Lang::Get('ShortPassword')]));
                    break;
                case 'Email':
                    if(mb_strlen($Text) < 4) die(json_encode(["error" => true, "msg" => Lang::Get('ShortEmail')]));
                    break;
                case 'ClanName':
                    if(mb_strlen($Text) < 1) die(json_encode(["error" => true, "msg" => Lang::Get('ShortClanName')]));
                    break;
                case 'ClanTag':
                    if(mb_strlen($Text) < 1) die(json_encode(["error" => true, "msg" => Lang::Get('ShortClanTag')]));
                    break;
                case 'ClanDescription':
                    if(mb_strlen($Text) < 1) die(json_encode(["error" => true, "msg" => Lang::Get('ShortClanDescription')]));
                    break;
            }
        }

        public static function getUserData($table, $where, $value, $get){
            $Control = Database::Connection()->prepare("SELECT $get FROM $table WHERE $where = ?");  
            $Control->execute(array($value));
            return $Control->fetch()[$get];
        }

        public static function getJsonData($UserID, $Data, $Target){
            $User = Database::Connection()->query("SELECT $Data FROM player_accounts WHERE userID = $UserID")->fetch();
            return json_decode($User[$Data])->$Target;
        }

        public static function SortBy($key){ return function ($a, $b) use ($key) { return strnatcmp($b[$key], $a[$key]); }; }
        public static function ConvertDate($Date){ return strftime('%d.%m.%Y', strtotime($Date)); }
        public static function ConvertTimeDate($Date){ return strftime('%d.%m.%Y - %H.%M', strtotime($Date)); }

        public static function convertSecToStr($secs){
            $output = '';

            if($secs >= 86400) {
                $days = floor($secs/86400);
                $secs = $secs%86400;
                $output = $days . Lang::Get('Day');
                if($days != 1) $output .= '';
                if($secs > 0) $output .= ', ';
            }

            if($secs>=3600){
                $hours = floor($secs/3600);
                $secs = $secs%3600;
                $output .= $hours . Lang::Get('Hour');
                if($hours != 1) $output .= '';
                if($secs > 0) $output .= ', ';
            }

            if($secs>=60){
                $minutes = floor($secs/60);
                $secs = $secs%60;
                $output .= $minutes . Lang::Get('Minute');
                if($minutes != 1) $output .= '';
                if($secs > 0) $output .= ', ';
            }
            
            $output .= $secs . Lang::Get('Second');
            if($secs != 1) $output .= '';
            return $output;
        }

        public static function seflink($text){
            $find = array('Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
            $replace = array('c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
            $text = strtolower(str_replace($find, $replace, $text));
            $text = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $text);
            $text = trim(preg_replace('/\s+/', ' ', $text));
            $text = str_replace(' ', '-', $text);
            return $text;
        }

        public static function GetPercentage($a, $b = 0){
            global $Player;
            if($Player->Data['premium'] == 1) $b += 5;
            if($Player->Data['discount'] == 1) $b += 25;
            return ($Player->Data['rankID'] == 21) ? 0 : (($b == 0) ? $a : (ceil($a - (($a*$b) / 100))));
        }

        public static function getShipName($PlayerID){ return Database::Connection()->query("SELECT shipName FROM player_accounts WHERE userID = {$PlayerID}")->fetch()['shipName']; }
        
        public static function checkRow($Table, $Where, $Value){
            $Count = Database::Connection()->prepare("SELECT $Where FROM $Table WHERE $Where = ?");  
            $Count->execute(array($Value));
            if($Count->rowCount() != 0) die(json_encode(["error" => true, "msg" => $Value . " " . Lang::Get('AlreadyExist')]));
        }

        // Register Function
        public static function Register($table, $target, $value){
            $Sql = Database::Connection()->prepare("INSERT INTO {$table} ({$target}) VALUES (?)");
            $Query = $Sql->execute(array($value));
        }

        // Check Account
        public static function checkAccount($Data){
            $Control = Database::Connection()->prepare("SELECT username FROM player_accounts WHERE username = ?");  
            $Control->execute(array($Data));
            if($Control->rowCount() == 0) die(json_encode(["error" => true, "msg" => Lang::Get('UserNotFound')]));
        }

        // Check Password
        public static function checkPassword($Password, $UserPassword){
            if (password_verify($Password,$UserPassword)) return true;
            else die(json_encode(["error" => true, "msg" => Lang::Get('PasswordError')]));
        }

        // Check Ban
        public static function checkBan($UserID){
            $Ban = Database::Connection()->query("SELECT * FROM server_bans WHERE userId = $UserID AND typeId = 1");
            if($Ban->rowCount() != 0){
                $Ban = $Ban->fetch();
                die(json_encode(["error" => true, "msg" => Lang::Get('Banned') . " " . $Ban['reason']]));
            }
        }

        // Check Verified
        public static function checkVerified($UserID){
            $Verified = Database::Connection()->query("SELECT verification FROM player_accounts WHERE userID = $UserID")->fetch()['verification'];
            $verify = json_decode($Verified);
            if($verify->Verified == 0) die(json_encode(["error" => true, "msg" => Lang::Get('NeedVerify')]));
        }

        public static function checkMaintenance(){
            if(Config::Get('MAINTENANCE')) die(json_encode(["error" => true, "msg" => Lang::Get('Maintenance')]));
        }

        public static function clearSession($Session){ if(isset($_SESSION[$Session])) unset($_SESSION[$Session]); }
        public static function router($Adress){ Header('Location:' . Config::Get('SERVER_URL') . $Adress); exit; }

        public static function controller($checkType){
            global $Player;

            switch ($checkType) {
                case 'loginControl':
                    if($Player->Data == null) self::prepareForLogout();
                    break;
                case 'checkLogin':
                    if($Player->Data != null) self::router('Home');
                    break;
                case 'checkAdmin':
                    if($Player->Data['rankID'] != 21) self::prepareForLogout();
                    break;
                case 'checkCompany':
                    if(trim(strip_tags($_SERVER['REQUEST_URI'])) != "/SelectCompany"){ if($Player->Data['factionID'] == 0) self::router('SelectCompany'); }
                    else{ if($Player->Data['factionID'] != 0) self::router('Home'); }
                    break;
                case 'checkBan':
                    $Ban = Database::Connection()->query("SELECT * FROM server_bans WHERE userId = ".$Player->Data['userID']." AND typeId = 1");
                    if($Ban->rowCount() != 0) self::prepareForLogout();
                    break;
                case 'checkSession':
                    if(isset($_SESSION['SESSION_ID'])){ if($Player->Data['sessionID'] != $_SESSION['SESSION_ID']) self::prepareForLogout(); }
                    else self::prepareForLogout();
                    break;
                default:
                    //Default
                    break;
            }
        }

        public static function prepareForLogout(){
            self::clearSession('USERNAME');
            self::clearSession('EMAIL');
            self::clearSession('SESSION_ID');
            Header('Location: ' . Config::Get('SERVER_URL'));
            exit;
        }

        public static function prepareBuySocket($Cost, $DataType, $ItemType = ""){
            global $Player;

            $array = json_decode($Player->Data['Data']);
            $array->uridium = $Player->GetData('Data', 'uridium') - $Cost;
            $array = json_encode($array, JSON_UNESCAPED_UNICODE);

            $Query = Database::Connection()->prepare("UPDATE player_accounts SET Data = ? WHERE userID = ?");
            $Complete = $Query->execute(array($array, $Player->Data['userID']));
            
            if (Socket::Get('IsOnline', array('UserId' => $Player->Data['userID'], 'Return' => false))) {
                Socket::Send('BuyItem', array('UserId' => $Player->Data['userID'], 'ItemType' => $ItemType, 'DataType' => $DataType-1, 'Amount' => $Cost));
            }

            /*
                DataType{
                    URIDIUM,
                    CREDITS,
                    HONOR,
                    EXPERIENCE,
                    JACKPOT
                }
            */
        }
    }

?>