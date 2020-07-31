<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "mychat";
$conn = mysqli_connect($servername, $username, $password, $database);

?>


<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <title>Sign up</title>
</head>
<body>

  <?php
  include '_nav.php';

  ?>

  <h1 style="margin:20px">Sign up to my chat</h1>
  <form action="Signup.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address *</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password *</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      <small id="emailHelp" class="form-text text-muted">Password must contain 8 characters containing upper case letters, lowercase letters and symbols for safety purpose</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password *</label>
      <input type="password" class="form-control" id="exampleInputPassword1" name="cpassword">
    </div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
  </form>
  <?php


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_name = $_POST['username'];
    $pass_word = $_POST['password'];
    $cpass_word = $_POST['cpassword'];
    $sql = "SELECT *FROM `signup` WHERE `username`='$user_name'";
    $result = mysqli_query($conn, $sql);
    $exist = mysqli_num_rows($result);
    
  if (empty($user_name)) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> Username cannot be empty
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  
  } elseif (empty($pass_word)) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong>Password must contain 8 characters , lowercase, uppercase letters and symbols
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  } elseif ($exist > 0) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!</strong> Account already exists
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';

  } elseif ($pass_word != $cpass_word) {
    echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Error!</strong>Password doesnot match
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  } else {
    $sql = "INSERT INTO `signup` (`username`, `password`, `date`)
VALUES ('$user_name', '$pass_word', 'getdate()')";
    $result = mysqli_query($conn, $sql);
  }



  }


  ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>