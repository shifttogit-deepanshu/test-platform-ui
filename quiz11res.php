<?php


 		$answer1 = $_POST["question-71-answers"];
 		$answer2 = $_POST['question-72-answers'];
        $answer3 = $_POST['question-73-answers'];
        $answer4 = $_POST['question-74-answers'];
        $answer5 = $_POST['question-75-answers'];
        $answer6 = $_POST['question-76-answers'];
        $answer7 = $_POST['question-77-answers'];
        $answer8 = $_POST['question-78-answers'];
        $answer9 = $_POST['question-79-answers'];
        $answer10 = $_POST['question-80-answers'];
        $answer11 = $_POST['question-81-answers'];
        $answer12 = $_POST['question-82-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE qid=71");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE qid=72");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE qid=73");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE qid=74");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE qid=75");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE qid=76");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE qid=77");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE qid=78");
mysqli_query($connection, "UPDATE $username SET response='$answer9' WHERE qid=79");
mysqli_query($connection, "UPDATE $username SET response='$answer10' WHERE qid=80");
mysqli_query($connection, "UPDATE $username SET response='$answer11' WHERE qid=81");
mysqli_query($connection, "UPDATE $username SET response='$answer12' WHERE qid=82");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz12.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
