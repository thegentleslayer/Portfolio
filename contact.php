<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if(isset($_POST['send'])){
    $surname= htmlentities($_POST['surname']);
    $firstname= htmlentities($_POST['firstname']);
    $email= htmlentities($_POST['email']);
    $subject= htmlentities($_POST['subject']);
    $message= htmlentities($_POST['message']);

    $mail = new PHPMailer(true);
    $mail -> isSMTP();
    $mail -> Host = 'smtp.gmail.com';
    $mail -> SMTPAuth = true;
    $mail -> Username = 'mfaridiphp@gmail.com';
    $mail -> Password = 'gxsuxgqiyxvjtroh';
    $mail -> Port = 465;
    $mail -> SMTPSecure = 'ssl';
    $mail -> isHTML(true);
    $mail -> setFrom($email, $surname, $firstname);
    $mail -> addAddress('mfaridiphp@gmail.com');
    $mail -> Subject = ("$email ($subject");
    $mail -> Body = $message;
    $mail -> send();

    header("Location: ./response.php");

}






?>
