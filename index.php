<?php
//Include required files
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

//host
$host = "smtp.hostinger.com"; //when you use gmail smtp.gmail.com
//mail user name
$userName = ""; //your mail user name ex: abcd@gmail.com
//mail password
$password = ""; //your mail password ex: 12345@
//sender's mail
$sentby = ""; //your mail address that you want to use as sender ex: abcd@gmail.com
//mail subject
$subject = "Test mail using phpmailer";
//mail body
$body = "This is sample mail";
//receiver's mail
$receiver = "@gmail.com"; //receiver's mail ex: qwer@gmail.com

//Create instance of phpmailer
$mail = new PHPMailer();
//Set mailer to use smtp
$mail->isSMTP();
//Define smtp host
$mail->Host = $host;
//Enable smtp authentication
$mail->SMTPAuth = "true";
//set typr of encryption
$mail->SMTPSecure = "tls";
//set port to connect smtp
$mail->Port = "587";
//set gmail username
$mail->Username = $userName;
//set gmail password
$mail->Password = $password;
//set sender email
$mail->setFrom($sentby);
//set email subject
$mail->Subject = $subject;
//email body
$mail->Body = $body;
//add receiver
$mail->addAddress($receiver);
//send mail
if ($mail->Send()) {
    echo "Email Sent..!";
} else {
    echo "Error" . $mail->ErrorInfo;
}
//close smtp connection
$mail->smtpClose();
