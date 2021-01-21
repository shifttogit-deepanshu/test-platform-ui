<?php


 		$answer1 = $_POST["question-47-answers"];
 		$answer2 = $_POST['question-48-answers'];
        $answer3 = $_POST['question-49-answers'];
        $answer4 = $_POST['question-50-answers'];
        $answer5 = $_POST['question-51-answers'];
        $answer6 = $_POST['question-52-answers'];
        $answer7 = $_POST['question-53-answers'];
        $answer8 = $_POST['question-54-answers'];
        $answer9 = $_POST['question-55-answers'];
        $answer10 = $_POST['question-56-answers'];
        $answer11 = $_POST['question-57-answers'];
        $answer12 = $_POST['question-58-answers'];
        $answer13 = $_POST['question-59-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");





mysqli_query($connection, "UPDATE $username SET response='$answer1' WHERE question=47");
mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE question=48");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE question=49");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE question=50");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE question=51");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE question=52");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE question=53");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE question=54");
mysqli_query($connection, "UPDATE $username SET response='$answer9' WHERE question=55");
mysqli_query($connection, "UPDATE $username SET response='$answer10' WHERE question=56");
mysqli_query($connection, "UPDATE $username SET response='$answer11' WHERE question=57");
mysqli_query($connection, "UPDATE $username SET response='$answer12' WHERE question=58");
mysqli_query($connection, "UPDATE $username SET response='$answer13' WHERE question=59");

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
