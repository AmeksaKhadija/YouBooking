<?php
require '../config/server.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "UPDATE users SET request_id = 1 where user_id";
        mysqli_prepare($con,$sql);
        // header('location: requests.php');
        echo "flsdf";
    }
?>