<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once "../vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer(true); //Argument true in constructor enables exceptions

//From email address and name
$mail->From = 'webmaster@martinpusar.si';


if (isset($_POST['firstname'])) {
    $mail->FromName = $_POST['firstname'];
} else $mail->FromName = 'Brez imena';

//To address and name
$mail->addAddress("martin@martinpusar.si");

//Address to which recipient will reply
$mail->addReplyTo($_POST['email'], "Odgovori");

if (isset($_POST['email'])) {
    $mail->addReplyTo($_POST['email'], "Odgovori");
} else $mail->addReplyTo('webmaster@martinpusar.si', "Odgovori");


//Send HTML or Plain Text email
$mail->isHTML(true);


if (isset($_POST['subject'])) {
    $mail->Subject = $_POST['subject'];
} else $mail->Subject = 'Brez zadeve';


$mail->Body = '<p>' . $_POST['message'] . '</p>';
$mail->AltBody = $_POST['message'];

try {
    $mail->send();
    echo "Message has been sent successfully";
    Header('Location: ../');
    exit();
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    Header('Location: ../');
    exit();
}
