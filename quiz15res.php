<?php


 		
 		$answer2 = $_POST['question-112-answers'];
        $answer3 = $_POST['question-113-answers'];
        $answer4 = $_POST['question-114-answers'];
        $answer5 = $_POST['question-115-answers'];
        $answer6 = $_POST['question-116-answers'];
        $answer7 = $_POST['question-117-answers'];
        $answer8 = $_POST['question-118-answers'];
        $answer9 = $_POST["question-119-answers"];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");






mysqli_query($connection, "UPDATE $username SET response='$answer2' WHERE qid=112");
mysqli_query($connection, "UPDATE $username SET response='$answer3' WHERE qid=113");
mysqli_query($connection, "UPDATE $username SET response='$answer4' WHERE qid=114");
mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE qid=115");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE qid=116");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE qid=117");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE qid=118");
mysqli_query($connection, "UPDATE $username SET response='$answer9' WHERE qid=119");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz16.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
