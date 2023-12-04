<?php
    require '../config/server.php';
    $sql = "SELECT * FROM hotels";
    $result = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Hotel</title>
</head>
<body>
    <?php
        include 'header.php';
    ?>

    <div class="container-fuild" style="width: 80%; margin-left:15%;">
    <table class="table">
            <thead>
                <tr>
                    <th scope="col">Hotel Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">phone Number</th>
                    <th scope="col">Description</th>
                    <th scope="col">Localisation</th>
                    <th scope="col">More</th>
                </tr>
            </thead>
            <tbody>
                <?php

                
                while ($row = mysqli_fetch_assoc($result)){
                    echo "
                        <tr>
                            <td>$row[Nom_hotel]</td>
                            <td>$row[Email]</td>
                            <td>$row[Phone]</td>
                            <td>$row[Description]</td>
                            <td>$row[Localisation]</td>
                            <td>
                                <a href='edit.php?id=$row[ID]' ><i class='fa-solid fa-pen-to-square'></i></a>
                                <a href='delete.php?id=$row[ID]' class='delete'><i class='fa-solid fa-trash-can'></i></a>
                            </td>
                        </tr>
                    ";
                }
                ?>
            </tbody>
        </table>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>
</html>