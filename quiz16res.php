<?php

        $answer0 = $_POST['question-120-answers'];
 		$answer1 = $_POST["question-121-answers"];
 		$answer2 = $_POST['question-122-answers'];
        $answer3 = $_POST['question-123-answers'];
        $answer4 = $_POST['question-124-answers'];
        $answer5 = $_POST['question-125-answers'];
        $answer6 = $_POST['question-126-answers'];
        $answer7 = $_POST['question-127-answers'];


   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");




mysqli_query($connection, "UPDATE $username SET response='$answer0' WHERE question=120");
mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=121");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=122");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=123");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=124");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=125");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=126");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=127");


    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz17.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
