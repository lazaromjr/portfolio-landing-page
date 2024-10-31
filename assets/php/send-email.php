<?php

use Dotenv\Dotenv;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "vendor/autoload.php";

// Debugging
/*
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
*/

if($_POST){
    try {

        // Load .env
        $dotenv = Dotenv::createImmutable(__DIR__, '../../smtp.env');
        $dotenv->safeLoad();

        $mail = new PHPMailer(true);
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;

        // Sets up PHP Mailer
        $mail->isSMTP();
        $mail->Host = $_ENV['HOST'];
        $mail->SMTPAuth = $_ENV['AUTH'];
        $mail->Username = $_ENV['USERNAME'];
        $mail->Password =  $_ENV['PASSWORD'];
        $mail->SMTPSecure = $_ENV['SECURE'];
        $mail->Port = $_ENV['PORT'];

        $mail->setFrom($_ENV['FROM'], 'Portfolio Webpage');
        $mail->addAddress('contact@lazaromonteiro.com', 'Lazaro Monteiro');

        $mail->isHTML(false);
        $mail->Subject = 'Contact from lazaromonteiro.com webpage';
        $mail->Body = 'From: ' . $_POST['email'] . "\nName: " . $_POST['name'] . "\n\n" . $_POST['message'];
    
        $mail->send();
        echo "<p style='color:green'> The message was successfully sent! </p>";
    
    }
    catch (Exception $e) {
        echo "<script> console.error(" . $e . ")</script>";
        echo "<p style='color:red'> Was not possible to send the message! Try again or use the mail icon bellow. </p>";
    }
}
?>