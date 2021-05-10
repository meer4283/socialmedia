<?php

//login.php

require('../config.php');



if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $output = array();
        $logindata = json_decode(file_get_contents("php://input"));
        $email = $logindata->email;
        $password = $logindata->password;







        $query = "SELECT * FROM `admin` WHERE `email` ='$email' AND password = '$password'";
        $result = mysqli_query($link, $query);

        $count = mysqli_num_rows($result);


        if ($count > 0) {


                $detail = mysqli_fetch_array($result);


                if ($detail['password'] == $password) {
                        session_start();
                        $_SESSION['email'] = $email;


                        $_SESSION['admin_id']  = $detail['admin_id'];
                        $login = "yes";
                } else {
                        $login = "invalid";
                }




                // $sql = "UPDATE `users` SET `status` = 'online' WHERE `users`.`id` = '$user_id' ";
                // mysqli_query($link, $sql);





        } else {


                $login = "no";
        }

        echo $login;
}
