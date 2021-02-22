<?php



        $answer5 = $_POST['question-135-answers'];
        $answer6 = $_POST['question-136-answers'];
        $answer7 = $_POST['question-137-answers'];
        $answer8 = $_POST['question-138-answers'];

   session_start();

        $username = $_SESSION['login_user'];
        $password = $_SESSION['login_pass'];

        echo "Username: $username";

        require("connect.php");


mysqli_query($connection, "UPDATE $username SET response='$answer5' WHERE qid=135");
mysqli_query($connection, "UPDATE $username SET response='$answer6' WHERE qid=136");
mysqli_query($connection, "UPDATE $username SET response='$answer7' WHERE qid=137");
mysqli_query($connection, "UPDATE $username SET response='$answer8' WHERE qid=138");

    	$totalScore = 0;
    

echo "<!DOCTYPE html>
 <html>
 <head>
 	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
 	<title>PYSCHOMETRIC PROFILING GRADING</title>
 	<meta http-equiv=\"refresh\" content=\"0;URL=quiz19.php\" />
 </head>
 <body>
 </body>
 </html>";
 
 ?>
