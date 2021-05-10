<?php


//login.php

require('../config.php');
session_start();


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $output = array();
    $registerData = json_decode(file_get_contents("php://input"));

    $user_id = $registerData->user_id;
  





    $query = "DELETE FROM `movies_decision` WHERE `movies_decision`.`user_id` = '$user_id'";




    if (mysqli_query($link, $query)) {

        echo "reseted";
    } else {


        echo "error";

    }



    //  echo json_encode($output,JSON_UNESCAPED_SLASHES);   











}
