<?php
require('../config.php');
if (isset($_GET['user_id'])) {
	$user_id = $_GET['user_id'];
}
$output = array();
$query = "SELECT * FROM messages LEFT JOIN users on messages.from_user_id=users.user_id AND messages.to_user_id='$user_id' Where users.user_id != '$user_id'
	    GROUP BY messages.from_user_id ORDER BY messages.id DESC";
// $query="SELECT * FROM teachers INNER JOIN messages on 
// (messages.from_user_id='$user_id' AND messages.to_user_id=teachers.user_name) OR 
// (messages.from_user_id=teachers.user_name AND messages.to_user_id='$user_id') 
// GROUP BY teachers.user_name ORDER BY messages.id DESC";
$run = mysqli_query($link, $query);
if (mysqli_num_rows($run) > 0 || mysqli_num_rows($run) == 0) {
	while ($row = mysqli_fetch_array($run)) {
		$temp = array();
		$temp['fullname'] = $row['fullname'];
		$temp['profile_pic'] = $base_url."uploads/profile/".$row['profile_pic'];
		$temp['user_id'] = $row['user_id'];
		$from = $row['user_id'];

		// $temp['status']=$row['online_status'];
		$query1 = "SELECT * FROM messages WHERE to_user_id='$user_id' AND from_user_id= '$from' AND message_status='Delivered'";
		$run1 = mysqli_query($link, $query1);
		$unreedmessages = mysqli_num_rows($run1);
		$query2 = "SELECT * FROM `messages` WHERE (from_user_id='$user_id' AND to_user_id='$from') OR (from_user_id='$from' AND to_user_id='$user_id') ORDER BY id DESC LIMIT 1";
		$run2 = mysqli_query($link, $query2);
		$row1 = mysqli_fetch_array($run2);
		if ($row1['message_content'] == "Approved") {
			$temp['Last_Message'] = "No message";
		} else {
			$temp['Last_Message'] = substr($row1['message_content'], 0, 15);
			// $datatime=explode (",", $row['message_time']);
			// $temp['date']=$datatime[0];
			// $temp['time']=$datatime[1];	
		}
		$temp['message_unreed'] = $unreedmessages;
		array_push($output, $temp);
	}
	echo json_encode($output, JSON_UNESCAPED_SLASHES);
} else {
	echo json_encode($output, JSON_UNESCAPED_SLASHES);
}
