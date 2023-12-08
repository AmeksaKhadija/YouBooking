<?php
    include "pages/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <section class="ourdashboard d-flex flex-row">
        <div class="sidebar h-100 mt-0 ">
                    <br>
            <div class="sidebar_phases  ms-3 d-flex justify-content-between align-items-center mb-4 px-2"> 
                <p class="text-light fw-bold fs-5 ms-2">Profile</p>
                <i class="fa-solid fa-chevron-down fs-4 me-2 mb-2" style="color: #ffffff;"></i>
            </div>
            <div class="sidebar_phases border-bottom h-75 ms-3  pb-5">
                    <div class="d-flex justify-content-between align-items-center border-bottom px-2">
                        <i class="fa-solid fa-hotel pb-3" style="color: #ffffff;"></i>
                        <a href="pages/hotels.php" class="text-light fw-bold pb-3 mt-2 text-decoration-none">information about hotel</a>
                    </div>

                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-bookmark pb-3" style="color: #ffffff;"></i>
                        <a href="" class="text-light fw-bold pb-3 mt-2 text-decoration-none">Your Saving </a>
                    </div>
                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-table-cells pb-3" style="color: #ffffff;"></i>
                        <a href="pages/reservations" class="text-light fw-bold pb-3 mt-2 text-decoration-none">Open reservations</a>
                    </div>
                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-chart-line pb-3" style="color: #ffffff;"></i> 
                        <a href="" class="text-light fw-bold pb-3 mt-2 text-decoration-none">Booking Stats</a>
                    </div>
                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-chart-pie pb-3" style="color: #ffffff;"></i>
                        <a href="" class="text-light fw-bold pb-3 mt-2 text-decoration-none">Booking Traffic</a>
                    </div>
                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-regular fa-comment-dots pb-3" style="color: #ffffff;"></i>
                        <a href="pages/messageclient.php" class="text-light fw-bold pb-3 mt-2 text-decoration-none">Messages</a>
                    </div>
                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-gear pb-3" style="color: #ffffff;"></i>
                        <a href="" class="text-light fw-bold pb-3 mt-2 text-decoration-none">Settings</a>
                    </div>
            </div>
        </div>
        <div>
        <div class="oudashboard_reservation w-10  ms-4 mt-4">
            <a class="navbar-brand fw-bold text-light fs-4 ms-3 mt-2" href="#"><span class="navbar-logo">You</span>booking</a>
            <p class="text-light fw-bold ms-5">Welcome Back!</p>
            <table class="table bg-dark-subtle">
                <thead class="table ">
                    <tr class="table">
                    <th scope="col">reference of reservation</th>
                    <th scope="col">Name of client</th>
                    <th scope="col">Check in</th>
                    <th scope="col">Check out </th>
                    </tr>
                </thead>
                <?php
                    include "config/connect.php";
                    $requete= "SELECT DISTINCT reservation.reservation_id, users.name, reservation.start_date, reservation.end_date
                    FROM reservation
                    INNER JOIN users ON reservation.user_id = users.user_id";
                    $query = mysqli_query($connect,$requete);
                    while($data = mysqli_fetch_assoc($query)) {?>
                <tbody>
                    <tr class="table">
                    <th scope="row"><?php echo $data['reservation_id'] ?> </th>
                    <td><?php echo $data['name']; ?> </td>
                    <td><?php echo $data['start_date']; ?></td>
                    <td><?php echo $data['end_date']; ?></td>
                    
                    </tr>
                </tbody>
                <?php }?>
            </table>

        </div>
        <div class="ourdashboard--statistics ms-4 mb-5 d-flex mt-3 h-50">
            <div class="ourdashboard--statistics_graph w-50 me-4 text-light fw-bold mb-5">
                <p class="ms-3 mt-3">Booking Stats</p>
                <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
            
            </div>
            <div class="ourdashboard--statistics_graph  w-50 text-light fw-bold mb-5"><p class="ms-3 mt-3">Booking traffic</p></div>
        </div>


        </div>
    </section>


<?php 
    include "pages/footer.php"
?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
        </script>
        <script
        src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
        </script>
        </body>
        </html>
<style>
    .sidebar{
        width:20%;
        background-image: linear-gradient(rgba(27, 51, 88, 1),rgba(109, 165, 192, 0));
    }
    .sidebar_phases{
        background-color:rgba(67, 81, 117, 1);
        height:10%;
        width:90%;
    }
    .dashboard{
        background-color: rgba(27, 51, 88, 1);
        width:40%;
        height:50%
    }
    .oudashboard_reservation{
        background-color:rgba(67, 81, 117, 1);
        height:50vh;
        width:160vh
    }
    .ourdashboard--statistics_graph{
        background-color:rgba(67, 81, 117, 1);
    }
    .table{
        background-color:rgba(67, 81, 117, 1);  
    }
</style>