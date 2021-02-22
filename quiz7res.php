<?php


 		$answer1 = $_POST["question-41-answers"];
 		$answer2 = $_POST['question-42-answers'];
        $answer3 = $_POST['question-43-answers'];
        $answer4 = $_POST['question-44-answers'];
        $answer5 = $_POST['question-45-answers'];
        $answer6 = $_POST['question-46-answers'];


   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE qid=41");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE qid=42");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE qid=43");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE qid=44");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE qid=45");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE qid=46");


    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz8.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
