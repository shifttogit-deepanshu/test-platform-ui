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




$responsetablequery = mysqli_query($connection,"CREATE TABLE $username (
	`qno` int(3) DEFAULT NULL,
	`qid` int(3) DEFAULT NULL,
	`score` int(10) DEFAULT NULL,
	`tscore` int(10) DEFAULT NULL,
	`response` varchar(20) NOT NULL DEFAULT 0
  )") or die("cant create response table");


for($i=1;$i<=148;$i++){
   mysqli_query($connection,"INSERT INTO $username (`qno`, `qid`, `score`, `tscore`, `response`) VALUES
   (1, 1, 0, 5, 0),
   (2, 2, 0, 5, 0),
   (3, 3, 0, 5, 0),
   (4, 4, 0, 5, 0),
   (5, 5, 0, 5, 0),
   (6, 6, 0, 5, 0),
   (7, 7, 0, 5, 0),
   (8, 8, 0, 5, 0),
   (9, 9, 0, 5, 0),
   (10, 10, 0, 5, 0),
   (11, 11, 0, 5, 0),
   (12, 12, 0, 5, 0),
   (13, 13, 0, 5, 0),
   (14, 14, 0, 5, 0),
   (15, 15, 0, 5, 0),
   (16, 16, 0, 5, 0),
   (17, 17, 0, 5, 0),
   (18, 18, 0, 5, 0),
   (19, 19, 0, 5, 0),
   (20, 20, 0, 5, 0),
   (21, 21, 0, 1, 0),
   (22, 22, 0, 1, 0),
   (23, 23, 0, 1, 0),
   (24, 24, 0, 1, 0),
   (25, 25, 0, 1, 0),
   (26, 26, 0, 1, 0),
   (27, 27, 0, 1, 0),
   (28, 28, 0, 1, 0),
   (29, 29, 0, 5, 0),
   (30, 30, 0, 5, 0),
   (31, 31, 0, 5, 0),
   (32, 32, 0, 5, 0),
   (33, 33, 0, 5, 0),
   (34, 34, 0, 5, 0),
   (35, 35, 0, 5, 0),
   (36, 36, 0, 5, 0),
   (37, 37, 0, 5, 0),
   (38, 38, 0, 5, 0),
   (39, 39, 0, 5, 0),
   (40, 40, 0, 5, 0),
   (41, 41, 0, 5, 0),
   (42, 42, 0, 5, 0),
   (43, 43, 0, 5, 0),
   (44, 44, 0, 5, 0),
   (45, 45, 0, 5, 0),
   (46, 46, 0, 5, 0),
   (47, 47, 0, 5, 0),
   (48, 48, 0, 5, 0),
   (49, 49, 0, 5, 0),
   (50, 50, 0, 5, 0),
   (51, 51, 0, 5, 0),
   (52, 52, 0, 5, 0),
   (53, 53, 0, 5, 0),
   (54, 54, 0, 5, 0),
   (55, 55, 0, 5, 0),
   (56, 56, 0, 5, 0),
   (57, 57, 0, 5, 0),
   (58, 58, 0, 5, 0),
   (59, 59, 0, 5, 0),
   (60, 60, 0, 5, 0),
   (61, 61, 0, 5, 0),
   (62, 62, 0, 5, 0),
   (63, 63, 0, 5, 0),
   (64, 64, 0, 5, 0),
   (65, 65, 0, 5, 0),
   (66, 66, 0, 5, 0),
   (67, 67, 0, 5, 0),
   (68, 68, 0, 5, 0),
   (69, 69, 0, 5, 0),
   (70, 70, 0, 5, 0),
   (71, 71, 0, 5, 0),
   (72, 72, 0, 5, 0),
   (73, 73, 0, 5, 0),
   (74, 74, 0, 5, 0),
   (75, 75, 0, 5, 0),
   (76, 76, 0, 5, 0),
   (77, 77, 0, 5, 0),
   (78, 78, 0, 5, 0),
   (79, 79, 0, 5, 0),
   (80, 80, 0, 5, 0),
   (81, 81, 0, 5, 0),
   (82, 82, 0, 5, 0),
   (83, 83, 0, 5, 0),
   (84, 84, 0, 5, 0),
   (85, 85, 0, 5, 0),
   (86, 86, 0, 5, 0),
   (87, 87, 0, 5, 0),
   (88, 88, 0, 5, 0),
   (89, 89, 0, 5, 0),
   (90, 90, 0, 5, 0),
   (91, 91, 0, 5, 0),
   (92, 92, 0, 5, 0),
   (93, 93, 0, 5, 0),
   (94, 94, 0, 5, 0),
   (95, 95, 0, 5, 0),
   (96, 96, 0, 5, 0),
   (97, 97, 0, 5, 0),
   (98, 98, 0, 5, 0),
   (99, 99, 0, 5, 0),
   (100, 100, 0, 5, 0),
   (101, 101, 0, 5, 0),
   (102, 102, 0, 5, 0),
   (103, 103, 0, 5, 0),
   (104, 104, 0, 5, 0),
   (105, 105, 0, 5, 0),
   (106, 106, 0, 5, 0),
   (107, 107, 0, 5, 0),
   (108, 108, 0, 5, 0),
   (109, 109, 0, 5, 0),
   (110, 110, 0, 5, 0),
   (111, 111, 0, 1, 0),
   (112, 112, 0, 5, 0),
   (113, 113, 0, 5, 0),
   (114, 114, 0, 5, 0),
   (115, 115, 0, 5, 0),
   (116, 116, 0, 5, 0),
   (117, 117, 0, 5, 0),
   (118, 118, 0, 5, 0),
   (119, 119, 0, 5, 0),
   (120, 120, 0, 5, 0),
   (121, 121, 0, 5, 0),
   (122, 122, 0, 5, 0),
   (123, 123, 0, 5, 0),
   (124, 124, 0, 5, 0),
   (125, 125, 0, 5, 0),
   (126, 126, 0, 5, 0),
   (127, 127, 0, 5, 0),
   (128, 128, 0, 1, 0),
   (129, 129, 0, 1, 0),
   (130, 130, 0, 1, 0),
   (131, 131, 0, 1, 0),
   (132, 132, 0, 1, 0),
   (133, 133, 0, 1, 0),
   (134, 134, 0, 1, 0),
   (135, 135, 0, 1, 0),
   (136, 136, 0, 1, 0),
   (137, 137, 0, 1, 0),
   (138, 138, 0, 1, 0),
   (139, 139, 0, 1, 0),
   (140, 140, 0, 1, 0),
   (141, 141, 0, 1, 0),
   (142, 142, 0, 1, 0),
   (143, 143, 0, 1, 0),
   (144, 144, 0, 1, 0),
   (145, 145, 0, 1, 0),
   (146, 146, 0, 1, 0),
   (147, 147, 0, 1, 0),
   (148, 148, 4, 1, 0);");
}


}
else {
	echo "A user with this name and mobile/registration number already exist.Proceed to login your username is <b>$username<b>";
	echo "<a href='index.php' style='font-size:20px;background-color: green;padding:20px;margin:200px;color:white'>LOGIN</a>";
}