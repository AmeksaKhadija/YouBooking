<?php
    session_start();

if (isset($_POST['email']) && isset($_POST['password'])) {
  include('config/server.php');

    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con, $query);

    if ( mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['pass_word'];

        if (password_verify($password, $hashedPassword)) {
          $_SESSION['email'] = $email;
            header('location: pages/dashboard.php');
            
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "email not found";
    }

    mysqli_close($con);
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign in</title>
    <link rel="stylesheet" href="Assets/CSS/index.css">

</head>


<style>

  body
  {
    background-image:url('Assets/IMAGES/couvert.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    }

  .holder
  {
    width: 50%;
    background-color: #fff;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 5px;
  }

.container_holder
{
  width: 100%;
  height: 100%;
}

.card{
  margin: auto;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 50vh;
    padding: 0 11rem;
}

.form-control {
    background-color: #f8f9fa;
    padding: 20px;
    margin-bottom: 1.2rem;
    border-radius: 1.5rem;
    width: 17vw;
}
</style>
<body >

<div class="container holder">
  <div class="row justify-content-center container_holder">
      <div class="col-md-5">
       <div class="card m-0">
            <h1 class="card-title fs-2 text-black">Bienvenue chez nous !</h1>
         <div class="card-body py-md-4">
         <form  method="post">
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="d-flex check">
              <p for="checkbox" class="me-5">Don't have an account<a href="signup.php">Sign Up</a></p>
            </div>
            <div class="d-flex flex-row align-items-center"><br>
              <button type="submit" class="btn btn-primary">Sign Up</button>
            </div>
          </form>
         </div>
       </div>
    </div>
  </div>
</div>
</body>
</html>
