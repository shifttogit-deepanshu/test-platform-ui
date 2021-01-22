<?php


 		$answer1 = $_POST["question-128-answers"];
 		$answer2 = $_POST['question-129-answers'];
        $answer3 = $_POST['question-130-answers'];
        $answer4 = $_POST['question-131-answers'];
        $answer5 = $_POST['question-132-answers'];
        $answer6 = $_POST['question-133-answers'];
        $answer7 = $_POST['question-134-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=128");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=129");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=130");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=131");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=132");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=133");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=134");


    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz18.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
