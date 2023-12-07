<?php
session_start();
include 'DB.php';
// if (isset($_POST['sign-up'])) signUP();
// elseif (isset($_POST['login'])) login();
if (isset($_POST['book'])) addContact();
// elseif (isset($_POST['edit_contact'])) updateContact();
// elseif (isset($_GET['contact_id'])) editContact();
// elseif (isset($_GET['delete_contact'])) deleteContact();


function getUsers()
{
    global $conn;

    $sql = "SELECT * FROM `users` WHERE role_id = 1";
    return mysqli_query($conn, $sql);
}

function filter()
{
    global $conn;
    $search = $_POST["search"];

    $sql = "SELECT * FROM `hotel` WHERE name = '$search' OR location = '$search'";
    return mysqli_query($conn, $sql);
}

function deleteContact()
{
    global $conn;
    $id = $_GET['delete_contact'];
    $sql = "DELETE FROM `contacts` WHERE `id`='$id'";
    mysqli_query($conn, $sql);
    header('Location: /youcontact.php');
}

function addContact()
{
    echo "nananana";
    global $conn;
    $checkin = $_POST["checkin"];
    $checkout = $_POST["checkout"];
    // $email = $_POST["email"];
    // $position = $_POST["position"];
    // $description = $_POST["description"];
    $sql = "INSERT INTO reservation (`start_date`,`end_date`,`total_cost`,`created_at`) VALUES ('$checkin','$checkout','100','$checkin')";
    if (mysqli_query($conn, $sql)) {
        header('Location: /Youbook/pages/home1.php');
        echo "mamak";
    }
    else
        echo "mmak";
}