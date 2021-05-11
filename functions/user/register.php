<?php


//login.php

require('../config.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (!empty($_FILES)) {
    $output = array();
    $registerData = json_decode(file_get_contents("php://input"));


    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
   
    $query = "SELECT * FROM `users` WHERE `email` ='$email'";
    $result = mysqli_query($link, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
      echo "exist";
    } else {
      $login = "notexist";
      $insert = "INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `dob`, `profile_pic`, `gender`, `username`) VALUES (NULL, '$fullname', '$email', '$password', '$dob', 'default.png', '$gender', '$username')";
     
      if (mysqli_query($link, $insert)) {
        $last_id = $link->insert_id;
      




        
        $temp = explode(".", $_FILES["file"]["name"]);
        $fileName = round(microtime(true)) . '.' . end($temp);
        $path = '../../uploads/' . $fileName;
        if (move_uploaded_file($_FILES['file']['tmp_name'], $path)) {
          $sql = "UPDATE `users` SET profile_pic='$fileName' WHERE user_id='$last_id'";
          if ($link->query($sql) === TRUE) {
            $insert_userDetail = "INSERT INTO `user_details` (`detail_id`, `user_id`, `country`, `city`, `birthday`, `relationship`, `work_as`, `education`, `know`, `interest`, `smoking`, `religion`, `marital_status`, `about_me`, `profile_info`) VALUES (NULL, '$last_id', '', '', '', '', '', '', '', '', '', '', '', '', '')";
            if(mysqli_query($link ,  $insert_userDetail)){
              mysqli_close($link);
              echo "registered";
            }
         
          }
        }
      } else {
        echo "Register error";
        mysqli_close($link);
      }
    }
  } else {
    $output = array();
    $registerData = json_decode(file_get_contents("php://input"));


    $fullname = $_POST['fullname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    
    $query = "SELECT * FROM `users` WHERE `email` ='$email'";
    $result = mysqli_query($link, $query);
    $count = mysqli_num_rows($result);
    if ($count == 1) {
      echo "exist";
    } else {
      $login = "notexist";
      $insert = "INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `dob`, `profile_pic`, `gender`, `username`) VALUES (NULL, '$fullname', '$email', '$password', '$dob', 'default.png', '$gender', '$username')";
      if (mysqli_query($link, $insert)) {
        
        
        $last_id = $link->insert_id;
        $insert_userDetail = "INSERT INTO `user_details` (`detail_id`, `user_id`, `country`, `city`, `birthday`, `relationship`, `work_as`, `education`, `know`, `interest`, `smoking`, `religion`, `marital_status`, `about_me`, `profile_info`) VALUES (NULL, '$last_id', '', '', '', '', '', '', '', '', '', '', '', '', '')";
        if(mysqli_query($link ,  $insert_userDetail)){
          mysqli_close($link);
          echo "registered";
        }


        mysqli_close($link);
        echo "registered";
      } else {
        echo "Register error";
        mysqli_close($link);
      }
    }
  }
}
