<?php



require_once('../config.php');



$statusMsg = '';

// File upload path
$targetDir = "../../uploads/";

$temp = explode(".", $_FILES["file"]["name"]);
$fileName = round(microtime(true)) . '.' . end($temp);


$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);


$genre = "genre";
$movie_name = $_POST['movie_name'];
$movie_rating = "movie_rating";
$movie_des = "movie_des";




$for_id = round(microtime(true));




if (isset($_POST["submit"]) && !empty($_FILES["file"]["name"])) {
    // Allow certain file formats
    $allowTypes = array('jpg', 'png', 'jpeg', 'webp', 'PNG');
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // Insert image file name into database
            // $url = $pic_url . $fileName;
            //only file name
            $url =  $fileName;

            $inserthome = "INSERT INTO `movies` (`movie_id`, `genre_id`, `movie_name`, `movie_rating`, `movie_des`,`file`) VALUES (NULL, '$genre', '$movie_name', '$movie_rating', '$movie_des','$url')";
            if (mysqli_query($link, $inserthome)) {
                $statusMsg = "Uploaded";
            } else {
                $statusMsg = "File upload failed, please try again.";
            }
        } else {
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    } else {
        $statusMsg = 'Sorry, only JPG, JPEG, PNG files are allowed to upload.';
    }
} else {
    $statusMsg = 'Please select a file to upload.';
}

// Display status message







?>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<div style="visibility: hidden;"><?php echo $statusMsg; ?></div>
<script>
    swal({
            title: "Message",
            text: "<?php echo $statusMsg; ?>",
            icon: "warning",
            button: "Go to admin panel",
            dangerMode: false,
        })
        .then((willDelete) => {
            if (willDelete) {
                window.location.href = "<?php echo $base_url ?>" + "admin";

            }
        });
</script>