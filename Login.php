<?php

session_start();
include "_nav.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  include '_dbconnect.php';
  $usernam = $_POST['username'];
  $passwod = $_POST['password'];
  $sql = "SELECT * FROM `signup` WHERE `username`='$usernam' AND `password`='$passwod'";
  $result = mysqli_query($conn, $sql);

  $num = mysqli_num_rows($result);
  if ($num >0) {
   // session_start();
$login=true;
    echo 'logged in successfully';

    $_SESSION['loggedin'] = $login;
    $_SESSION['username'] = $usernam;
    /*echoer("location:home.php");
    exit;*/
    
    

    echo "<script>window.location.href='home.php';</script>";
    exit;

  } else {
    echo "invalid credintials";
  }
}/*else {
  echo "get method";
}*/


?>



<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Hello, world!</title>

</head>
<body>
  <h1 style="margin:15px">Log in to my chat</h1>

  <div>
    <form action="Login.php" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">

      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
      </div>
      <button type="submit" class="btn btn-primary">Log in</button>

    </form>
  </div>





  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>