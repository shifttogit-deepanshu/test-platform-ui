<?php


 		$answer1 = $_POST["question-29-answers"];
 		$answer2 = $_POST['question-30-answers'];
        $answer3 = $_POST['question-31-answers'];
        $answer4 = $_POST['question-32-answers'];
        $answer5 = $_POST['question-33-answers'];
        $answer6 = $_POST['question-34-answers'];


   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE qid=29");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE qid=30");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE qid=31");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE qid=32");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE qid=33");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE qid=34");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz6.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
