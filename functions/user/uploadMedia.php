<?php
	/* Create connection*/
require_once('../config.php');
session_start();
if(!isset($_SESSION['email']) && !isset($_SESSION['user_id'])  ){
    header("Location: ../../index.php");
}
else{
    $user_id =  $_SESSION['user_id'];
} 
  if($_FILES['file']['name'] != ''){

  	$file_names = '';

  	$total = count($_FILES['file']['name']);
   
  	for($i=0; $i<$total; $i++){

  		$filename = $_FILES['file']['name'][$i]; // Get the Uploaded file Name.
  		$extension = pathinfo($filename,PATHINFO_EXTENSION); //Get the Extension of uploded file

  		$valid_extensions = array("png","jpg","jpeg");

  		if(in_array($extension, $valid_extensions)){ // check if upload file is a valid image file.
  			$new_name = rand() . ".". $extension;
  			$path = "../../uploads/" . $new_name;

  			move_uploaded_file($_FILES['file']['tmp_name'][$i], $path);

  			$file_names .= $new_name . " , ";

            $sql = "INSERT INTO `media` (`media_id`, `user_id`, `file`, `date_created`) VALUES (NULL, '$user_id', '{$new_name}', NOW())";
            if (mysqli_query($link, $sql)) {
               $uploade = 'true';
            } else {
                $uploade = 'false';
            }


  		}else{
  			echo 'false';
  		}
  	}
    
    // Save uploaded images name on database
  	
echo $uploade;
  }
