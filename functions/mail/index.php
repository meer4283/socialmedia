<?php
require_once('mail.php');


$reciver_email = 'highoncyber@gmail.com';
$subject = "Verifcation";
$body= "4512";


sendemail($reciver_email,$subject,$body);


?>
