<?php


 	     $answer1 = $_POST["question-25-answers"];
 	     $answer2 = $_POST['question-26-answers'];
        $answer3 = $_POST['question-27-answers'];
        $answer4 = $_POST['question-28-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE qid=25");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE qid=26");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE qid=27");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE qid=28");


    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz5.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
