<?php
session_start();
include('../config/server.php'); 
if(isset($_POST['submit'])){

$nom = $_POST['name'];
$location = $_POST['location'];
$contact_number = $_POST['contact_number'];
$amenities = $_POST['amenities'];
$description = $_POST['description'];
$id=$_SESSION['hotel_id'];

// Insert data into the database
$sql = "INSERT INTO hotel (`name`, `location`, `contact_number`, `amenities`, `description`) VALUES ('$nom','$location','$contact_number','$amenities','$description')";
$result = mysqli_query($con,$sql);
if ($result) {
    header("Location:hotels.php");
        exit();
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
?>