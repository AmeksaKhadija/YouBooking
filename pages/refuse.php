<?php
require '../config/server.php';
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM users WHERE user_id = $id";
        mysqli_query($con,$sql);
        header('location: requests.php');
    }
?>