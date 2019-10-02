<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'System/PHPMailer/src/Exception.php';
require 'System/PHPMailer/src/PHPMailer.php';
require 'System/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'darkspace.verify@gmail.com';
    $mail->Password   = '147258369Ds';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = 587;

    $mail->setFrom('darkspace.verify@gmail.com', 'DarkSpace');
    $mail->addAddress('yusufsahinhamza@gmail.com', 'DarkSpace | Legionary');

    $mail->isHTML(true);
    $mail->Subject = 'DarkSpace | E-mail verification';
    $mail->Body    = 'Click this link to activate your account: <a href="darkspace.ovh">Activate</a>';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
