<?php
session_start();


session_unset();

session_destroy();

/*header('Login.php');
exit;
*/
    echo "<script>window.location.href='Login.php';</script>";
    exit;
?>