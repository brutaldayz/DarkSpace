<?php

    header('Content-Type: application/json');

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require '../System/PHPMailer/src/Exception.php';
    require '../System/PHPMailer/src/PHPMailer.php';
    require '../System/PHPMailer/src/SMTP.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        require_once('../System/Init.php');
        if(isset($_POST['terms'])){
            if($_POST['terms'] == "1"){
                $Token = Security::Post('csrf-token');
                Security::checkToken($_SESSION['csrf_token'], $Token);
                $Username = Security::Post('username');
                $Username = Security::Clear($Username);
                $Password = Security::Post('password');
                $Email = Security::Post('email');
                Security::Empty($Username);
                Security::Empty($Password);
                Security::Empty($Email);
                if(!filter_var($Email, FILTER_VALIDATE_EMAIL)) die(json_encode(["error" => true, "msg" => Lang::Get('NotCorrectMail')]));
                if(Config::Get('SERVER_HOST') != "127.0.0.1"){
                    $Key		= '6LeDvLoUAAAAAHvACfKYhV0cnYiOoUOQTp-ud2wT';
                    $Recaptcha  = Security::Post('g-recaptcha-response');
                    $IP 		= $_SERVER['REMOTE_ADDR'];
                    $Url = "https://www.google.com/recaptcha/api/siteverify?secret=".$Key."&response=".$Recaptcha."&remoteip=".$IP;
                    $Check = file_get_contents($Url);
                    $Json  = json_decode($Check, true);
                    if(!$Json['success']) die(json_encode(["error" => true, "msg" => Lang::Get('VerificationFailed')]));
                }
                if (!preg_match('/^[A-Za-z0-9*_-]+$/', $Username)) die(json_encode(["error" => true, "msg" => Lang::Get('PregUsername')]));
                Functions::Long("Username", $Username);
                Functions::Short("Username", $Username);
                Functions::Long("Password", $Password);
                Functions::Short("Password", $Password);
                Functions::Long("Email", $Email);
                Functions::Short("Email", $Email);
                Functions::checkRow("player_accounts", "username", $Username);
                Functions::checkRow("player_accounts", "shipName", $Username);
                Functions::checkRow("player_accounts", "email", $Email);
                $IP        = Functions::getUserIP();
                $SessionID = Functions::generateCode(32);
                $Hash = Functions::generateCode(16);
                $Profile = Functions::generateCode(6);
                $db = Database::Connection();

                $db->beginTransaction();
                $Mail = new PHPMailer(true);

                try {
                    $Mail->isSMTP();
                    $Mail->Host       = 'smtp.gmail.com';
                    $Mail->SMTPAuth   = true;
                    $Mail->Username   = 'darkspace.verify@gmail.com';
                    $Mail->Password   = '147258369Ds';
                    $Mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
                    $Mail->Port       = 587;

                    $Mail->setFrom('darkspace.verify@gmail.com', 'DarkSpace');
                    $Mail->addAddress($Email, 'DarkSpace | ' . $Username);

                    $Mail->isHTML(true);
                    $Mail->Subject = 'DarkSpace | E-mail verification';
                    $Mail->Body    = "Click this link to activate your account: <a href=\"http://darkspace.ovh/VerifyAccount.php?Hash={$Hash}&Profile={$Profile}\">Activate</a>";

                    $Mail->send();

                    try {
                        $Sql = $db->prepare('INSERT INTO player_accounts (sessionID, username, shipName, password, email, profileID, Info) VALUES (?,?,?,?,?,?,?)');
                        $Sql->execute(array($SessionID, $Username, $Username, password_hash($Password, PASSWORD_DEFAULT), $Email, $Profile, '{"LastLoginIP": "'.$IP.'", "RegisterIP": "'.$IP.'", "MapID":0, "CreatedDate": "'.date('d.m.Y H:i:s').'","Profile": "Avatar.png"}'));
                        $UserID = $db->lastInsertId();
                        Functions::Register('player_equipment', 'userId', $UserID);
                        Functions::Register('player_settings', 'userId', $UserID);
                        Functions::Register('player_titles', 'userID', $UserID);
                        Functions::Register('player_skilltree', 'userID', $UserID);

                        $verification = $db->query("SELECT verification FROM player_accounts WHERE userID = {$UserID}")->fetch()['verification'];

                        $array = json_decode($verification);
                        $array->Hash = $Hash;
                        $array = json_encode($array, JSON_UNESCAPED_UNICODE);

                        $Query = Database::Connection()->prepare("UPDATE player_accounts SET verification = ? WHERE userID = ?");
                        $Complete = $Query->execute(array($array, $UserID));

                        $db->commit();
                        die(json_encode(["error" => false, "msg" => Lang::Get('VerifyEmail')]));
                    } catch (PDOExecption $e) {
                        $db->rollback();
                        die(json_encode(["error" => true, "msg" => Lang::Get('RegisterError')]));
                    }

                } catch (Exception $e) {
                    $db->rollback();
                    die(json_encode(["error" => true, "msg" => Lang::Get('ErrorMail')]));
                }
            }
        }else die(json_encode(["error" => true, "msg" => Lang::Get('Checkbox')]));
    }else Functions::router('Home');

?>
