<?php

    require '../config/server.php';

    if(isset($_GET["id"]))
    {
        $id =  $_GET['id'];
        $sql = "DELETE  FROM hotels WHERE ID = $id";
        mysqli_query($con,$sql);
        header("location: ../index.php");
    }
    else
    {
        echo "ther was a problem ";
    }

?>