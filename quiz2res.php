<?php


 		$answer1 = $_POST["question-9-answers"];
 		$answer2 = $_POST['question-10-answers'];
        $answer3 = $_POST['question-11-answers'];
        $answer4 = $_POST['question-12-answers'];
        $answer5 = $_POST['question-13-answers'];
        $answer6 = $_POST['question-14-answers'];
        $answer7 = $_POST['question-15-answers'];
        $answer8 = $_POST['question-16-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=9");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=10");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=11");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=12");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=13");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=14");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=15");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE question=16");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz2.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
