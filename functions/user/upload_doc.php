<?php  
    require('../database/config.php');
    date_default_timezone_set("Europe/London");
 if(!empty($_FILES))  
 {  
      $path = '../../uploads/message/' . $_FILES['file']['name'];  
      if(move_uploaded_file($_FILES['file']['tmp_name'], $path))  
      {  
        //    $insertQuery = "INSERT INTO tbl_images(name) VALUES ('".$_FILES['file']['name']."')";  
        //    if(mysqli_query($connect, $insertQuery))  
        //    {  
        //         echo 'File Uploaded';  
        //    }  
        //    else  
        //    {  
        //         echo 'File Uploaded But not Saved';  
        //    }  

        $from  = $_POST['from_username'];
        $to  = $_POST['to_username'];
        $status  = $_POST['message_status'];
        $time=date("d-m-y").','.date("h:i:a");
        $homework_id  = $_POST['homework_id'];
        $type  = $_POST['message_type'];
       

        $download = '<a href="uploads/message/'.$_FILES['file']['name'].'" target="_blank" download="Ezassignemnt">Download Attachment</a>';




            // echo $from_username;
            $sendmessage="INSERT INTO messages (homework_id,from_username,to_username,message_content,message_type,message_time,message_status) 
                VALUES ('$homework_id','$from','$to','$download','$type','$time','$status')";
            if(mysqli_query($link,$sendmessage)){
                echo "send";
            }
            else{
                echo "error";
            }
       












      }  
 }  
 else  
 {  
      echo 'Some Error';  
 }  
 ?>  