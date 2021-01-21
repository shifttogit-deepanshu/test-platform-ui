<?php

require("connect.php");


session_start();



if (isset($_POST['submit'])) {

if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Username or Password cannot be empty";
}
else
{

$username=$_POST['username'];
$password=$_POST['password'];

echo $username;

echo $password;



$query = mysqli_query($connection, "select * from student_auth where password='$password' AND username='$username'");
$assoc = mysqli_fetch_assoc($query);

$rows = mysqli_num_rows($query);
if ($rows == 1) {

$_SESSION['login_user']=$username; 
$_SESSION['login_pass']=$password;
$_SESSION['login_email']=$assoc['email'];

if($assoc['track']==0){

header("location: quiz1.php"); 
}
else{
	$error = "you have already completed the test";
}
} else {
$error = "Username or Password is invalid or multiple users exits with this username. Please register again with different id";
}
mysqli_close($connection); 
}
}
?>