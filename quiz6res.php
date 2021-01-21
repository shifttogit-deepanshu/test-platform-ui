<?php


 		$answer1 = $_POST["question-35-answers"];
 		$answer2 = $_POST['question-36-answers'];
        $answer3 = $_POST['question-37-answers'];
        $answer4 = $_POST['question-38-answers'];
        $answer5 = $_POST['question-39-answers'];
        $answer6 = $_POST['question-40-answers'];


   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=35");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=36");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=37");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=38");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=39");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=40");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz7.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
