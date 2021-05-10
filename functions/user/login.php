<?php

//login.php

require('../config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $output=array();
        $logindata=json_decode(file_get_contents("php://input"));
        $email=$logindata->email;
        $password=$logindata->password;
      






$query = "SELECT * FROM `users` WHERE `email` ='$email'";
$result = mysqli_query($link, $query);
 
$count = mysqli_num_rows($result);


if($count > 0 ){


        $detail = mysqli_fetch_array($result);
       
               
         if($detail['password'] == $password){
                        session_start();
                        $_SESSION['email'] = $email;
                        $_SESSION['loggedin_as'] = "user";


                        $_SESSION['fullname'] = $detail['fullname'];

                        $_SESSION['user_id']  = $detail['user_id'];
                        $login = "yes";
         }     
         else{
                        $login = "invalid";
                 
         } 
        
         
                

                // $sql = "UPDATE `users` SET `status` = 'online' WHERE `users`.`id` = '$user_id' ";
                // mysqli_query($link, $sql);

               
       

           
             }
else{
       
       
          $login ="no" ;
         
         }

        echo $login;
         

         








        }
?>