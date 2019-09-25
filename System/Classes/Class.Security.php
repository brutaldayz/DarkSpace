<?php

    class Security
    {
        public static function createToken(){
            $_SESSION['csrf_token'] = bin2hex(openssl_random_pseudo_bytes(32));
            return $_SESSION['csrf_token'];
        }

        public static function checkToken($token, $post){ if(hash_equals($token, $post)) return; }
        public static function Post($Data){ return htmlspecialchars(trim($_POST[$Data])); }
        public static function Get($Data){ return htmlspecialchars(trim($_GET[$Data])); }
        public static function Clear($Data){ return preg_replace('/\s+/', '', $Data); }
        public static function Empty($Data){ if(empty($Data) || $Data == "") die(json_encode(["error" => true, "msg" => Lang::Get('Empty')])); }
        public static function Encrypt($data){ return base64_encode(base64_encode(base64_encode(base64_encode(base64_encode($data))))); }
        public static function Decrypt($data){ return base64_decode(base64_decode(base64_decode(base64_decode(base64_decode($data))))); }
    }
    
?>