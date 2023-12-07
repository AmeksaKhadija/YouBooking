<?php
include('PHP/scripts.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Reservations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Bootstrap Static Header -->
<div style="background: url(https://bootstrapious.com/i/snippets/sn-static-header/background.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-4 font-weight-bold">My Reservations</h1>
        <p class="font-italic mb-0">All your reservations in one place !</p>
        <a href="#sect" role="button" class="btn btn-primary px-5">See All Reservations</a>
    </div>
</div>

<!-- For Demo Purpose -->
    <div class="container py-5">
        <h2 id="sect" class="h3 font-weight-bold">My Reservations</h2>
    </div>
    <div class="container">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <div class="filter-result">
              <div class="job-box d-md-flex align-items-center justify-content-between mb-4">
                <div class="job-left my-4 d-md-flex align-items-center flex-wrap">
                  <div class="img-holder me-md-4 mb-md-0 mb-4 mx-auto mx-md-0 d-md-none d-lg-flex">
                    FD
                  </div>
                  <div class="job-content">
                    <h5 class="text-center text-md-start">Hotel tayebi skhirat</h5>
                    <ul class="d-md-flex flex-wrap text-capitalize ff-open-sans">
                      <li class="me-md-4">
                        <i class="bi bi-geo-alt-fill me-2"></i> Los Angeles
                      </li>
                      <li class="me-md-4">
                        <i class="bi bi-cash me-2"></i> 20dh/lila
                      </li>
                      <li class="me-md-4">
                        <i class="bi bi-clock me-2"></i> 1 person
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="job-right my-4 flex-shrink-0">
                  <a href="#" class="btn d-block w-100 d-sm-inline-block btn-success">Modify</a>
                </div>
                <div class="job-right my-4 flex-shrink-0">
                    <a href="/PHP/scripts.php?delete_contact=<?= $row['id'] ?>" class="btn d-block w-100 d-sm-inline-block btn-danger">Delete</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>