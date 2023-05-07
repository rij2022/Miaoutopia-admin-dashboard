<?php

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'arij.laatigue@esprit.tn';                     //SMTP username
    $mail->Password   = '211JFT9871';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('miaoutopia@gmail.com', 'Mailer');
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress($_GET['email']);               //Name is optional
   // $mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
   $mail->AddEmbeddedImage('images/image-1.png', 'image-1');
   $mail->AddEmbeddedImage('images/image-2.png', 'image-2');
   $mail->AddEmbeddedImage('images/image-3.png', 'image-3');
   $mail->AddEmbeddedImage('images/image-4.png', 'image-4');
   $mail->AddEmbeddedImage('images/image-6.png', 'image-5');


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Miaoutopia Payment Recieved !';

    $mail->msgHTML(file_get_contents('indexMail.html'), __DIR__);

    $mail->AltBody = 'Thank you for Trusting Us';

    $mail->send();
    header("Location:./view/produits/demos.creative-tim.com/bs3/material-kit-pro/examples/list-product.php");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}