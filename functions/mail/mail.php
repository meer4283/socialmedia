<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once "php_mailer/autoload.php";






function  sendemail($email,$subject,$body) {


    // echo $email;
    // echo $subject;
    // echo $body;
    $mail = new PHPMailer(true);

    //Enable SMTP debugging.
    $mail->SMTPDebug = 3;                               
    //Set PHPMailer to use SMTP.
    $mail->isSMTP();            
    //Set SMTP host name                          
    $mail->Host = "pickaflic.us";
    //Set this to true if SMTP host requires authentication to send email
    $mail->SMTPAuth = true;                          
    //Provide username and password     
    $mail->Username = "verify@pickaflic.us";                 
    $mail->Password = "L12O64gd@$^x";                           
    //If SMTP requires TLS encryption then set it
    $mail->SMTPSecure = "ssl";                           
    //Set TCP port to connect to
    $mail->Port = 465;                                   
    
    $mail->From = "verify@pickaflic.us";
    $mail->FromName = "Pick A Flic";
    
    $mail->addAddress($email, $email);
    
    // $mail->isHTML(true);
    
    $mail->Subject = $subject;
    $mail->Body = $body;
    
    
    try {
        $mail->send();
        echo "Message has been sent successfully";
    } catch (Exception $e) {
        // echo "Mailer Error: " . $mail->ErrorInfo;
    }
}
