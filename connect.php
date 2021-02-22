<?php

$connection = mysqli_connect("localhost:3307", "root", "") or die("cannot connect to server");


$db = mysqli_select_db($connection,"class") or die("databse connection failed");


?>
