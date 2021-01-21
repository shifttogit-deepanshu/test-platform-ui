<?php



        $answer3 = $_POST['question-83-answers'];
        $answer4 = $_POST['question-84-answers'];
        $answer5 = $_POST['question-85-answers'];
        $answer6 = $_POST['question-86-answers'];
        $answer7 = $_POST['question-87-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");


mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=83");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=84");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=85");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=86");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=87");


    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz13.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
