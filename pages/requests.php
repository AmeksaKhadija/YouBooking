<?php
    require '../config/server.php';
    $sql = "SELECT * FROM users WHERE request_id = 2";
    $result = mysqli_query($con,$sql);
    if(!$result)
    {
        echo '
        <div class="alert alert-danger d-flex align-items-center" style="height: 50px; overflow:hidden;"  role="alert">
            <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                connection Failed
            </div>
        </div>';
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Request</title>
</head>
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
  </style>

<body>
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
                        <i class="fa-solid fa-chart-line pb-3" style="color: #ffffff;"></i>
                        <a href="requests.php" class=" text-light fw-bold pb-3 mt-2">Requests</a>
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
                </div>
                <div>
                </div>
        </section>
        
        <div class="table my-5">
            <table>
                <thead>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Phone Number</th>
                    <th>More</th>
                </thead>
                <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo "
                            <tr>
                                <td>$row[name]</td>
                                <td>$row[email]</td>
                                <td>$row[phone_number]</td>
                                <td>
                                    <a href='accepted.php?id=$row[user_id]' class='btn btn-success'>Accept</i></a>
                                    <a href='refuse.php?id=$row[user_id]' class='btn btn-danger'>cancel</a>
                                </td>
                            </tr>
                            ";
                        }
                    
                    ?>
                </tbody>
            </table>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>