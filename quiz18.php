<?php

session_start();

$username = $_SESSION['login_user'];

if(!$username){
    header("location:index.php");
}

echo "Username: $username";

?>


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>MANAV RACHNA PSYCHOMETRIC QUIZ TEST</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

	<div class="page-wrap">
        <div class="top-bar">
        <div class="container">
            <div class="header">
                <div class="logo"><image src="assets/paxcura.png"  class="logo-img" alt="paxcura logo"/></div>
                <div class="title"><h1>MANAV RACHNA PSYCHOMETRIC PROFILING TEST</h1></div>
            </div>
        </div>
        </div>

        <div class='container'>
        <div class="shadow-box">
        <div class="instructions">
        <p>General Instructions: This questionnaire measures your interests and suitability for the various jobs and determines which area of work you are most appropriate for and will perform optimally in. Each segment has a few questions and you are requested to mark the option which you feel applies to you in the best way. Please don’t take too long to answer any question. Please respond to all the questions. There are no right or wrong answer. </p>
    
        <h4>Please read each items carefully and indicate the degree to which you agree with each of the statements.
        </h4>
        </div>
		<form action="quiz18res.php" method="POST" id="mcq1">
            <ol start="135">
                <!-- Numerical Skills: Data Interpretation. -->
                <h2>Use bar diagram to solve Q135.</h2>
                <img src="./images/im1.jpg" alt="Bar Chart" width="400" height="250">
                <li>
                    <h3>In which year was the Quantity in Lakh Packs the minimum?</h3>
                    <div>
                        <input type="radio" name="question-135-answers" id="question-135-answers-A" value="A" />
                        <label for="question-135-answers-A">A) 1987 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-135-answers" id="question-135-answers-B" value="B" />
                        <label for="question-135-answers-B">B) 1883</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-135-answers" id="question-135-answers-C" value="C" />
                        <label for="question-135-answers-C">C) 1986</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-135-answers" id="question-135-answers-D" value="D" />
                        <label for="question-135-answers-D">D) 1984</label>
                    </div>    
                </li>

                <h2>Use these charts to solve Q136 & Q137.</h2>
                <img src="./images/im2.jpg" alt="pie1" width="500" height="300">
                <img src="./images/im3.jpg" alt="pie2" width="500" height="300">

                <li>
                
                    <h3>What total percentage of Indian tourist went to either USA or UK?</h3>
                    
                    <div>
                        <input type="radio" name="question-136-answers" id="question-136-answers-A" value="A" />
                        <label for="question-136-answers-A">A) 50 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-136-answers" id="question-136-answers-B" value="B" />
                        <label for="question-136-answers-B">B) 40</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-136-answers" id="question-136-answers-C" value="C" />
                        <label for="question-136-answers-C">C) 20</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-136-answers" id="question-136-answers-D" value="D" />
                        <label for="question-136-answers-D">D) 10</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>What age group of Indians form 50% of Indian Tourists?</h3>
                    
                    <div>
                        <input type="radio" name="question-137-answers" id="question-137-answers-A" value="A" />
                        <label for="question-137-answers-A">A) 40-49</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-137-answers" id="question-137-answers-B" value="B" />
                        <label for="question-4-answers-B">B) 30-39</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-137-answers" id="question-137-answers-C" value="C" />
                        <label for="question-137-answers-C">C) Above 50 years</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-137-answers" id="question-137-answers-D" value="D" />
                        <label for="question-4-answers-D">D) Below 30 years</label>
                    </div>

                    <h2>Use this table to solve Q138.</h2>

                    <img src="./images/im4.jpg" alt="table1" width="700" height="200">

                <li>
                
                    <h3>Data of how many states are shown in the Table ?</h3>
                    
                    <div>
                        <input type="radio" name="question-138-answers" id="question-138-answers-A" value="A" />
                        <label for="question-138-answers-A">A) 5 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-138-answers" id="question-138-answers-B" value="B" />
                        <label for="question-138-answers-B">B) 8 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-138-answers" id="question-138-answers-C" value="C" />
                        <label for="question-138-answers-C">C) 7</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-138-answers" id="question-138-answers-D" value="D" />
                        <label for="question-138-answers-D">D) 6</label>
                    </div>
                
                </li>

                
                
             </ol>
            <div class="btn-container">
            <input type="submit" value="Next" class="input-btn"/>
            </div>
        </form>
    </div>
    </div>
    </div>
    
    <script>
        document.querySelectorAll('li div').forEach((element)=>{
            element.addEventListener('click',()=>{
                element.querySelector('input').checked=true
                document.querySelectorAll('li div').forEach((check)=>{
                    if(check.querySelector('input').checked==true){
                        check.style.backgroundColor="rgba(1, 50, 67, 0.5)"
                        check.style.color="white"
                        check.style.fontWeight=900
                    }
                    else{
                        check.style.backgroundColor="rgba(1, 50, 67, 0.2)"
                        check.style.color="black"
                        check.style.fontWeight=300
                    }
                })
            })
            })
    </script>

</body>
</html>