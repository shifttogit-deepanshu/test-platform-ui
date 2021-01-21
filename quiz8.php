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
		<form action="quiz9.html" method="POST" id="mcq1">
            <ol start="47">
                <!-- EQ Self Awareness -->
                <li>
                    
                    <h3>I generally know why I am feeling the emotion which I am feeling.</h3>
                    <div>
                        <input type="radio" name="question-47-answers" id="question-47-answers-A" value="A" />
                        <label for="question-47-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-47-answers" id="question-47-answers-B" value="B" />
                        <label for="question-47-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-47-answers" id="question-47-answers-C" value="C" />
                        <label for="question-47-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-47-answers" id="question-47-answers-D" value="D" />
                        <label for="question-47-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-47-answers" id="question-47-answers-E" value="E" />
                        <label for="question-47-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I usually know how to make myself feel better.</h3>
                    
                    <div>
                        <input type="radio" name="question-48-answers" id="question-48-answers-A" value="A" />
                        <label for="question-48-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-48-answers" id="question-48-answers-B" value="B" />
                        <label for="question-48-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-48-answers" id="question-48-answers-C" value="C" />
                        <label for="question-48-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-48-answers" id="question-48-answers-D" value="D" />
                        <label for="question-48-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-48-answers" id="question-48-answers-E" value="E" />
                        <label for="question-48-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <!--EQ self awareness section ends here -->
                    
                    <!-- Personal Disposition section begins here -->
                
                    <h3>I like to deal with people.</h3>
                    
                    <div>
                        <input type="radio" name="question-49-answers" id="question-49-answers-A" value="A" />
                        <label for="question-49-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-49-answers" id="question-49-answers-B" value="B" />
                        <label for="question-49-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-49-answers" id="question-49-answers-C" value="C" />
                        <label for="question-49-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-49-answers" id="question-49-answers-D" value="D" />
                        <label for="question-49-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-49-answers" id="question-49-answers-E" value="E" />
                        <label for="question-49-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>I am good at getting work done from others.</h3>
                    
                    <div>
                        <input type="radio" name="question-50-answers" id="question-50-answers-A" value="A" />
                        <label for="question-50-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-50-answers" id="question-50-answers-B" value="B" />
                        <label for="question-50-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-50-answers" id="question-50-answers-C" value="C" />
                        <label for="question-50-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-50-answers" id="question-50-answers-D" value="D" />
                        <label for="question-50-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-50-answers" id="question-50-answers-E" value="E" />
                        <label for="question-50-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I am able to understand others.</h3>
                    
                    <div>
                        <input type="radio" name="question-51-answers" id="question-51-answers-A" value="A" />
                        <label for="question-51-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-51-answers" id="question-51-answers-B" value="B" />
                        <label for="question-51-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-51-answers" id="question-51-answers-C" value="C" />
                        <label for="question-51-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-51-answers" id="question-51-answers-D" value="D" />
                        <label for="question-51-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-51-answers" id="question-51-answers-E" value="E" />
                        <label for="question-51-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I provide solutions to problems easily.</h3>
                    
                    <div>
                        <input type="radio" name="question-52-answers" id="question-52-answers-A" value="A" />
                        <label for="question-52-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-52-answers" id="question-52-answers-B" value="B" />
                        <label for="question-52-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-52-answers" id="question-52-answers-C" value="C" />
                        <label for="question-52-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-52-answers" id="question-52-answers-D" value="D" />
                        <label for="question52-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-52-answers" id="question-52-answers-E" value="E" />
                        <label for="question-52-answers-E">E) Strongly disagree</label>
                    </div>
                </li>


                <li>
                    
                    <h3>I am meticulous and methodical.</h3>
                    
                    <div>
                        <input type="radio" name="question-53-answers" id="question-53-answers-A" value="A" />
                        <label for="question-53-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-53-answers" id="question-53-answers-B" value="B" />
                        <label for="question-53-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-53-answers" id="question-53-answers-C" value="C" />
                        <label for="question-53-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-53-answers" id="question-53-answers-D" value="D" />
                        <label for="question53-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-53-answers" id="question-53-answers-E" value="E" />
                        <label for="question-53-answers-E">E) Strongly disagree</label>
                    </div>
                </li>
                
                <li>
                    
                    <h3>I am accurate in my observations of people.</h3>
                    
                    <div>
                        <input type="radio" name="question-54-answers" id="question-54-answers-A" value="A" />
                        <label for="question-54-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-54-answers" id="question-54-answers-B" value="B" />
                        <label for="question-54-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-54-answers" id="question-54-answers-C" value="C" />
                        <label for="question-54-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-54-answers" id="question-54-answers-D" value="D" />
                        <label for="question54-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-54-answers" id="question-54-answers-E" value="E" />
                        <label for="question-54-answers-E">E) Strongly disagree</label>
                    </div>
                </li>

                <li>
                    
                    <h3>I maintain the confidentiality of information.</h3>
                    
                    <div>
                        <input type="radio" name="question-55-answers" id="question-55-answers-A" value="A" />
                        <label for="question-55-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-55-answers" id="question-55-answers-B" value="B" />
                        <label for="question-55-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-55-answers" id="question-55-answers-C" value="C" />
                        <label for="question-55-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-55-answers" id="question-55-answers-D" value="D" />
                        <label for="question55-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-55-answers" id="question-55-answers-E" value="E" />
                        <label for="question-55-answers-E">E) Strongly disagree</label>
                    </div>
                </li>

                <li>
                    
                    <h3>I do not misuse others private information.</h3>
                    
                    <div>
                        <input type="radio" name="question-56-answers" id="question-56-answers-A" value="A" />
                        <label for="question-56-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-56-answers" id="question-56-answers-B" value="B" />
                        <label for="question-56-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-56-answers" id="question-56-answers-C" value="C" />
                        <label for="question-56-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-56-answers" id="question-56-answers-D" value="D" />
                        <label for="question56-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-56-answers" id="question-56-answers-E" value="E" />
                        <label for="question-56-answers-E">E) Strongly disagree</label>
                    </div>
                </li>

                <li>
                    
                    <h3>I take decisions easily.</h3>
                    
                    <div>
                        <input type="radio" name="question-57-answers" id="question-57-answers-A" value="A" />
                        <label for="question-57-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-57-answers" id="question-57-answers-B" value="B" />
                        <label for="question-57-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-57-answers" id="question-57-answers-C" value="C" />
                        <label for="question-57-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-57-answers" id="question-57-answers-D" value="D" />
                        <label for="question57-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-57-answers" id="question-57-answers-E" value="E" />
                        <label for="question-57-answers-E">E) Strongly disagree</label>
                    </div>
                </li>

                <li>
                    
                    <h3>I am good at giving and accepting feedback from others.</h3>
                    
                    <div>
                        <input type="radio" name="question-58-answers" id="question-58-answers-A" value="A" />
                        <label for="question-58-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-58-answers" id="question-58-answers-B" value="B" />
                        <label for="question-58-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-58-answers" id="question-58-answers-C" value="C" />
                        <label for="question-52-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-58-answers" id="question-58-answers-D" value="D" />
                        <label for="question58-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-58-answers" id="question-58-answers-E" value="E" />
                        <label for="question-58-answers-E">E) Strongly disagree</label>
                    </div>
                </li>

                <li>
                    
                    <h3>I find criticism positive and constructive.</h3>
                    
                    <div>
                        <input type="radio" name="question-59-answers" id="question-59-answers-A" value="A" />
                        <label for="question-59-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-59-answers" id="question-59-answers-B" value="B" />
                        <label for="question-59-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-59-answers" id="question-59-answers-C" value="C" />
                        <label for="question-59-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-59-answers" id="question-59-answers-D" value="D" />
                        <label for="question59-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-59-answers" id="question-59-answers-E" value="E" />
                        <label for="question-59-answers-E">E) Strongly disagree</label>
                    </div>
                </li>
                <!-- Personal Disposition section ends here -->
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