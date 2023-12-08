<?php
// isset dalat taha9o9
    if (isset($_GET['id'])) {
        include('../config/server.php'); 
        $id = $_GET['id'];

      $sqlDELET="DELETE  FROM hotel WHERE hotel_id=$id";

      if (mysqli_query($con,$sqlDELET)) {
        header("Location:hotels.php");
    } else {
        die('rong');
      }

    }
?>