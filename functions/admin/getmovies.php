<?php
require("../config.php");

$output = array();

$query = "SELECT * FROM movies";
$run = mysqli_query($link, $query);
if (mysqli_num_rows($run) > 0) {


    while ($row = mysqli_fetch_array($run)) {
        $temp = array();
        $temp['movie_id'] = $row['movie_id'];
        $temp['movie_name'] = $row['movie_name'];
        $temp['file'] = $row['file'];
        array_push($output, $temp);
    }

    mysqli_close($link);
    echo json_encode($output, JSON_UNESCAPED_SLASHES);
} else {
    echo json_encode($output, JSON_UNESCAPED_SLASHES);
}
