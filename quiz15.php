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
		<form action="quiz16.html" method="POST" id="mcq1">
            <ol start="112">
                <!-- Spatial skills 1: Visual memory q112 to q115 -->
                <li>
                    
                    <h3>I can easily put together the puzzle pieces of a picture which I have seen just once.</h3>
                    <div>
                        <input type="radio" name="question-112-answers" id="question-112-answers-A" value="A" />
                        <label for="question-112-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-112-answers" id="question-112-answers-B" value="B" />
                        <label for="question-112-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-112-answers" id="question-112-answers-C" value="C" />
                        <label for="question-112-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-112-answers" id="question-112-answers-D" value="D" />
                        <label for="question-112-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-112-answers" id="question-112-answers-E" value="E" />
                        <label for="question-112-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I can easily identify a variety of shrubs in a garden on the basis of shape.</h3>
                    
                    <div>
                        <input type="radio" name="question-113-answers" id="question-113-answers-A" value="A" />
                        <label for="question-113-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-113-answers" id="question-113-answers-B" value="B" />
                        <label for="question-113-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-113-answers" id="question-113-answers-C" value="C" />
                        <label for="question-113-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-113-answers" id="question-113-answers-D" value="D" />
                        <label for="question-113-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-113-answers" id="question-113-answers-E" value="E" />
                        <label for="question-113-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>


                <li>
                    <h3>I can easily recognize faces even if they are distorted into different pictures.</h3>
                    
                    <div>
                        <input type="radio" name="question-114-answers" id="question-114-answers-A" value="A" />
                        <label for="question-114-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-114-answers" id="question-114-answers-B" value="B" />
                        <label for="question-114-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-114-answers" id="question-114-answers-C" value="C" />
                        <label for="question-114-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-114-answers" id="question-114-answers-D" value="D" />
                        <label for="question-114-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-114-answers" id="question-114-answers-E" value="E" />
                        <label for="question-114-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I can easily fix a broken porcelain doll.</h3>
                    
                    <div>
                        <input type="radio" name="question-115-answers" id="question-115-answers-A" value="A" />
                        <label for="question-115-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-115-answers" id="question-115-answers-B" value="B" />
                        <label for="question-115-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-115-answers" id="question-115-answers-C" value="C" />
                        <label for="question-115-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-115-answers" id="question-115-answers-D" value="D" />
                        <label for="question-115-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-115-answers" id="question-115-answers-E" value="E" />
                        <label for="question-115-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Spatial skills 1 : Viaual memory section ends here -->
                <!-- Spatial skills 2: Spatial scanning Q116 to Q119 -->

                <li>
                
                    <h3>I easily take new routes to the same destination.</h3>
                    
                    <div>
                        <input type="radio" name="question-116-answers" id="question-116-answers-A" value="A" />
                        <label for="question-116-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-116-answers" id="question-116-answers-B" value="B" />
                        <label for="question-116-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-116-answers" id="question-116-answers-C" value="C" />
                        <label for="question-116-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-116-answers" id="question-116-answers-D" value="D" />
                        <label for="question-116-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-116-answers" id="question-116-answers-E" value="E" />
                        <label for="question-116-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>It is easy for me to locatethe direction the moon is in as it changes within the fortnight.</h3>
                    
                    <div>
                        <input type="radio" name="question-117-answers" id="question-117-answers-A" value="A" />
                        <label for="question-117-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-117-answers" id="question-117-answers-B" value="B" />
                        <label for="question-117-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-117-answers" id="question-117-answers-C" value="C" />
                        <label for="question-117-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-117-answers" id="question-117-answers-D" value="D" />
                        <label for="question-117-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-117-answers" id="question-117-answers-E" value="E" />
                        <label for="question-117-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>It is easy for me to spot space objects and calculate their approximate closeness to the earth.</h3>
                    
                    <div>
                        <input type="radio" name="question-118-answers" id="question-118-answers-A" value="A" />
                        <label for="question-118-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-118-answers" id="question-118-answers-B" value="B" />
                        <label for="question-118-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-118-answers" id="question-118-answers-C" value="C" />
                        <label for="question-118-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-118-answers" id="question-118-answers-D" value="D" />
                        <label for="question-118-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-118-answers" id="question-118-answers-E" value="E" />
                        <label for="question-118-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>It is easy for me to find my way to my seat in a cinema hall even if the lights are out.</h3>
                    
                    <div>
                        <input type="radio" name="question-119-answers" id="question-119-answers-A" value="A" />
                        <label for="question-119-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-119-answers" id="question-119-answers-B" value="B" />
                        <label for="question-119-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-119-answers" id="question-119-answers-C" value="C" />
                        <label for="question-119-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-119-answers" id="question-119-answers-D" value="D" />
                        <label for="question-119-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-119-answers" id="question-119-answers-E" value="E" />
                        <label for="question-119-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                
                
                <!-- Spatial skills 2: spatial scanning ends here -->


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