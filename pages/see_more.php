<?php

    require '../config/server.php';

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];

        $sql = "SELECT * FROM hotel WHERE hotel_id = $id";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);

        if(!$result)
        {
            echo
            '
            <div class="alert alert-danger d-flex align-items-center" style="height: 50px; overflow:hidden;"  role="alert">
                <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    connection Failed
                </div>
            </div>
            ';
        }

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>view Hotels</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>
    <style>

    .linear 
    {
        background-image: url(img/1.jpg);
        width: 100vw;
        height: 50vh;
        background-size: cover;
        border-radius: 5px;
        animation: animate 4s  linear infinite ;
    }
    @keyframes animate{
        0%{
            background-image: url(img/2.jpg);
        }
        40%{
            background-image: url(img/3.jpg);
        }
        60%{
            background-image: url(img/4.jpg);
        }
        80%{
            background-image: url(img/5.jpg);
        }
        100%{
            background-image: url(img/6.jpg);
        }
        
       
    }

    .name
    {
        font-size: 4rem;
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    .number,
    .location
    {
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    }
    </style>

    <div class="px-5 d-flex my-5 justify-content-between align-items-center gap-4">
        <div class="linear"></div>
        <div class="info">
            <div class="right_info">
                <div>
                    <h3 class="name"><?= $row['name']?></h3>
                </div>
                <div >
                    <h5 class="location"><?= $row['location']?></h5>
                </div>
                <div>
                    <h5 class="number"><?= $row['contact_number']?></h5>
                </div>
                <div>
                    <h5 class="amenities"><?= $row['amenities']?></h5>
                </div>
                <div>
                    <h5 class="description"><?= $row['description']?></h5>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'footer.php';
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>