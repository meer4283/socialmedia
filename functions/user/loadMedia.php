<?php


session_start();
    
if(!isset($_SESSION['email']) && !isset($_SESSION['user_id'])  ){
    header("Location: ../../index.php");
}
else{
    $user_id =  $_SESSION['user_id'];
} 

//login.php
// date_default_timezone_set("Europe/London");
require('../config.php');


    $output = array();

    $query = "SELECT * FROM `media` where `user_id` = '$user_id'";
    $run = mysqli_query($link, $query);
    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_array($run)) {
            $temp = array();
            $temp['file'] = $row['file'];
            $temp['media_id'] = $row['media_id'];



            array_push($output, $temp);
        }

        echo json_encode($output, JSON_UNESCAPED_SLASHES);
    } else {
        echo json_encode($output, JSON_UNESCAPED_SLASHES);
    }
