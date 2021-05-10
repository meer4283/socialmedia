<?php


//login.php

require('../config.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $output=array();
        $data=json_decode(file_get_contents("php://input"));


 $user_id = $data->user_id;
 

$query = "SELECT * FROM movies ";




$run = mysqli_query($link, $query);
if (mysqli_num_rows($run) > 0) {
    while ($row = mysqli_fetch_array($run)) {
        $temp = array();
       
       
        
            $movie_id = $row['movie_id'];
       
        $check_query = "SELECT * from movies_decision where `movie_id` = '$movie_id' AND `user_id` = '$user_id' ";
        $check_result = mysqli_query($link,$check_query);
        $check_count =  mysqli_num_rows($check_result);

        if($check_count > 0){

        }
        else{
                $temp['movie_id'] = $row['movie_id'];
                $temp['movie_movie'] = $row['movie_name'];
                $temp['file'] = $row['file'];

                
                array_push($output, $temp);
                
        }

        

        
    
    

   



      
        
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


?>

