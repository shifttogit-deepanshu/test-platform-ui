<?php

session_start();

$username = $_SESSION['login_user'];

require("connect.php");


mysqli_query($connection, "UPDATE student_auth SET track=1 WHERE username='$username'") or die ("something went wrong with track");

$total = 0;
for($i=1;$i<=148;$i++){
        $query = mysqli_query($connection,"SELECT * FROM $username WHERE question='$i'");
        $assoc = mysqli_fetch_assoc($query);
    if($i==6||$i== 7||$i== 8||$i== 41||$i== 42||$i== 43||$i== 74||$i== 80||$i== 81||$i== 82||$i==101||$i== 102||$i== 103||$i== 104||$i== 105||$i== 106){
        
        if($assoc['response']=="E"){
            $total = $total + 1;
        }
        else if($assoc['response']=="D"){
            $total = $total + 2;
        }
        else if($assoc['response']=="C"){
            $total = $total + 3;
        }
        else if($assoc['response']=="B"){
            $total = $total + 4;
        }
        else if($assoc['response']=="A"){
            $total = $total + 5;
        }
    }
    else{
        if($assoc['response']=="A"){
            $total = $total + 1;
        }
        else if($assoc['response']=="B"){
            $total = $total + 2;
        }
        else if($assoc['response']=="C"){
            $total = $total + 3;
        }
        else if($assoc['response']=="D"){
            $total = $total + 4;
        }
        else if($assoc['response']=="E"){
            $total = $total + 5;
        }
    }
}
echo "your total was";
echo  $total;

// if(session_destroy()) // Destroying All Sessions
// {
// header("Location: index.php"); // Redirecting To Home Page
// }

?>