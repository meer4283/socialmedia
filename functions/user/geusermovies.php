<?php


//login.php

require('../config.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $output=array();
        $data=json_decode(file_get_contents("php://input"));


 $user_id = $data->user_id;
$action = $data->action;
 

$query = "SELECT * FROM `movies` LEFT JOIN movies_decision on movies.movie_id = movies_decision.movie_id where movies_decision.user_id = '$user_id' AND `status` = '$action'";




$run = mysqli_query($link, $query);
if (mysqli_num_rows($run) > 0) {
    while ($row = mysqli_fetch_array($run)) {
        $temp = array();
       
     
                $temp['movie_id'] = $row['movie_id'];
                $temp['movie_name'] = $row['movie_name'];
                $temp['file'] = $row['file'];
            $temp['status'] = $row['status'];

            
                array_push($output, $temp);
        
        

        
    
    

   



      
        
    }
    echo json_encode(mb_convert_encoding($output, "UTF-8", "UTF-8"), JSON_UNESCAPED_SLASHES);

    //echo json_last_error_msg();
} else {
        // $temp['time'] = "Not Available";
        // array_push($output, $temp);
        echo json_encode(mb_convert_encoding($output, "UTF-8", "UTF-8"), JSON_UNESCAPED_SLASHES);

}    


        
        //  echo json_encode($output,JSON_UNESCAPED_SLASHES);   
         










        }
