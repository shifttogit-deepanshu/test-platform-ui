<?php


 		$answer1 = $_POST["question-60-answers"];
 		$answer2 = $_POST['question-61-answers'];
        $answer3 = $_POST['question-62-answers'];
        $answer4 = $_POST['question-63-answers'];
        $answer5 = $_POST['question-64-answers'];


   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE qid=60");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE qid=61");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE qid=62");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE qid=63");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE qid=64");


    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz10.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
