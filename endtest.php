<?php 

session_start();

$username = $_SESSION['login_user'];

echo "LOADING SCORES....." ;


header("Location: score3.php?user=".$username); // Redirecting To Home Page

?>