<?php


//login.php

require('../config.php');
require('../mail/mail.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $output = array();
    $data = json_decode(file_get_contents("php://input"));


    $email = $data->email;
    $token = rand(1000, 9999);
    $verify = "INSERT INTO `verify_email` (`veri_id`, `email`, `token`, `status`) VALUES (NULL, '$email', '$token', 'notused')";
    
    $subject = "Verify Email";
    $body = "Your Code " . $token;

    if(mysqli_query($link, $verify)){
        if(sendemail($email, $subject, $body)){
            echo "sent email";
        }

    }









}
