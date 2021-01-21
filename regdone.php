<?php


$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$schoolname=$_POST['schoolname'];
$class=$_POST['class'];
$sec=$_POST['sec'];


$username = $firstname.$mobile;

require("connect.php");

$query = mysqli_query($connection, "select * from student_auth where mobile='$mobile' AND username='$username'");
$assoc = mysqli_fetch_assoc($query);

$rows = mysqli_num_rows($query);
if ($rows == 0) {


$query = mysqli_query($connection, "INSERT INTO student_auth(firstname,lastname,email,mobile,schoolname,password,username,gender,age,class,sec,track) VALUES ('$firstname','$lastname','$email','$mobile','$schoolname','$password','$username','$gender','$age','$class','$sec',0)");

echo "<h1>You are registered successfully</h1>";

echo "<h2>your username is $username</h2>";

echo "<a href='index.php' style='font-size:20px;background-color: green;padding:20px;margin:200px;color:white'>DONE</a>";




$responsetablequery = mysqli_query($connection,"CREATE TABLE $username (id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,question varchar(10),mm varchar(10),response varchar(10))") or die("cant create response table");


for($i=1;$i<=148;$i++){
   mysqli_query($connection,"INSERT INTO $username(question,mm,response) VALUES ('$i',5,0)");
}


}
else {
	echo "A user with this name and mobile/registration number already exist.Proceed to login your username is <b>$username<b>";
	echo "<a href='index.php' style='font-size:20px;background-color: green;padding:20px;margin:200px;color:white'>LOGIN</a>";
}