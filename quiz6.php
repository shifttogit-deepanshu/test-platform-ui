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
		<form action="quiz6res.php" method="POST" id="mcq1">
            <ol start="35">
                <!-- Locus of Control skills Q35 to Q40 -->
                <li>
                    <h3>I am responsible for all good and bad situations of my life.</h3>
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-A" value="A" />
                        <label for="question-35-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-B" value="B" />
                        <label for="question-35-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-C" value="C" />
                        <label for="question-35-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-D" value="D" />
                        <label for="question-35-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-35-answers" id="question-35-answers-E" value="E" />
                        <label for="question-35-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>My skills and abilities are the best predictors of my success.</h3>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-A" value="A" />
                        <label for="question-36-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-B" value="B" />
                        <label for="question-36-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-C" value="C" />
                        <label for="question-36-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-D" value="D" />
                        <label for="question-36-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-36-answers" id="question-36-answers-E" value="E" />
                        <label for="question-36-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>In difficult times, I prefer to rely on my own abilities and resources rather than on other people.</h3>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-A" value="A" />
                        <label for="question-37-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-B" value="B" />
                        <label for="question-37-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-C" value="C" />
                        <label for="question-37-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-D" value="D" />
                        <label for="question-37-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-37-answers" id="question-37-answers-E" value="E" />
                        <label for="question-37-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Inrernal locus control skills ends here -->

                <!-- External locus control skills begin here -->
                
                <li>
                
                    <h3>Hard work does not necessarily determines one's success.</h3>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-A" value="A" />
                        <label for="question-38-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-B" value="B" />
                        <label for="question-38-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-C" value="C" />
                        <label for="question-38-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-D" value="D" />
                        <label for="question-38-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-38-answers" id="question-38-answers-E" value="E" />
                        <label for="question-38-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>My work fails due to some external factor rather than my own abilities.</h3>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-A" value="A" />
                        <label for="question-39-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-B" value="B" />
                        <label for="question-39-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-C" value="C" />
                        <label for="question-39-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-D" value="D" />
                        <label for="question-39-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-39-answers" id="question-39-answers-E" value="E" />
                        <label for="question-39-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I believe that destiny determines our lives.</h3>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-A" value="A" />
                        <label for="question-40-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-B" value="B" />
                        <label for="question-40-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-C" value="C" />
                        <label for="question-40-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-D" value="D" />
                        <label for="question-40-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-40-answers" id="question-40-answers-E" value="E" />
                        <label for="question-40-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- External locus control skills section ends here -->

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