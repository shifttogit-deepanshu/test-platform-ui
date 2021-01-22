<?php

session_start();

$username = $_SESSION['login_user'];

require("connect.php");


mysqli_query($connection, "UPDATE student_auth SET track=1 WHERE username='$username'") or die ("something went wrong with track");
$query = mysqli_query($connection,"SELECT * FROM '$username'");
$assoc = mysqli_fetch_assoc($query);

print_r($assoc);

if(session_destroy()) // Destroying All Sessions
{
header("Location: index.php"); // Redirecting To Home Page
}

?>