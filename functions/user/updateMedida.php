<?php


//login.php
session_start();
$user_id =  $_SESSION['user_id'];
 
require('../config.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $output=array();
        $data=json_decode(file_get_contents("php://input"));


    $type = $data->type;
    $file = $data->file;
    
 
if($type == "dp"){
    $query = "UPDATE `users` SET `profile_pic` = '$file' WHERE `users`.`user_id` = '$user_id'";
    if (mysqli_query($link, $query)) {
             echo "updated"    ;
           }
    else{
        echo "error";
    }


}
if($type == "banner"){
    $query = "UPDATE `users` SET `banner_image` = '$file' WHERE `users`.`user_id` = '$user_id'";
    if (mysqli_query($link, $query)) {
             echo "updated"    ;
           }
    else{
        echo "error";
    }


}



        
    
    

   



      
        

    //echo json_last_error_msg();


        
        //  echo json_encode($output,JSON_UNESCAPED_SLASHES);   
         










        }
