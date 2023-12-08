<?php
   require '../config/server.php';
        $id = $_GET['id'];
        $sql = "DELETE FROM `contacts` WHERE `id`='$id'";
        mysqli_query($con, $sql);
        header('Location: /youcontact.php');

?>