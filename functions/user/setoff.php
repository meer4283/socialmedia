<?php

//login.php

require('../database/config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $output=array();
        $logindata=json_decode(file_get_contents("php://input"));
        $homework_id=$logindata->homework_id;

      

   
  

        
        
        
            $sql = "UPDATE `homework` SET `student_status` = 'offline' WHERE `homework`.`homework_id` = '$homework_id' ";
           if(mysqli_query($link, $sql)){

            echo "offline";
            mysqli_close($link);
           }
     
           
        // Close connection
       
      
         

         








        }
?>