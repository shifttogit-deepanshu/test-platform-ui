<?php


 		$answer1 = $_POST["question-17-answers"];
 		$answer2 = $_POST['question-18-answers'];
        $answer3 = $_POST['question-19-answers'];
        $answer4 = $_POST['question-20-answers'];
        $answer5 = $_POST['question-21-answers'];
        $answer6 = $_POST['question-22-answers'];
        $answer7 = $_POST['question-23-answers'];
        $answer8 = $_POST['question-24-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=17");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=18");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=19");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=20");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=21");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=22");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=23");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE question=24");

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
