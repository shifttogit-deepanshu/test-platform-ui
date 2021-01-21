<?php


 		$answer1 = $_POST["question-101-answers"];
 		$answer2 = $_POST['question-102-answers'];
        $answer3 = $_POST['question-103-answers'];
        $answer4 = $_POST['question-104-answers'];
        $answer5 = $_POST['question-105-answers'];
        $answer6 = $_POST['question-106-answers'];
        $answer7 = $_POST['question-107-answers'];
        $answer8 = $_POST['question-108-answers'];
        $answer6 = $_POST['question-109-answers'];
        $answer7 = $_POST['question-110-answers'];
        $answer8 = $_POST['question-111-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=101");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=102");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=103");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=104");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=105");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=106");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=107");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE question=108");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=109");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=110");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE question=111");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz15.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
