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
		<form action="quiz7res.php" method="POST" id="mcq1">
            <ol start="41">
                <!-- Tolerance for ambiguity skills Q41 to Q43 -->
                <li>
                    <!-- Negative Question -->
                    <h3>I make goals and plans and stick to them.</h3>
                    <div>
                        <input type="radio" name="question-41-answers" id="question-41-answers-A" value="A" />
                        <label for="question-41-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-41-answers" id="question-41-answers-B" value="B" />
                        <label for="question-41-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-41-answers" id="question-41-answers-C" value="C" />
                        <label for="question-41-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-41-answers" id="question-41-answers-D" value="D" />
                        <label for="question-41-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-41-answers" id="question-41-answers-E" value="E" />
                        <label for="question-41-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <!-- Negative Question -->
                    <h3>I want to have a proper schedule for the day and won't like deviations in it.</h3>
                    
                    <div>
                        <input type="radio" name="question-42-answers" id="question-42-answers-A" value="A" />
                        <label for="question-42-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-42-answers" id="question-42-answers-B" value="B" />
                        <label for="question-42-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-42-answers" id="question-42-answers-C" value="C" />
                        <label for="question-42-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-42-answers" id="question-42-answers-D" value="D" />
                        <label for="question-42-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-42-answers" id="question-42-answers-E" value="E" />
                        <label for="question-42-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <!-- Negative Question -->
                
                    <h3>Unplanned things and situations irritate me.</h3>
                    
                    <div>
                        <input type="radio" name="question-43-answers" id="question-43-answers-A" value="A" />
                        <label for="question-43-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-43-answers" id="question-43-answers-B" value="B" />
                        <label for="question-43-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-43-answers" id="question-43-answers-C" value="C" />
                        <label for="question-43-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-43-answers" id="question-43-answers-D" value="D" />
                        <label for="question-43-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-43-answers" id="question-43-answers-E" value="E" />
                        <label for="question-43-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Tolerance for ambiguity skills ends here -->

                <!-- EQ Resilience skills begin here -->
                
                <li>
                
                    <h3>I recover quickly after facing difficult times.</h3>
                    
                    <div>
                        <input type="radio" name="question-44-answers" id="question-44-answers-A" value="A" />
                        <label for="question-44-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-44-answers" id="question-44-answers-B" value="B" />
                        <label for="question-44-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-44-answers" id="question-44-answers-C" value="C" />
                        <label for="question-44-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-44-answers" id="question-44-answers-D" value="D" />
                        <label for="question-44-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-44-answers" id="question-44-answers-E" value="E" />
                        <label for="question-44-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>In difficult times, I concentrate on the positive side of the situation.</h3>
                    
                    <div>
                        <input type="radio" name="question-45-answers" id="question-45-answers-A" value="A" />
                        <label for="question-45-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-45-answers" id="question-45-answers-B" value="B" />
                        <label for="question-45-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-45-answers" id="question-45-answers-C" value="C" />
                        <label for="question-45-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-45-answers" id="question-45-answers-D" value="D" />
                        <label for="question-45-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-45-answers" id="question-45-answers-E" value="E" />
                        <label for="question-45-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I tend to return to feeling normal slef quickly when odds turn against me.</h3>
                    
                    <div>
                        <input type="radio" name="question-46-answers" id="question-46-answers-A" value="A" />
                        <label for="question-46-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-46-answers" id="question-46-answers-B" value="B" />
                        <label for="question-46-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-46-answers" id="question-46-answers-C" value="C" />
                        <label for="question-46-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-46-answers" id="question-46-answers-D" value="D" />
                        <label for="question-46-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-46-answers" id="question-46-answers-E" value="E" />
                        <label for="question-46-answers-E">E) Strongly disagree</label>
                    </div>
                </li>
                <!-- EQ Resilience Section ends here -->
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