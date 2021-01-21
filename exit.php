<?php

session_start();

$username = $_SESSION['login_user'];

require("connect.php");


mysqli_query($connection, "UPDATE student_auth SET track=1 WHERE username='$username'") or die ("something went wrong with track");


if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}

?>