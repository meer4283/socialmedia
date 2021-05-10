<?php
require("../config.php");

$output = array();

$query = "SELECT * FROM users";
$run = mysqli_query($link, $query);
if (mysqli_num_rows($run) > 0) {


    while ($row = mysqli_fetch_array($run)) {
        $temp = array();
        $temp['user_id'] = $row['user_id'];
        $temp['fullname'] = $row['fullname'];
        $temp['email'] = $row['email'];
        $temp['dob'] = $row['dob'];
        $temp['profile_pic'] = $row['profile_pic'];
        array_push($output, $temp);
    }

    mysqli_close($link);
    echo json_encode($output, JSON_UNESCAPED_SLASHES);
} else {
    echo json_encode($output, JSON_UNESCAPED_SLASHES);
}
