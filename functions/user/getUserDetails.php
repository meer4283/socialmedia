<?php

//fetch_data.php

include('../config.php');
$output=array();
if(isset($_GET['id'])){

$user_id = $_GET['id'];

$query = "SELECT * from users LEFT JOIN user_details on users.user_id = user_details.user_id where users.user_id = '$user_id' ";


   
$result = mysqli_query($link, $query);
    
    if($result){
        
    $count = mysqli_num_rows($result);
    if ($count > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $temp = array();
            $temp['user_id'] = $row['user_id'];
            $temp['email'] = $row['email'];
            $temp['fullname'] = $row['fullname'];
            $temp['profile_pic'] = $row['profile_pic'];
            $temp['banner_image'] = $row['banner_image'];
            $temp['gender'] = $row['gender'];
            $temp['dob'] = $row['dob'];
            

// user detail info
            $temp['country'] = $row['country'];
            $temp['city'] = $row['city'];
            $temp['birthday'] = $row['birthday'];
            $temp['relationship'] = $row['relationship'];
            $temp['work_as'] = $row['work_as'];
            $temp['education'] = $row['education'];
            $temp['know'] = $row['know'];
            $temp['interest'] = $row['interest'];
            $temp['smoking'] = $row['smoking'];
            $temp['religion'] = $row['religion'];
            $temp['marital_status'] = $row['marital_status'];
            $temp['about_me'] = $row['about_me'];
            $temp['profile_info'] = $row['profile_info'];

            array_push($output, $temp);
        }

        echo json_encode($output, JSON_UNESCAPED_SLASHES);
    } else {
        echo json_encode($output, JSON_UNESCAPED_SLASHES);
    }
}
}