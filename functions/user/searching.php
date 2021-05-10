<?php


//login.php

require('../config.php');



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $output = array();
        $data = json_decode(file_get_contents("php://input"));


        $search = $data->search;
        $myid = $data->myid;


        $query = "select * from users where `fullname` like '%$search%' and user_id!='$myid'";




        $run = mysqli_query($link, $query);
        if (mysqli_num_rows($run) > 0) {
                while ($row = mysqli_fetch_array($run)) {
                        $temp = array();

                        $temp['user_id'] = $row['user_id'];
                        $temp['email'] = $row['email'];
                        $temp['fullname'] = $row['fullname'];
                        $temp['profile_pic'] = $row['profile_pic'];
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
