<?php


//login.php

require('../config.php');




if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $output = array();
    $data = json_decode(file_get_contents("php://input"));


    $email = $data->email;
    $code = $data->code;

    
    $verify = "SELECT * FROM `verify_email` where `email` = '$email' AND `token` = '$code' ";
    
    
    $result = mysqli_query($link, $verify);
    if($result){   
        if(mysqli_num_rows($result) > 0){
            echo "verified";

        }
        else{
            echo "Wrong Code";
        }

    }









}
