<?php


 		$answer1 = $_POST["question-65-answers"];
 		$answer2 = $_POST['question-66-answers'];
        $answer3 = $_POST['question-67-answers'];
        $answer4 = $_POST['question-68-answers'];
        $answer5 = $_POST['question-69-answers'];
        $answer6 = $_POST['question-70-answers'];


   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=65");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=66");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=67");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=68");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=69");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=70");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz11.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
