<?php
include('config/server.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $phone = $_POST['number'];
    $_SESSION['name'] = $name;

    if(isset($_POST['checkbox']))
    {

      $sql_box ="INSERT INTO users (name, pass_word, email, phone_number) VALUES ('$name', '$password', '$email' , '$phone')";
      mysqli_query($con,$sql_box);
      header("location: signin.php");
    }else
    {
      $sql = "INSERT INTO users (name, pass_word, email, phone_number) VALUES ('$name', '$password', '$email' , '$phone')";
      $result = mysqli_query($con,$sql);

      if ($result){
          echo "Inscription réussie !";
      } else {
          echo "Erreur : " . $sql . "<br>";
      }
      header('location:signin.php');
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up</title>
    <link rel="stylesheet" href="Assets/CSS/index.css">

</head>


<style>

  body
  {
    background-image:url('Assets/IMAGES/couvert.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    height: 100vh;
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
              <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
            </div>
            <div class="form-group">
              <input type="number" class="form-control" id="number" name="number" placeholder="number phone" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
            </div>
            <div class="d-flex check">
              <input type="checkbox"  id="checkbox" name="checkbox">
              <label for="checkbox">i want to propeitair</label>
            </div>
            <div class="d-flex check">
              <p for="checkbox">Already Have An Account <a href="signin.php">sign in</a></p>
            </div>
            <div class="d-flex flex-row align-items-center"><br>
              <button type="submit" class="btn btn-primary">Create Account</button>
            </div>
          </form>
         </div>
       </div>
    </div>
  </div>
</div>
</body>
</html>