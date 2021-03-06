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
		<form action="quiz16res.php" method="POST" id="mcq1">
            <ol start="120">
                <!-- Spatial skills 3: Perceptual speed q120 to q124 -->
                <li>
                    
                    <h3>I can easily divide a pizza in 14 equals for guests to eat.</h3>
                    <div>
                        <input type="radio" name="question-120-answers" id="question-120-answers-A" value="A" />
                        <label for="question-120-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-120-answers" id="question-120-answers-B" value="B" />
                        <label for="question-120-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-120-answers" id="question-120-answers-C" value="C" />
                        <label for="question-120-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-120-answers" id="question-120-answers-D" value="D" />
                        <label for="question-120-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-120-answers" id="question-120-answers-E" value="E" />
                        <label for="question-120-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I can quickly pair different shapes of the same color and made of the same metal on the basis of their design.</h3>
                    
                    <div>
                        <input type="radio" name="question-121-answers" id="question-121-answers-A" value="A" />
                        <label for="question-121-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-121-answers" id="question-121-answers-B" value="B" />
                        <label for="question-121-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-121-answers" id="question-121-answers-C" value="C" />
                        <label for="question-121-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-121-answers" id="question-121-answers-D" value="D" />
                        <label for="question-121-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-121-answers" id="question-121-answers-E" value="E" />
                        <label for="question-121-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>


                <li>
                    <h3>I can easily recognize a familiar face on the social media even when the pixels are not clear.</h3>
                    
                    <div>
                        <input type="radio" name="question-122-answers" id="question-122-answers-A" value="A" />
                        <label for="question-122-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-122-answers" id="question-122-answers-B" value="B" />
                        <label for="question-122-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-122-answers" id="question-122-answers-C" value="C" />
                        <label for="question-122-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-122-answers" id="question-122-answers-D" value="D" />
                        <label for="question-122-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-122-answers" id="question-122-answers-E" value="E" />
                        <label for="question-122-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I can quickly fill water from a tank by finding out which of the bucket can carry maximum amount of water from a different size of buckets present.</h3>
                    
                    <div>
                        <input type="radio" name="question-123-answers" id="question-123-answers-A" value="A" />
                        <label for="question-123-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-123-answers" id="question-123-answers-B" value="B" />
                        <label for="question-123-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-123-answers" id="question-123-answers-C" value="C" />
                        <label for="question-123-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-123-answers" id="question-123-answers-D" value="D" />
                        <label for="question-123-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-123-answers" id="question-123-answers-E" value="E" />
                        <label for="question-123-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
            
                <li>
                
                    <h3>I enter a clasroom full of children who are standing in different corners of it. Without goint any near to either of them I can easily make them fall in a line based on an ascending order of their height.</h3>
                    
                    <div>
                        <input type="radio" name="question-124-answers" id="question-124-answers-A" value="A" />
                        <label for="question-124-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-124-answers" id="question-124-answers-B" value="B" />
                        <label for="question-124-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-124-answers" id="question-124-answers-C" value="C" />
                        <label for="question-124-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-124-answers" id="question-124-answers-D" value="D" />
                        <label for="question-124-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-124-answers" id="question-124-answers-E" value="E" />
                        <label for="question-124-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Spatial skills 3 ends here -->
                <!-- Spatial skills 4: Kinesthetic begins here -->
                
                <li>
                
                    <h3>I can esily overtake a car while sitting on the driver's seat by a glance in the side view mirror.</h3>
                    
                    <div>
                        <input type="radio" name="question-125-answers" id="question-125-answers-A" value="A" />
                        <label for="question-125-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-125-answers" id="question-125-answers-B" value="B" />
                        <label for="question-125-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-125-answers" id="question-125-answers-C" value="C" />
                        <label for="question-125-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-125-answers" id="question-125-answers-D" value="D" />
                        <label for="question-125-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-125-answers" id="question-125-answers-E" value="E" />
                        <label for="question-125-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I can easily mimic the steps of a dance instructor.</h3>
                    
                    <div>
                        <input type="radio" name="question-126-answers" id="question-126-answers-A" value="A" />
                        <label for="question-126-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-126-answers" id="question-126-answers-B" value="B" />
                        <label for="question-126-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-126-answers" id="question-126-answers-C" value="C" />
                        <label for="question-126-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-126-answers" id="question-126-answers-D" value="D" />
                        <label for="question-126-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-126-answers" id="question-126-answers-E" value="E" />
                        <label for="question-126-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I can easily reverse/move out a car back to the entrance of the parking lot even when the parking is full.</h3>
                    
                    <div>
                        <input type="radio" name="question-127-answers" id="question-127-answers-A" value="A" />
                        <label for="question-127-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-127-answers" id="question-127-answers-B" value="B" />
                        <label for="question-127-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-127-answers" id="question-127-answers-C" value="C" />
                        <label for="question-127-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-127-answers" id="question-127-answers-D" value="D" />
                        <label for="question-127-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-127-answers" id="question-127-answers-E" value="E" />
                        <label for="question-127-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                
                
                <!-- Spatial skills 4: Kinesthetic ends here -->


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