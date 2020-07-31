<?php

if (isset( $_SESSION['loggedin'])) {
  $loggedin=true;

}
echo '<html><link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <h1 class="navbar-brand" style="color:white ">MY chats</h1>';
   if(!$loggedin){
echo '<a class="navbar-brand" href="login.php" style="color:white">Log in</a>
<a class="navbar-brand" href="Signup.php" style="color:white">Sign up</a>';}

if ($loggedin) {
  

 echo '<a class="navbar-brand" href="logout.php" style="color:white">log out</a>';
}
  echo '</nav></html>';

?>
    
