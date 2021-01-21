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
		<form action="quiz9res.php" method="POST" id="mcq1">
            <ol start="60">
                <!-- Verbal Communication Skills Q60 to Q62 -->
                <li>
                    
                    <h3>I am good at getting my point across in a clear, concise manner without any hesitation.</h3>
                    <div>
                        <input type="radio" name="question-60-answers" id="question-60-answers-A" value="A" />
                        <label for="question-60-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-60-answers" id="question-60-answers-B" value="B" />
                        <label for="question-60-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-60-answers" id="question-60-answers-C" value="C" />
                        <label for="question-60-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-60-answers" id="question-60-answers-D" value="D" />
                        <label for="question-60-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-60-answers" id="question-60-answers-E" value="E" />
                        <label for="question-60-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I enjoy activities where I get to engage in conversations with people.</h3>
                    
                    <div>
                        <input type="radio" name="question-61-answers" id="question-61-answers-A" value="A" />
                        <label for="question-61-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-61-answers" id="question-61-answers-B" value="B" />
                        <label for="question-61-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-61-answers" id="question-61-answers-C" value="C" />
                        <label for="question-61-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-61-answers" id="question-61-answers-D" value="D" />
                        <label for="question-61-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-61-answers" id="question-61-answers-E" value="E" />
                        <label for="question-61-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>People say I am a good orator.</h3>
                    
                    <div>
                        <input type="radio" name="question-62-answers" id="question-62-answers-A" value="A" />
                        <label for="question-62-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-62-answers" id="question-62-answers-B" value="B" />
                        <label for="question-62-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-62-answers" id="question-62-answers-C" value="C" />
                        <label for="question-62-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-62-answers" id="question-62-answers-D" value="D" />
                        <label for="question-62-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-62-answers" id="question-62-answers-E" value="E" />
                        <label for="question-62-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Verbal communication skills section ends here -->

                <!-- Non verbal communication skills section begins here Q63 to Q64 -->
                
                <li>
                
                    <h3>I am good at reading the body language of others.</h3>
                    
                    <div>
                        <input type="radio" name="question-63-answers" id="question-63-answers-A" value="A" />
                        <label for="question-63-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-63-answers" id="question-63-answers-B" value="B" />
                        <label for="question-63-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-63-answers" id="question-63-answers-C" value="C" />
                        <label for="question-63-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-63-answers" id="question-63-answers-D" value="D" />
                        <label for="question-63-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-63-answers" id="question-63-answers-E" value="E" />
                        <label for="question-63-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>People say that I express well through my facial expressions.</h3>
                    
                    <div>
                        <input type="radio" name="question-64-answers" id="question-64-answers-A" value="A" />
                        <label for="question-64-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-64-answers" id="question-64-answers-B" value="B" />
                        <label for="question-64-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-64-answers" id="question-64-answers-C" value="C" />
                        <label for="question-64-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-64-answers" id="question-64-answers-D" value="D" />
                        <label for="question-64-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-64-answers" id="question-64-answers-E" value="E" />
                        <label for="question-64-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Non verbal communication skills section ends here -->
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