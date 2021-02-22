<?php

session_start();

$username = $_SESSION['login_user'];

require("connect.php");


mysqli_query($connection, "UPDATE student_auth SET track=1 WHERE username='$username'") or die ("something went wrong with track");

$total = 0;
for($i=1;$i<=148;$i++){
        $query = mysqli_query($connection,"SELECT * FROM $username WHERE qid='$i'");
        $assoc = mysqli_fetch_assoc($query);
    if($i==6||$i== 7||$i== 8||$i== 41||$i== 42||$i== 43||$i== 74||$i== 80||$i== 81||$i== 82||$i==101||$i== 102||$i== 103||$i== 104||$i== 105||$i== 106){
        
        if($assoc['response']=="E"){
            $score=1;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else if($assoc['response']=="D"){
            $score=2;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else if($assoc['response']=="C"){
            $score=3;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else if($assoc['response']=="B"){
            $score=4;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else if($assoc['response']=="A"){
            $score=5;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else {
            mysqli_query($connection, "UPDATE $username SET score=0 WHERE qid='$i'") or die ("something went wrong with track");
        }
    }
    else{
        if($assoc['response']=="A"){
            $score=1;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else if($assoc['response']=="B"){
            $score=2;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else if($assoc['response']=="C"){
            $score=3;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else if($assoc['response']=="D"){
            $score=4;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else if($assoc['response']=="E"){
            $score=5;
            $total = $total + $score;
            mysqli_query($connection, "UPDATE $username SET score='$score' WHERE qid='$i'") or die ("something went wrong with track");
        }
        else {
            mysqli_query($connection, "UPDATE $username SET score=0 WHERE qid='$i'") or die ("something went wrong with track");
        }
    }
}
echo "your have successfully completed the test";
echo "<a href='endtest.php' style='font-size:20px;background-color: green;padding:20px;margin:200px;color:white'>VIEW SCORES</a>";


?>