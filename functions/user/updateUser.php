<?php

//login.php
session_start();
require('../config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $output=array();
        $data=json_decode(file_get_contents("php://input"));
      
        $user_id =  $_SESSION['user_id'];
        $fullname     =  $data->fullname;
        $email     =  $data->email;
        
        $gender     =  $data->gender;
        $dob     =  $data->dob;
        $country     =  $data->country;
        $city     =  $data->city;
        $birthday     =  $data->birthday;
        $relationship     =  $data->relationship;
        $work_as     =  $data->work_as;
        $education     =  $data->education;
        $know     =  $data->know;
        $interest     =  $data->interest;
        $smoking     =  $data->smoking;
        $religion     =  $data->religion;
        $marital_status     =  $data->marital_status;
        $about_me     =  $data->about_me;
        $profile_info     =  $data->profile_info;




        $user_id =  $_SESSION['user_id'];
        $usersQuery = "UPDATE `users` SET `fullname` = 'Bilal khan updated' WHERE `users`.`user_id` = '$user_id'";
        $userDetail = "UPDATE `user_details` SET `know` = 'Urduu' WHERE `user_details`.`user_id` = '$user_id'";



if(mysqli_query($link, $query)){
    echo "inserted";
}
else{
    echo "errormovieaction";
}




        }
