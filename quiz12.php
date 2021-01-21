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
		<form action="quiz13.html" method="POST" id="mcq1">
            <ol start="83">
                <!-- Self Reflection Skills Q83 to Q85 -->
                <li>
                    
                    <h3>I am self-sufficient to clarify my beliefs in a moment of doubt or uncertainity.</h3>
                    <div>
                        <input type="radio" name="question-83-answers" id="question-83-answers-A" value="A" />
                        <label for="question-83-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-83-answers" id="question-83-answers-B" value="B" />
                        <label for="question-83-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-83-answers" id="question-83-answers-C" value="C" />
                        <label for="question-83-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-83-answers" id="question-83-answers-D" value="D" />
                        <label for="question-83-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-83-answers" id="question-83-answers-E" value="E" />
                        <label for="question-83-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I regularly introspect my actions to be confident of taking my life forward in the direction that I want.</h3>
                    
                    <div>
                        <input type="radio" name="question-84-answers" id="question-84-answers-A" value="A" />
                        <label for="question-84-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-84-answers" id="question-84-answers-B" value="B" />
                        <label for="question-84-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-84-answers" id="question-84-answers-C" value="C" />
                        <label for="question-84-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-84-answers" id="question-84-answers-D" value="D" />
                        <label for="question-84-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-84-answers" id="question-84-answers-E" value="E" />
                        <label for="question-84-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>


                <li>
                    
                    <h3>I often think about the aspects that I need to change about myself.</h3>
                    
                    <div>
                        <input type="radio" name="question-85-answers" id="question-85-answers-A" value="A" />
                        <label for="question-85-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-85-answers" id="question-85-answers-B" value="B" />
                        <label for="question-85-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-85-answers" id="question-85-answers-C" value="C" />
                        <label for="question-85-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-85-answers" id="question-85-answers-D" value="D" />
                        <label for="question-85-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-85-answers" id="question-85-answers-E" value="E" />
                        <label for="question-85-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Self Reflection skill section ends here -->

                <!-- Optimism skills section starts here Q86 to Q87-->

                <li>
                    <h3>At times of diversity, I count my blessings.</h3>
                    
                    <div>
                        <input type="radio" name="question-86-answers" id="question-86-answers-A" value="A" />
                        <label for="question-86-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-86-answers" id="question-86-answers-B" value="B" />
                        <label for="question-86-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-86-answers" id="question-86-answers-C" value="C" />
                        <label for="question-86-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-86-answers" id="question-86-answers-D" value="D" />
                        <label for="question-86-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-86-answers" id="question-86-answers-E" value="E" />
                        <label for="question-86-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>If an outcome hasn't been positive, I don't give up and continue to strive hard.</h3>
                    
                    <div>
                        <input type="radio" name="question-87-answers" id="question-87-answers-A" value="A" />
                        <label for="question-87-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-87-answers" id="question-87-answers-B" value="B" />
                        <label for="question-87-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-87-answers" id="question-87-answers-C" value="C" />
                        <label for="question-87-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-87-answers" id="question-87-answers-D" value="D" />
                        <label for="question-87-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-87-answers" id="question-87-answers-E" value="E" />
                        <label for="question-87-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- optimism skills ends here -->
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