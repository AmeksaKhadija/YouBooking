<?php
require '../config/server.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "UPDATE users SET request_id = 1 where user_id = $id";
        mysqli_query($con,$sql);
        header('location: requests.php');
    }
?>