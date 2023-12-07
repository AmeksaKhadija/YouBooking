<nav class="navbar navbar-dark ">
  <div class="container-fluid">
    <a class="navbar-brand fw-bold" href="#"><span class="navbar-logo">You</span>booking</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
      <div class="offcanvas-header">
      <a class="navbar-brand fw-bold" href="#"><span class="navbar-logo">You</span>booking</a>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Home</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              More
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fw-bold text-light" href="#">Contact us</a></li>
              <li><a class="dropdown-item fw-bold text-light" href="#">FAQs</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item fw-bold text-light" href="#">Report problem</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button type="button" class="btn btn-dark">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<style>
  .navbar-logo{
    color: rgba(225, 28, 189, 0.4667);
  }
  .navbar{
    background-color: rgba(27, 51, 88, 1);
  }
  .offcanvas-body{
    background-color:rgba(27, 51, 88, 1);
  }
  .offcanvas-header{
    background-color: rgba(27, 51, 88, 1);
  }
  .dropdown-menu{
    background-color:rgba(67, 81, 117, 1) !important;
  }
  
</style>