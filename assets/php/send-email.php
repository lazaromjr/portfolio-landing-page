<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

// Debugging

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if($_POST){

    $content = file_get_contents("smtp.json");
    $smtp = json_decode($content, true);

    $mail = new PHPMailer(true);
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;

    // Sets up PHP Mailer
    $mail->isSMTP();
    $mail->Host = $smtp['host'];
    $mail->SMTPAuth = $smtp['auth'];
    $mail->Username = $smtp['username'];
    $mail->Password =  $smtp['password'];
    $mail->SMTPSecure = $smtp['secure'];
    $mail->Port = $smtp['port'];

    $mail->setFrom($smtp['from'], 'Portfolio Webpage');
    $mail->addAddress('contact@lazaromonteiro.com', 'Lazaro Monteiro');

    $mail->isHTML(false);
    $mail->Subject = 'Contact from lazaromonteiro.com webpage';
    $mail->Body = 'From: ' . $_POST['email'] . "\nName: " . $_POST['name'] . "\n\n" . $_POST['message'];

    try {
        $mail->send();
        echo "<p style='color:green'> The message was successfully sent! </p>";
    }
    catch (Exception $e) {
        echo "<script> console.error(" . $e . ")</script>";
        echo "<p style='color:red'> Was not possible to send the message! Try again or use the mail icon bellow. </p>";
    }
}
?>