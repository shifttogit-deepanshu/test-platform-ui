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
		<form action="quiz10res.php" method="POST" id="mcq1">
            <ol start="65">
                <!-- Verbal Communication Skills Q65 to Q70 -->
                <li>
                    
                    <h3>When I listen to someone, i pay attention and ask relevant questions.</h3>
                    <div>
                        <input type="radio" name="question-65-answers" id="question-65-answers-A" value="A" />
                        <label for="question-65-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-65-answers" id="question-65-answers-B" value="B" />
                        <label for="question-65-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-65-answers" id="question-65-answers-C" value="C" />
                        <label for="question-65-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-65-answers" id="question-65-answers-D" value="D" />
                        <label for="question-65-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-65-answers" id="question-65-answers-E" value="E" />
                        <label for="question-65-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>People say that I have good listening skills.</h3>
                    
                    <div>
                        <input type="radio" name="question-66-answers" id="question-66-answers-A" value="A" />
                        <label for="question-66-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-66-answers" id="question-66-answers-B" value="B" />
                        <label for="question-66-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-66-answers" id="question-66-answers-C" value="C" />
                        <label for="question-66-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-66-answers" id="question-66-answers-D" value="D" />
                        <label for="question-66-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-66-answers" id="question-66-answers-E" value="E" />
                        <label for="question-66-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I prefer to listen more than talk.</h3>
                    
                    <div>
                        <input type="radio" name="question-67-answers" id="question-67-answers-A" value="A" />
                        <label for="question-67-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-67-answers" id="question-67-answers-B" value="B" />
                        <label for="question-67-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-67-answers" id="question-67-answers-C" value="C" />
                        <label for="question-67-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-67-answers" id="question-67-answers-D" value="D" />
                        <label for="question-67-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-67-answers" id="question-67-answers-E" value="E" />
                        <label for="question-67-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Listening skills section ends here -->

                <!-- social emotional skills section begins here Q68 to Q70 -->
                
                <li>
                
                    <h3>I find it easy to introduce myself in a group setting.</h3>
                    
                    <div>
                        <input type="radio" name="question-68-answers" id="question-68-answers-A" value="A" />
                        <label for="question-68-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-68-answers" id="question-68-answers-B" value="B" />
                        <label for="question-68-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-68-answers" id="question-68-answers-C" value="C" />
                        <label for="question-68-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-68-answers" id="question-68-answers-D" value="D" />
                        <label for="question-68-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-68-answers" id="question-68-answers-E" value="E" />
                        <label for="question-68-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I enjoy interacting with people with different walks of life.</h3>
                    
                    <div>
                        <input type="radio" name="question-69-answers" id="question-69-answers-A" value="A" />
                        <label for="question-69-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-69-answers" id="question-69-answers-B" value="B" />
                        <label for="question-69-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-69-answers" id="question-69-answers-C" value="C" />
                        <label for="question-69-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-69-answers" id="question-69-answers-D" value="D" />
                        <label for="question-69-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-69-answers" id="question-69-answers-E" value="E" />
                        <label for="question-69-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I am good at expressing my opinion about something.</h3>
                    
                    <div>
                        <input type="radio" name="question-70-answers" id="question-70-answers-A" value="A" />
                        <label for="question-70-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-70-answers" id="question-70-answers-B" value="B" />
                        <label for="question-70-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-70-answers" id="question-70-answers-C" value="C" />
                        <label for="question-70-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-70-answers" id="question-70-answers-D" value="D" />
                        <label for="question-70-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-70-answers" id="question-70-answers-E" value="E" />
                        <label for="question-70-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Social Emotional skills section ends here -->
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