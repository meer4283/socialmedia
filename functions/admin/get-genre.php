<?php
	require('../config.php');

$output = array();

		$query= "SELECT * FROM genres";
		$run=mysqli_query($link,$query);
		if(mysqli_num_rows($run)>0){
            
            
            while($row=mysqli_fetch_array($run)){
				$temp=array();
				$temp['genre_name']=$row['genre_name'];
				$temp['genre_id']=$row['genre_id'];
							
                array_push($output,$temp);
                

            }
            
            mysqli_close($link);
		    
			echo json_encode($output,JSON_UNESCAPED_SLASHES);

		}
		else{
			echo "Error";
		}
	
