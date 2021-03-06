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
		<form action="quiz14res.php" method="POST" id="mcq1">
            <ol start="101">
                <!-- Management skills: Stess management skills q101 to q103 -->
                <li>
                    <!-- Negative Question -->
                    
                    <h3>I have found myself over reacting to trivial problems.</h3>
                    <div>
                        <input type="radio" name="question-101-answers" id="question-101-answers-A" value="A" />
                        <label for="question-101-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-101-answers" id="question-101-answers-B" value="B" />
                        <label for="question-101-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-101-answers" id="question-101-answers-C" value="C" />
                        <label for="question-101-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-101-answers" id="question-101-answers-D" value="D" />
                        <label for="question-101-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-101-answers" id="question-101-answers-E" value="E" />
                        <label for="question-101-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <!-- Negative Question -->
                    <h3>I find it difficult to relax.</h3>
                    
                    <div>
                        <input type="radio" name="question-102-answers" id="question-102-answers-A" value="A" />
                        <label for="question-102-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-102-answers" id="question-102-answers-B" value="B" />
                        <label for="question-102-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-102-answers" id="question-102-answers-C" value="C" />
                        <label for="question-102-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-102-answers" id="question-102-answers-D" value="D" />
                        <label for="question-102-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-102-answers" id="question-102-answers-E" value="E" />
                        <label for="question-102-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>


                <li>
                    <!-- Negative Question -->
                    <h3>I have found myself getting agitated.</h3>
                    
                    <div>
                        <input type="radio" name="question-103-answers" id="question-103-answers-A" value="A" />
                        <label for="question-103-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-103-answers" id="question-103-answers-B" value="B" />
                        <label for="question-103-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-103-answers" id="question-103-answers-C" value="C" />
                        <label for="question-103-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-103-answers" id="question-103-answers-D" value="D" />
                        <label for="question-103-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-103-answers" id="question-103-answers-E" value="E" />
                        <label for="question-103-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Management skills: Stess Management skills section ends here -->

                <!-- Management skills : Life management skills section starts here Q104 to Q106-->

                <li>
                    <!-- Negative Question -->
                    <h3>I have little time for my friends.</h3>
                    
                    <div>
                        <input type="radio" name="question-104-answers" id="question-104-answers-A" value="A" />
                        <label for="question-104-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-104-answers" id="question-104-answers-B" value="B" />
                        <label for="question-104-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-104-answers" id="question-104-answers-C" value="C" />
                        <label for="question-104-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-104-answers" id="question-104-answers-D" value="D" />
                        <label for="question-104-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-104-answers" id="question-104-answers-E" value="E" />
                        <label for="question-104-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <!-- Negative Question -->
                
                    <h3>I have given up a lot of my hobbies.</h3>
                    
                    <div>
                        <input type="radio" name="question-105-answers" id="question-105-answers-A" value="A" />
                        <label for="question-105-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-105-answers" id="question-105-answers-B" value="B" />
                        <label for="question-105-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-105-answers" id="question-105-answers-C" value="C" />
                        <label for="question-105-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-105-answers" id="question-105-answers-D" value="D" />
                        <label for="question-105-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-105-answers" id="question-105-answers-E" value="E" />
                        <label for="question-105-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                
                <li>
                    <!-- Negative Question -->
                
                    <h3>I have no say in what I want from my future.</h3>
                    
                    <div>
                        <input type="radio" name="question-106-answers" id="question-106-answers-A" value="A" />
                        <label for="question-106-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-106-answers" id="question-106-answers-B" value="B" />
                        <label for="question-106-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-106-answers" id="question-106-answers-C" value="C" />
                        <label for="question-106-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-106-answers" id="question-106-answers-D" value="D" />
                        <label for="question-106-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-106-answers" id="question-106-answers-E" value="E" />
                        <label for="question-106-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Management skills: Life Management ends here -->
                <!-- Administrative skills section begins here Q107 to Q111 -->

                <li>
                
                    <h3>I do things quickly and efficiently.</h3>
                    
                    <div>
                        <input type="radio" name="question-107-answers" id="question-107-answers-A" value="A" />
                        <label for="question-107-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-107-answers" id="question-107-answers-B" value="B" />
                        <label for="question-107-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-107-answers" id="question-107-answers-C" value="C" />
                        <label for="question-107-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-107-answers" id="question-107-answers-D" value="D" />
                        <label for="question-107-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-107-answers" id="question-107-answers-E" value="E" />
                        <label for="question-107-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I try to commit the least possible errors.</h3>
                    
                    <div>
                        <input type="radio" name="question-108-answers" id="question-108-answers-A" value="A" />
                        <label for="question-108-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-108-answers" id="question-108-answers-B" value="B" />
                        <label for="question-108-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-108-answers" id="question-108-answers-C" value="C" />
                        <label for="question-108-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-108-answers" id="question-108-answers-D" value="D" />
                        <label for="question-108-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-108-answers" id="question-108-answers-E" value="E" />
                        <label for="question-108-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I am quick to complete tasks in a demanding environment.</h3>
                    
                    <div>
                        <input type="radio" name="question-109-answers" id="question-109-answers-A" value="A" />
                        <label for="question-109-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-109-answers" id="question-109-answers-B" value="B" />
                        <label for="question-109-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-109-answers" id="question-109-answers-C" value="C" />
                        <label for="question-109-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-109-answers" id="question-109-answers-D" value="D" />
                        <label for="question-109-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-109-answers" id="question-109-answers-E" value="E" />
                        <label for="question-109-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I keep an eye on efforts and results.</h3>
                    
                    <div>
                        <input type="radio" name="question-110-answers" id="question-110-answers-A" value="A" />
                        <label for="question-110-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-110-answers" id="question-110-answers-B" value="B" />
                        <label for="question-110-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-110-answers" id="question-110-answers-C" value="C" />
                        <label for="question-110-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-110-answers" id="question-110-answers-D" value="D" />
                        <label for="question-110-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-110-answers" id="question-110-answers-E" value="E" />
                        <label for="question-110-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
            
                <li>
                
                    <h3>I am good at organizing things.</h3>
                    
                    <div>
                        <input type="radio" name="question-111-answers" id="question-111-answers-A" value="A" />
                        <label for="question-111-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-111-answers" id="question-111-answers-B" value="B" />
                        <label for="question-111-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-111-answers" id="question-111-answers-C" value="C" />
                        <label for="question-111-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-111-answers" id="question-111-answers-D" value="D" />
                        <label for="question-111-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-111-answers" id="question-111-answers-E" value="E" />
                        <label for="question-111-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                
                <!-- Administrative skills ends here -->


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