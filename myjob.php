<?php 
//echo "umesh dutta";
//echo "<br>";
$con = mysqli_connect("localhost:3307","root","","class");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
//echo "connection established successfully"."<br>";
//echo "This message is printed from score1.php file"."<br>";
// use select query to read the data from the table, table name is Sheet1
$sql = "SELECT * FROM $username";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) > 0) 
{
  // output data of each row
  	//while($row = mysqli_fetch_assoc($result))
  	$var1 = $var2 =$score = $tscore = 0;
  	for($x=1;$x<=28;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
	//here you need to calculate the average core per dimension.
	//dimension 1 Thinking and problem solving skills Q1 to Q28
	//echo $score."<br>";
	//echo $tscore."<br>";
	$dim1Score = ($score/$tscore)*100;
	//echo "Dimension1: Thinking and Problem Solving Skills Score is: ".$dim1Score." %"."<br>";

	//calculation for dimension 2
	$var1 = $var2 =$score = $tscore = 0;
	for($x=29;$x<=59;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim2Score = ($score/$tscore)*100;
	//echo "Dimension2: Personality Skills Score is: ".$dim2Score." %"."<br>";

	//calculation for dimension 3
	$var1 = $var2 =$score = $tscore = 0;
	for($x=60;$x<=70;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim3Score = ($score/$tscore)*100;
	//echo "Dimension3: Communication Skills Score is: ".$dim3Score." %"."<br>";

	//calculation for dimension 4
	$var1 = $var2 =$score = $tscore = 0;
	for($x=71;$x<=87;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim4Score = ($score/$tscore)*100;
	//echo "Dimension4: Social Skills Score is: ".$dim4Score." %"."<br>";

	//calculation for dimension 5
	$var1 = $var2 =$score = $tscore = 0;
	for($x=88;$x<=111;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim5Score = ($score/$tscore)*100;
	//echo "Dimension5: Leadership Skills Score is: ".$dim5Score." %"."<br>";

	//calculation for dimension 6
	$var1 = $var2 =$score = $tscore = 0;
	for($x=112;$x<=148;$x++)
  	{
  		$row = mysqli_fetch_assoc($result);
  		//echo "score " . $row["score"]. " tScore " . $row["tscore"]. "<br>";
  		$var1 = $row["score"];
  		$score = $score + $var1;
  		$var2 = $row["tscore"];
  		$tscore = $tscore + $var2;
  	} 
  	$dim6Score = ($score/$tscore)*100;
	//echo "Dimension6: Technical Skills Score is: ".$dim6Score." %"."<br>";

  //here make an array containing the score per dimension denoted by x
  $z = array($dim1Score,$dim2Score,$dim3Score,$dim4Score,$dim5Score,$dim6Score);
  mysqli_close($con);
  //echo"database closed";

} 
else 
{
  echo "0 results";
}

$con = mysqli_connect("localhost:3307","root","","test");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
$i=$j=0;

//fetch the entries from Sheet1 in test database
//echo"new connection established";
$sql = "SELECT * FROM sheet1";
$result = mysqli_query($con, $sql);
mysqli_close($con);
//make connection with result database
$con = mysqli_connect("localhost:3307","root","","result");
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}
//echo "connection with result database made successfully";

if (mysqli_num_rows($result) > 0) 
{
  for($i=1;$i<=211;$i++)
  {
    $GrandTotal = 0;
    $row = mysqli_fetch_assoc($result);
    for($j=0;$j<6;$j++)
    {
      if($j==0)
      {
        $y = $row["Thinking and Problem Solving"];
      }
      if($j==1)
      {
        $y = $row["Personality"];
      }
      if($j==2)
      {
        $y = $row["Communication Skills"];
      }
      if($j==3)
      {
        $y = $row["Social Skills"];
      }
      if($j==4)
      {
        $y = $row["Leadership Skills"];
      }
      if($j==5)
      {
        $y = $row["Technical Skills"];
      }
      if($y==1)
      {
        if($z[$j]>60)
        {
          $GrandTotal = $GrandTotal + $z[$j];
        }
      }
      if($y==0.5)
      {
        if($z[$j] >= 30)
        {
          $GrandTotal = $GrandTotal + $z[$j]/2;
        } 
      }
    } // j loop ends here
  //    echo "<br>".$GrandTotal;
      //you have to put data in database here.
      $sql = "UPDATE sheet1 SET Distance=$GrandTotal WHERE sno=$i";
      $result1 = mysqli_query($con, $sql); // execute the query
    //   if (mysqli_query($con, $sql)) {
    // echo "Record updated successfully";
    // echo $GrandTotal;
    // } else {
    // echo "Error updating record: " . mysqli_error($con);
    // }
  } // i loop ends here
   
}

  else{
    echo "0 results";
  }
  
  $sql = "SELECT * FROM sheet1 ORDER BY Distance DESC";
  $result = mysqli_query($con, $sql);
    if (mysqli_query($con, $sql)) {
    //echo "Record updated successfully";
    
    } else 
    {
    echo "Error updating record: " . mysqli_error($con);
    }
    
    if (mysqli_num_rows($result) > 0) {
  // output data of each row
//   while($row = mysqli_fetch_assoc($result)) {
// echo "sno: " . $row["sno"]. "   Distance" . $row["Distance"]. " JobRole" . $row["JobRole"]. "<br>";
//   }
      echo "<h1 style=\"text-align:center\">Your Test performance shows that you are suitable for the following Domains and related Job Roles:</h1>";
      for($p=1;$p<=8;$p++)
      {
        $row = mysqli_fetch_assoc($result);
        $id = $row['sno'];
        if($id<=16)
        {
           echo "<div ><i class=\"fas fa-money-check-alt\"></i> Job Domain:Commerce and Banking & Suitable Job Role:</h1>".$row['JobRole']."</div>"; 
        }
        if($id>16 && $id<=29)
        {
           echo "<div class=\"job\"><i class=\"fas fa-database\"></i> Job Domain: Data Analytics</h1> and Reseach Based & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>29 && $id<=60)
        {
           echo "<div  class=\"job\"><i class=\"fas fa-file-medical\"></i> Job Domain: Healthcare & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>60 && $id<=81)
        {
           echo "<div  class=\"job\"><i class=\"fas fa-hotel\"></i> Job Domain: Hospitality & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>81 && $id<=89)
        {
           echo "<div  class=\"job\"><i class=\"fas fa-hotel\"></i> Job Domain: Human Resource Development & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>89 && $id<=107)
        {
           echo "<div  class=\"job\"><i class=\"fas fa-drafting-compass\"></i> Job Domain: Innovative and Design Based & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>107 && $id<=115)
        {
           echo "<div  class=\"job\"><i class=\"fas fa-tools\"></i> Job Domain: Maintenance & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>115 && $id<=141)
        {
           echo "<div  class=\"job\"><i class=\"fas fa-globe\"></i> Job Domain: Management and Administration & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>141 && $id<=169)
        {
           echo "<div  class=\"job\"><i class=\"far fa-newspaper\"></i> Job Domain: Media & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>169 && $id<=180)
        {
           echo "<div  class=\"job\"><i class=\"fas fa-shopping-cart\"></i> Job Domain: Sales Job & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
        if($id>180 && $id<=211)
        {
           echo "<div  class=\"job\"><i class=\"fas fa-microscope\"></i> Job Domain: Scientific & Suitable Job Role: ".$row['JobRole']."</div>"; 
        }
       
      }
} else {
  echo "0 results";
}
    
  
?>
