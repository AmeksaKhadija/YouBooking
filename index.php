<?php
include('pages/php/scripts.php');
    $sql = "SELECT * FROM hotel";
    $hotels = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Youbooking</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Core theme CSS (includes Bootstrap)-->
    <link rel="stylesheet" href="/pages/css/style.css">
    <link rel="stylesheet" href="/pages/css/stylehome.css">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#!">Youbooking</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Shop</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#!">All Products</a></li>
                            <li>
                                <hr class="dropdown-divider" />
                            </li>
                            <li><a class="dropdown-item" href="#!">Popular Items</a></li>
                            <li><a class="dropdown-item" href="#!">New Arrivals</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <a href="signin.php" class="btn btn-outline-success  me-2" type="submit">login</a>
                    <a href="signup.php" class="btn btn-success" type="submit">Register</a>
                    <a href="pages/reservations.php" class="btn btn-outline-success  me-2" type="submit">my reservations</a>
                </form>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">Book Hotels Easily</h1>
                <p class="lead fw-normal text-white-50 mb-0">With Youbooking !</p>
            </div>
        </div>
    </header>
    <!-- Section-->
    <section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
            <form action="php/scripts.php" method="GET" class="career-form mb-60">
                <div class="row">
                    <div class="col-md-6 col-lg-3 my-3">
                        <div class="input-group position-relative">
                            <input type="text" class="form-control" name="search" placeholder="Enter Your Keywords" id="keywords">
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 my-3">
                        <button type="submit" class="btn btn-lg btn-block btn-light btn-custom" id="contact-submit">
                            Search
                        </button>
                    </div>
                </div>
            </form>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php
                    while ($row = mysqli_fetch_assoc($hotels)) {
                    echo "
                            <div class='col mb-5'>
                                <div class='card h-100'>
                                    <!-- Sale badge-->
                                    <div class='badge bg-dark text-white position-absolute' style='top: 0.5rem; right: 0.5rem'>Sale</div>
                                    <!-- Product image-->
                                    <img class='card-img-top' src='https://imgs.search.brave.com/tvuYS1ojA168YBGw_syCk7K-35VJqfrIibBdFS7gZc8/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5pc3RvY2twaG90/by5jb20vaWQvODQz/ODIzNjU2L3Bob3Rv/L2hvdGVsLXJvb20u/anBnP3M9NjEyeDYx/MiZ3PTAmaz0yMCZj/PTgtWk5BNTJlNUds/UHV1UVBYcVpSZ3NU/TzlXUlp3WmdGdERv/dHlDNkNHSFk9' alt='...' />
                                    <!-- Product details-->
                                    <div class='card-body p-4'>
                                        <div class='text-center'>
                                            <!-- Product name-->
                                            <h5 class='fw-bolder'>$row[name]</h5>
                                            <p class='fw-bolder'>$row[location]</p>
                                            <p class='fw-bolder'>$row[contact_number]</p>
                                            <p class='fw-bolder'>$row[amenities]</p>
                                            <!-- Product reviews-->
                                            <div class='d-flex justify-content-center small text-warning mb-2'>
                                                <div class='bi-star-fill'></div>
                                                <div class='bi-star-fill'></div>
                                                <div class='bi-star-fill'></div>
                                                <div class='bi-star-fill'></div>
                                                <div class='bi-star-fill'></div>
                                            </div>
                                            <!-- Product price-->
                                            <span class='text-muted text-decoration-line-through'>$20.00</span>
                                            $18.00
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
                                        <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='pages/booking.php?=$row[hotel_id]'>Add to cart</a></div>
                                    </div>
                                </div>
                            </div>
                    ";
                }
                ?>
            </div>
        </div>
    </section>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Youbooking 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>