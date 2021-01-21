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
		<form action="quiz12.html" method="POST" id="mcq1">
            <ol start="71">
                <!-- Cooperation Skills Q71 to Q72 -->
                <li>
                    
                    <h3>I can co-operate in different acts of social life even they belong to different professions, castes, classes, sects and political parties.</h3>
                    <div>
                        <input type="radio" name="question-71-answers" id="question-71-answers-A" value="A" />
                        <label for="question-71-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-71-answers" id="question-71-answers-B" value="B" />
                        <label for="question-71-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-71-answers" id="question-71-answers-C" value="C" />
                        <label for="question-71-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-71-answers" id="question-71-answers-D" value="D" />
                        <label for="question-71-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-71-answers" id="question-71-answers-E" value="E" />
                        <label for="question-71-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I enjoy working in a team than working alone.</h3>
                    
                    <div>
                        <input type="radio" name="question-72-answers" id="question-72-answers-A" value="A" />
                        <label for="question-72-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-72-answers" id="question-72-answers-B" value="B" />
                        <label for="question-72-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-72-answers" id="question-72-answers-C" value="C" />
                        <label for="question-72-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-72-answers" id="question-72-answers-D" value="D" />
                        <label for="question-72-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-72-answers" id="question-72-answers-E" value="E" />
                        <label for="question-72-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Cooperation skills section ends here -->

                <!-- Assertion skills section starts here Q73 to Q74-->

                <li>
                    <h3>I prefer to keep my opinion to myself when talking to people whom I do not know well.</h3>
                    
                    <div>
                        <input type="radio" name="question-73-answers" id="question-73-answers-A" value="A" />
                        <label for="question-73-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-73-answers" id="question-73-answers-B" value="B" />
                        <label for="question-73-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-73-answers" id="question-73-answers-C" value="C" />
                        <label for="question-73-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-73-answers" id="question-73-answers-D" value="D" />
                        <label for="question-73-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-73-answers" id="question-73-answers-E" value="E" />
                        <label for="question-73-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <!-- Negative Question -->
                
                    <h3>It is difficult for me to express my anger to the concerned person.</h3>
                    
                    <div>
                        <input type="radio" name="question-74-answers" id="question-74-answers-A" value="A" />
                        <label for="question-74-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-74-answers" id="question-74-answers-B" value="B" />
                        <label for="question-74-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-74-answers" id="question-74-answers-C" value="C" />
                        <label for="question-74-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-74-answers" id="question-74-answers-D" value="D" />
                        <label for="question-74-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-74-answers" id="question-74-answers-E" value="E" />
                        <label for="question-74-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Assertion skills ends here -->

                <!-- Responsibility skills starts here -->

                <li>
                    <h3>I complete my chores on time without being reminded.</h3>
                    
                    <div>
                        <input type="radio" name="question-75-answers" id="question-75-answers-A" value="A" />
                        <label for="question-75-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-75-answers" id="question-75-answers-B" value="B" />
                        <label for="question-75-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-75-answers" id="question-75-answers-C" value="C" />
                        <label for="question-75-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-75-answers" id="question-75-answers-D" value="D" />
                        <label for="question-75-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-75-answers" id="question-75-answers-E" value="E" />
                        <label for="question-75-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I follow through my commitments, even when I don't feel like it.</h3>
                    
                    <div>
                        <input type="radio" name="question-76-answers" id="question-76-answers-A" value="A" />
                        <label for="question-76-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-76-answers" id="question-76-answers-B" value="B" />
                        <label for="question-76-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-76-answers" id="question-76-answers-C" value="C" />
                        <label for="question-76-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-76-answers" id="question-76-answers-D" value="D" />
                        <label for="question-76-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-76-answers" id="question-76-answers-E" value="E" />
                        <label for="question-76-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I accept responsibility for my mistakes and learn from them.</h3>
                    
                    <div>
                        <input type="radio" name="question-77-answers" id="question-77-answers-A" value="A" />
                        <label for="question-77-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-77-answers" id="question-77-answers-B" value="B" />
                        <label for="question-77-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-77-answers" id="question-77-answers-C" value="C" />
                        <label for="question-77-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-77-answers" id="question-77-answers-D" value="D" />
                        <label for="question-77-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-77-answers" id="question-77-answers-E" value="E" />
                        <label for="question-77-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Responsibility skills ends here -->
                <!-- Engagement skills starts here -->

                <li>
                    <h3>In a party, I make sure to introduce everyone.</h3>
                    
                    <div>
                        <input type="radio" name="question-78-answers" id="question-78-answers-A" value="A" />
                        <label for="question-78-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-78-answers" id="question-78-answers-B" value="B" />
                        <label for="question-78-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-78-answers" id="question-78-answers-C" value="C" />
                        <label for="question-78-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-78-answers" id="question-78-answers-D" value="D" />
                        <label for="question-78-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-78-answers" id="question-78-answers-E" value="E" />
                        <label for="question-78-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    <h3>I enjoy participating in activities at college/work.</h3>
                    
                    <div>
                        <input type="radio" name="question-79-answers" id="question-79-answers-A" value="A" />
                        <label for="question-79-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-79-answers" id="question-79-answers-B" value="B" />
                        <label for="question-79-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-79-answers" id="question-79-answers-C" value="C" />
                        <label for="question-79-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-79-answers" id="question-79-answers-D" value="D" />
                        <label for="question-79-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-79-answers" id="question-79-answers-E" value="E" />
                        <label for="question-79-answers-E">E) Strongly disagree</label>
                    </div> 
                </li>

                <!-- Engagement section ends here -->
                
                <!-- Self Control Section begins here -->
                <li>
                    <!-- Negative Question -->
                    <h3>I say things that I regret later.</h3>
                    
                    <div>
                        <input type="radio" name="question-80-answers" id="question-80-answers-A" value="A" />
                        <label for="question-80-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-80-answers" id="question-80-answers-B" value="B" />
                        <label for="question-79-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-80-answers" id="question-80-answers-C" value="C" />
                        <label for="question-80-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-80-answers" id="question-80-answers-D" value="D" />
                        <label for="question-79-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-80-answers" id="question-80-answers-E" value="E" />
                        <label for="question-80-answers-E">E) Strongly disagree</label>
                    </div> 
                </li>

                <li>
                    <!-- Negative Question -->
                    <h3>I may have every intention to stay quiet on an issue but I find it difficult to resist expressing my opinion.</h3>
                    
                    <div>
                        <input type="radio" name="question-81-answers" id="question-81-answers-A" value="A" />
                        <label for="question-81-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-81-answers" id="question-81-answers-B" value="B" />
                        <label for="question-81-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-81-answers" id="question-81-answers-C" value="C" />
                        <label for="question-81-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-81-answers" id="question-81-answers-D" value="D" />
                        <label for="question-81-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-81-answers" id="question-81-answers-E" value="E" />
                        <label for="question-81-answers-E">E) Strongly disagree</label>
                    </div> 
                </li>

                <li>
                    <!-- Negative Question -->
                    <h3>I have difficulty in pusing myself out of a grumpy mood.</h3>
                    
                    <div>
                        <input type="radio" name="question-82-answers" id="question-82-answers-A" value="A" />
                        <label for="question-82-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-82-answers" id="question-82-answers-B" value="B" />
                        <label for="question-82-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-82-answers" id="question-82-answers-C" value="C" />
                        <label for="question-82-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-82-answers" id="question-82-answers-D" value="D" />
                        <label for="question-82-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-82-answers" id="question-82-answers-E" value="E" />
                        <label for="question-82-answers-E">E) Strongly disagree</label>
                    </div> 
                </li>
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