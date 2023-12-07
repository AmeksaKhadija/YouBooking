<?php

    require '../config/server.php';

    if(isset($_GET["id"]))
    {
        $id =  $_GET['id'];
        $sql = "DELETE  FROM hotel WHERE hotel_id = $id";
        mysqli_query($con,$sql);
        header("location: dashboard.php");
    }
    else
    {
        echo "ther was a problem ";
    }

?>