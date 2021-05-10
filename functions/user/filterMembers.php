<?php

//fetch_data.php

include('../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $output = array();
    $logindata = json_decode(file_get_contents("php://input"));
    
    $query = "select * from users where 1 = 1 ";



    if(isset($logindata->name))
    {
     $name = $logindata->name;
     $query .= "AND fullname LIKE '%$name%' ";
    }

if(isset($logindata->gender))
{
 $gender = $logindata->gender;
 $query .= "AND gender = '$gender' ";
}

 if(isset($logindata->age_to, $logindata->age_from) && !empty($logindata->age_to) && !empty($logindata->age_from))
 {
     $maxage = $logindata->age_to;
     $minage = $logindata->age_from;
  $query .= " AND dob BETWEEN '". $minage."' AND '". $maxage."'
  ";

 }
   
 // echo $query;

    $output = array();
    
    $run = mysqli_query($link, $query);
    if (mysqli_num_rows($run) > 0) {
        while ($row = mysqli_fetch_array($run)) {
            $temp = array();
            $temp['user_id'] = $row['user_id'];
            $temp['email'] = $row['email'];
            $temp['fullname'] = $row['fullname'];
            $temp['profile_pic'] = $row['profile_pic'];
            $temp['gender'] = $row['gender'];



            array_push($output, $temp);
        }

        echo json_encode($output, JSON_UNESCAPED_SLASHES);
    } else {
        echo json_encode($output, JSON_UNESCAPED_SLASHES);
    }

}