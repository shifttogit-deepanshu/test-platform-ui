<?php


 		$answer1 = $_POST["question-1-answers"];
 		$answer2 = $_POST['question-2-answers'];
        $answer3 = $_POST['question-3-answers'];
        $answer4 = $_POST['question-4-answers'];
        $answer5 = $_POST['question-5-answers'];
        $answer6 = $_POST['question-6-answers'];
        $answer7 = $_POST['question-7-answers'];
        $answer8 = $_POST['question-8-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");




mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE qid=1");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE qid=2");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE qid=3");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE qid=4");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE qid=5");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE qid=6");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE qid=7");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE qid=8");

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
