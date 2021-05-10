<?php


//login.php

require('../config.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $output=array();
        $data=json_decode(file_get_contents("php://input"));


 $user_id = $data->user_id;
    $name = $data->name;
    $password = $data->password;
 

$query = "UPDATE `users` SET `fullname` = '$name', `password` = '$password' WHERE `users`.`user_id` = '$user_id'";





if (mysqli_query($link, $query)) {
   
            echo "updated"    ;
        }

        
else{
    echo "error";
}
        
    
    

   



      
        

    //echo json_last_error_msg();


        
        //  echo json_encode($output,JSON_UNESCAPED_SLASHES);   
         










        }
