<?php
session_start();

include '_nav.php';
if (isset( $_SESSION['loggedin'])) {
  echo '<br>no error';
 
}
else{
  echo '<br>session error';
}

echo "<br>hello home";
echo '<br>want to log out_
<br>';
echo '<a href="logout.php">log out</a>'
?>
