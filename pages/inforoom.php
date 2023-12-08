<?php
  include('../config/server.php'); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>
    <style>
      body {
          height: 100vh;
      }

      .sidebar {
          width: 20%;
          background-image: linear-gradient(rgba(27, 51, 88, 1), rgba(109, 165, 192, 0));
      }

      .sidebar_phases {
          background-color: rgba(67, 81, 117, 1);
          height: 10%;
          width: 90%;
      }
      a {
            text-decoration: none;
        }

    table
    {
        width: 96%;
        margin: auto;
    }

    
    .ajouter {
      padding: 0.6rem 1.2rem;
      background: #d4d9e0;
      border: 2px solid #CEA0AA;
      margin-left: 80%; 
      margin-top: 1.5%;
    }
    .ajouter-primary:hover {
      background-color: #ba808c;
      border-color: #ba808c;
      transition: .3s;
    }
  </style>

        <?php
        include 'header.php';
        ?>
    <div class="d-flex h-100">
        <section class="sidebar  mt-0">
            <br>
            <div style="height:100%;">
                <div class="sidebar_phases border-bottom h-75 ms-3  pb-5">
                    <div class="d-flex justify-content-between align-items-center border-bottom px-2">
                        <i class="fa-solid fa-hotel pb-3" style="color: #ffffff;"></i>
                        <a href="" class="text-light fw-bold pb-3 mt-2 ">information about hotel</a>
                    </div>

                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-table-cells pb-3" style="color: #ffffff;"></i>
                        <a href="reservations.php" class=" text-light fw-bold pb-3 mt-2">Open reservations</a>
                    </div>
                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-chart-line pb-3" style="color: #ffffff;"></i>
                        <a href="" class=" text-light fw-bold pb-3 mt-2">Booking Stats</a>
                    </div>
                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-chart-pie pb-3" style="color: #ffffff;"></i>
                        <a href="" class="text-light fw-bold pb-3 mt-2">Booking Traffic</a>
                    </div>
                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-regular fa-comment-dots pb-3" style="color: #ffffff;"></i>
                        <a href="" class="text-light fw-bold pb-3 mt-2">Messages</a>
                    </div>

                    <div class="d-flex border-bottom justify-content-between align-items-center px-2">
                        <i class="fa-solid fa-gear pb-3" style="color: #ffffff;"></i>
                        <a href="" class="text-light fw-bold pb-3 mt-2">Settings</a>
                    </div>
                    <div class="d-flex justify-content-between align-items-center border-bottom px-2">
                        <i class="fa-solid fa-hotel pb-3" style="color: #ffffff;"></i>
                        <a href="hotels.php" class="text-light fw-bold pb-3 mt-2 ">Added hotel</a>
                    </div>
                </div>
            <div>
        </section>
            <div class="table my-5">
                <h1>Hotel Room Description</h1>
                <div class="row">
                  <div class="col-md-6">
                    <img src="https://th.bing.com/th/id/R.25b86c23a77f0e94d5e909cc1b3bceff?rik=Djcc7WwfZAnIjA&riu=http%3a%2f%2fcache.marriott.com%2fmarriottassets%2fmarriott%2fSTFCT%2fstfct-guestroom-0045-hor-clsc.jpg%3finterpolation%3dprogressive-bilinear%26&ehk=Qfi1Qy2RPsgQGGJQ%2bDLh1pnflcQlURsqEc584MAYrZI%3d&risl=&pid=ImgRaw&r=0" alt="Room Image" class="img-fluid">
                  </div>
                  <div class="col-md-6">
                    <h2>Room Name</h2>
                    <p>Room Description Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut dui eget mauris dapibus porta.</p>
                    <ul class="list-group">
                      <li class="list-group-item"><strong>Price:</strong> $200</li>
                      <li class="list-group-item"><strong>quantity:</strong> 50 </li>
                      <li class="list-group-item"><strong>Amenities:</strong> Free Wi-Fi, Air Conditioning, Mini Fridge</li>
                    </ul>
                  </div>
                </div>
            </div>
     </div> 
</div>
       
      <?php
        include "footer.php";
      ?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>             