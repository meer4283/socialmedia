<?php


//login.php

require('../config.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $output=array();
        $data=json_decode(file_get_contents("php://input"));


 
        $user_id = $data->user_id;
        $movie_id = $data->movie_id;
 




            $query1 = "SELECT * FROM movies_decision INNER JOIN 
            users ON users.user_id=movies_decision.user_id WHERE 
            movies_decision.movie_id='$movie_id' AND movies_decision.user_id!='$user_id' AND movies_decision.status='Liked'";
            $run1 = mysqli_query($link, $query1);
            if (mysqli_num_rows($run1) > 0) {
                while ($row = mysqli_fetch_array($run1)) {
                    $temp = array();
                    $temp['fullname'] = $row['fullname'];
                    array_push($output, $temp);
                }
                echo json_encode($output, JSON_UNESCAPED_SLASHES);
            } else {
                $temp = array();
                $temp['code'] = "No matches yet";
                array_push($output, $temp);
                echo json_encode($output, JSON_UNESCAPED_SLASHES);
            }
        

        
    
    

   



      
        




        
        //  echo json_encode($output,JSON_UNESCAPED_SLASHES);   
         










        }

//         ?>
// <?php
// require 'config.php';
// $output = array();
// if ($link) {
//     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     if (isset($_POST['auth_key']) && $_POST['auth_key'] == $auth_key) {
//         $user_id = $_POST['user_id'];
//         $movie_id = $_POST['movie_id'];
//         $movie_name = $_POST['movie_name'];
//         $status = $_POST['status'];
//         $query = "INSERT INTO `movies_decision` (`id`, `user_id`, `movie_id`, `movie_name`, `status`) 
//             VALUES (NULL, '$user_id', '$movie_id', '$movie_name', '$status')";
//         if (mysqli_query($link, $query)) {
//             if ($status == "Liked") {
//                 $query1 = "SELECT * FROM movies_decision INNER JOIN 
//             users ON users.user_id=movies_decision.user_id WHERE 
//             movies_decision.movie_id='$movie_id' AND movies_decision.user_id!='$user_id' AND movies_decision.status='Liked'";
//                 $run1 = mysqli_query($link, $query1);
//                 if (mysqli_num_rows($run1) > 0) {
//                     while ($row = mysqli_fetch_array($run1)) {
//                         $temp = array();
//                         $temp['user_name'] = $row['user_name'];
//                         array_push($output, $temp);
//                     }
//                     echo json_encode($output, JSON_UNESCAPED_SLASHES);
//                 } else {
//                     $temp = array();
//                     $temp['code'] = "No matches yet";
//                     array_push($output, $temp);
//                     echo json_encode($output, JSON_UNESCAPED_SLASHES);
//                 }
//             }
//         } else {
//             $temp = array();
//             $temp['code'] = "Error occured";
//             array_push($output, $temp);
//             echo json_encode($output, JSON_UNESCAPED_SLASHES);
//         }
//     } else {
//         $temp = array();
//         $temp['code'] = "Access forbidden";
//         array_push($output, $temp);
//         echo json_encode($output, JSON_UNESCAPED_SLASHES);
//     }
//     }
// } else {
//     $temp = array();
//     $temp['code'] = "Connection error";
//     array_push($output, $temp);
//     echo json_encode($output, JSON_UNESCAPED_SLASHES);
// }