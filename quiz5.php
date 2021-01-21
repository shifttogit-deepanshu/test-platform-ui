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
		<form action="quiz5res.php" method="POST" id="mcq1">
            <ol start="29">
                
                <!-- Persuasion skills Q29 to Q31 -->
                <li>
                    <h3>It is easy for me to convince someone to accept my point of view on things.</h3>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-A" value="A" />
                        <label for="question-29-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-B" value="B" />
                        <label for="question-29-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-C" value="C" />
                        <label for="question-29-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-D" value="D" />
                        <label for="question-9-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-29-answers" id="question-29-answers-E" value="E" />
                        <label for="question-29-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I don't feel shy from repeating my point of view about a particular matterover and over again.</h3>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-A" value="A" />
                        <label for="question-30-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-B" value="B" />
                        <label for="question-30-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-C" value="C" />
                        <label for="question-30-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-D" value="D" />
                        <label for="question-30-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-30-answers" id="question-30-answers-E" value="E" />
                        <label for="question-30-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>It is easy for me to make my friends do what I want.</h3>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-A" value="A" />
                        <label for="question-31-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-B" value="B" />
                        <label for="question-31-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-C" value="C" />
                        <label for="question-31-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-D" value="D" />
                        <label for="question-31-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-31-answers" id="question-31-answers-E" value="E" />
                        <label for="question-31-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Persuasion dimension ends here -->

                <!-- Risk taking ability dimension starts here -->

                <li>
                
                    <h3>I like doing dangerous activities.</h3>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-A" value="A" />
                        <label for="question-32-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-B" value="B" />
                        <label for="question-32-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-C" value="C" />
                        <label for="question-32-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-D" value="D" />
                        <label for="question-32-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-32-answers" id="question-32-answers-E" value="E" />
                        <label for="question-32-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>No risk no gain, high risk high gain.</h3>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-A" value="A" />
                        <label for="question-33-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-B" value="B" />
                        <label for="question-33-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-C" value="C" />
                        <label for="question-33-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-D" value="D" />
                        <label for="question-33-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-33-answers" id="question-33-answers-E" value="E" />
                        <label for="question-33-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>Rules are meant to be broken.</h3>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-A" value="A" />
                        <label for="question-34-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-B" value="B" />
                        <label for="question-34-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-C" value="C" />
                        <label for="question-34-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-D" value="D" />
                        <label for="question-34-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-34-answers" id="question-34-answers-E" value="E" />
                        <label for="question-34-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Risk Taking Ability section ends here -->

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