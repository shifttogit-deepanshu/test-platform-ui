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
		<form action="quiz4.html" method="POST" id="mcq1">
            <ol start="17">
                
                <!-- Negotiation skills Q17 to Q20 -->
                <li>
                    <h3>I do not pressurize people to accept my decision during negotiation.</h3>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-A" value="A" />
                        <label for="question-17-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-B" value="B" />
                        <label for="question-17-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-C" value="C" />
                        <label for="question-17-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-D" value="D" />
                        <label for="question-17-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-17-answers" id="question-17-answers-E" value="E" />
                        <label for="question-17-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>While resolving an issue, I provide other parties with all the facts about the topic.</h3>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-A" value="A" />
                        <label for="question-18-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-B" value="B" />
                        <label for="question-18-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-C" value="C" />
                        <label for="question-18-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-D" value="D" />
                        <label for="question-18-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-18-answers" id="question-18-answers-E" value="E" />
                        <label for="question-18-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>While resolving an issue, I try to take into consideration the other's parties point of view. </h3>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-A" value="A" />
                        <label for="question-19-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-B" value="B" />
                        <label for="question-19-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-C" value="C" />
                        <label for="question-19-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-D" value="D" />
                        <label for="question-19-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-19-answers" id="question-19-answers-E" value="E" />
                        <label for="question-19-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I do not make false promises in my statements.</h3>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-A" value="A" />
                        <label for="question-20-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-B" value="B" />
                        <label for="question-20-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-C" value="C" />
                        <label for="question-20-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-D" value="D" />
                        <label for="question-20-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-20-answers" id="question-20-answers-E" value="E" />
                        <label for="question-20-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!--Negotiation skills section ends here -->

                <!-- Logical reasoning Dimension begins here Q21 to Q24 -->

                <li>
                    <h3>Which word does not belong with the others?</h3>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-A" value="A" />
                        <label for="question-21-answers-A">A) Tyre </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-B" value="B" />
                        <label for="question-21-answers-B">B) Steering Wheel</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-C" value="C" />
                        <label for="question-21-answers-C">C) Engine</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-21-answers" id="question-21-answers-D" value="D" />
                        <label for="question-21-answers-D">D) Car</label>
                    </div>
                </li>

                <li>
                    
                    <h3>Guide is to direct as Reduce is to</h3>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-A" value="A" />
                        <label for="question-22-answers-A">A) Decrease </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-B" value="B" />
                        <label for="question-22-answers-B">B) Maintain</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-C" value="C" />
                        <label for="question-22-answers-C">C) Increase</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-22-answers" id="question-22-answers-D" value="D" />
                        <label for="question-22-answers-D">D) Pressure</label>
                    </div>
                </li>

                <li>
                    <h3>Exercise is to Gym as Eating is for</h3>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-A" value="A" />
                        <label for="question-23-answers-A">A) Food </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-B" value="B" />
                        <label for="question-23-answers-B">B) Dieting</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-C" value="C" />
                        <label for="question-23-answers-C">C) Fitness</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-23-answers" id="question-23-answers-D" value="D" />
                        <label for="question-23-answers-D">D) Restaurant</label>
                    </div> 
                </li>

                <li>
                    <h3>Careful is to cautious as Boastful is to</h3>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-A" value="A" />
                        <label for="question-24-answers-A">A) Arrogant </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-B" value="B" />
                        <label for="question-24-answers-B">B) Humble</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-C" value="C" />
                        <label for="question-24-answers-C">C) Joyful</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-24-answers" id="question-24-answers-D" value="D" />
                        <label for="question-24-answers-D">D) Suspicious</label>
                    </div>
                </li>
                <!-- Logical Reasoning dimension ends here -->

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