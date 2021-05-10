<?php
	require('../config.php');
	date_default_timezone_set("Europe/London");
	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	    $messagedata=json_decode(file_get_contents("php://input"));
	$from_user_id=$messagedata->from_user_id;
	$to_user_id=$messagedata->to_user_id;
		$content=$messagedata->message_content;
		$type=$messagedata->message_type;
		
		$time=date("d-m-y").','.date("h:i:a");
		$status=$messagedata->message_status;
		// echo $from_username;
		// $sendmessage="INSERT INTO messages (from_user_id,from_user_id,message_content,message_type,message_time,message_status) 
		// 	VALUES ('$from','$to','$content','$type','$time','$status')";
		$sendmessage = "INSERT INTO `messages` (`id`, `from_user_id`, `to_user_id`, `message_content`, `message_type`, `message_time`, `message_status`) VALUES (NULL, '$from_user_id', '$to_user_id', '$content', '$type', '$time', '')";
		if(mysqli_query($link,$sendmessage)){





	




			echo "send";
		}
		else{
			echo "error";
		}
	}
	

?>