<?php
require('../config.php');


if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $sql = "DELETE FROM users WHERE user_id='$id'";

    if ($link->query($sql) === TRUE) {
        echo "deleted";
    }
    else{
        echo "not deleted";
    }
}
