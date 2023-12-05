<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="" class="text-light fw-bold pb-3 mt-2 ">Added hotel</a>
                    </div>
                </div>
            <div>
        </section>
            <div class="table my-5">
                 <h3>bienvenu à YouBooking </h3>
                 <button class="ajouter" type="button" data-bs-toggle="modal" data-bs-target="#addcont">AJOUTER</button>
                <!-- Modal -->
                <div id="addcont" class="modal" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Create Account</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="mb-3">
                                    <label for="location" class="form-label">Location</label>
                                    <input type="text" class="form-control" id="location">
                                </div>
                                <div class="mb-3">
                                    <label for="phoneNumber" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phoneNumber">
                                </div>
                                <div class="mb-3">
                                    <label for="amenities1" class="form-label">Amenities </label>
                                    <input type="text" class="form-control" id="amenities1">
                                </div>
                                <div class="mb-3">
                                    <label for="amenities2" class="form-label">Description</label>
                                    <input type="text" class="form-control" id="amenities2">
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Make sure you have added a Hotel</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- tableau -->
                <table class="table">
                    <thead>
                       <tr>
                         <th scope="col">Name</th>
                         <th scope="col">Location</th>
                         <th scope="col">Phone Number</th>
                         <th scope="col">Amenities</th>
                         <th scope="col">Description</th>
                         <th scope="col">More</th>
                       </tr>
                    </thead>
                    <tbody>
                    </tbody>

                </table>  

            </div> 
    </div>
       
      <?php
        include "footer.php";
      ?>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>