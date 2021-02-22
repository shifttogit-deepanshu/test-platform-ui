<?php


 		$answer1 = $_POST["question-88-answers"];
 		$answer2 = $_POST['question-89-answers'];
        $answer3 = $_POST['question-90-answers'];
        $answer4 = $_POST['question-91-answers'];
        $answer5 = $_POST['question-92-answers'];
        $answer6 = $_POST['question-93-answers'];
        $answer7 = $_POST['question-94-answers'];
        $answer8 = $_POST['question-95-answers'];
        $answer9 = $_POST['question-96-answers'];
        $answer10 = $_POST['question-97-answers'];
        $answer11 = $_POST['question-98-answers'];
        $answer12 = $_POST['question-99-answers'];
        $answer13 = $_POST['question-100-answers'];


   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE qid=88");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE qid=89");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE qid=90");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE qid=91");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE qid=92");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE qid=93");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE qid=94");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE qid=95");
mysqli_query($connection, "UPDATE $username SET response='$answer9' WHERE qid=96");
mysqli_query($connection, "UPDATE $username SET response='$answer10' WHERE qid=97");
mysqli_query($connection, "UPDATE $username SET response='$answer11' WHERE qid=98");
mysqli_query($connection, "UPDATE $username SET response='$answer12' WHERE qid=99");
mysqli_query($connection, "UPDATE $username SET response='$answer13' WHERE qid=100");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz14.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
