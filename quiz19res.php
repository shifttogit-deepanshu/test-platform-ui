<?php

        $answer9 = $_POST["question-139-answers"];
        $answer10 = $_POST['question-140-answers'];
 		$answer1 = $_POST["question-141-answers"];
 		$answer2 = $_POST['question-142-answers'];
        $answer3 = $_POST['question-143-answers'];
        $answer4 = $_POST['question-144-answers'];
        $answer5 = $_POST['question-145-answers'];
        $answer6 = $_POST['question-146-answers'];
        $answer7 = $_POST['question-147-answers'];
        $answer8 = $_POST['question-148-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");




mysqli_query($connection, "UPDATE $username SET response='$answer9' WHERE question=139");
mysqli_query($connection, "UPDATE $username SET response='$answer10' WHERE question=140");
mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=141");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=142");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=143");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=144");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=145");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=146");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=147");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE question=148");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=exit.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
