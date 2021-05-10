<?php
	require('../config.php');
	if(isset($_GET['from']) && isset($_GET['to'])){
		$from=$_GET['from'];
		$to=$_GET['to'];
		$output=array();
		// $query="SELECT * FROM messages where (from_username='$from' AND to_username='$to') OR (from_username='$to' AND to_username='$from')
		// AND message_content !='I\'m looking for a tutor, can you help me'";
		$query="SELECT * FROM messages where (from_user_id='$to' AND to_user_id='$from') AND message_content!= 'start chat now zzzzzzzzzzzxxxxxxxffrttret45fdsf'
		OR (from_user_id='$from' AND to_user_id='$to') 
		AND message_content !='Approved' AND message_content!= 'start chat now zzzzzzzzzzzxxxxxxxffrttret45fdsf'";
		$run=mysqli_query($link,$query);
		if(mysqli_num_rows($run)>0){
			while($row=mysqli_fetch_array($run)){
				$temp=array();
				$temp['from_user_id']=$row['from_user_id'];
				$temp['to_user_id']=$row['to_user_id'];
				$temp['message_content']=$row['message_content'];
				$temp['message_type']=$row['message_type'];
				$datatime=explode (",", $row['message_time']);
				$temp['date']=$datatime[0];
				$temp['time']=$datatime[1];
				// $temp['message_time']=$row['message_time'];
				$temp['message_status']=$row['message_status'];
				array_push($output,$temp);
			}
			$sql = "UPDATE messages SET message_status='Read' WHERE to_username='$from' AND from_username='$to'";	
			$run=mysqli_query($link,$sql);
			echo json_encode($output,JSON_UNESCAPED_SLASHES);

		}
		else{
			echo json_encode($output,JSON_UNESCAPED_SLASHES);
		}
	}
