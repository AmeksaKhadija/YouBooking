<?php
  include "header.php";
  include "../config/server.php";

  $requeta="SELECT MONTH(reservation.start_date),
  CASE
           WHEN MONTH(reservation.start_date)= 1 THEN 'Janvier'
           WHEN MONTH(reservation.start_date)= 2 THEN 'Février'
           WHEN MONTH(reservation.start_date)= 3 THEN 'Mars'
           WHEN MONTH(reservation.start_date)= 4 THEN 'Avril'
           WHEN MONTH(reservation.start_date)= 5 THEN 'Mai'
           WHEN MONTH(reservation.start_date)= 6 THEN 'Juin'
           WHEN MONTH(reservation.start_date)= 7 THEN 'Juillet'
           WHEN MONTH(reservation.start_date)= 8 THEN 'Août'
           WHEN MONTH(reservation.start_date)= 9 THEN 'Septembre'
           WHEN MONTH(reservation.start_date)= 10 THEN 'Octobre'
           WHEN MONTH(reservation.start_date)= 11 THEN 'November'
           ELSE 'December'
  END
  FROM `reservation` GROUP BY EXTRACT(MONTH FROM `start_date`);";
  $querya=mysqli_query($con,$requeta);
  if(!$querya){
    echo "makhdaaaamsh";
  }
  $data=mysqli_fetch_assoc($querya);


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
    <div>
      <canvas id="myChart"></canvas>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
              const ctx = document.getElementById('myChart');

              new Chart(ctx, {
                type: 'bar',
                data: {
                  labels: ['August', 'September ', 'October', 'November'],
                  datasets: [{
                    label: ' les tendances de réservation ',
                    data: [12, 19, 3, 5, 2, 3],
                    borderWidth: 1
                  }]
                },
                options: {
                  scales: {
                    y: {
                      beginAtZero: true
                    }
                  }
                }
              });
        </script>





</body>
</html>