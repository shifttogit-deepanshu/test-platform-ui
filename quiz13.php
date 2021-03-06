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
		<form action="quiz13res.php" method="POST" id="mcq1">
            <ol start="88">
                <!-- Office skills q88 to q90 -->
                <li>
                    
                    <h3>I record and calculate data accurately.</h3>
                    <div>
                        <input type="radio" name="question-88-answers" id="question-88-answers-A" value="A" />
                        <label for="question-88-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-88-answers" id="question-88-answers-B" value="B" />
                        <label for="question-88-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-88-answers" id="question-88-answers-C" value="C" />
                        <label for="question-88-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-88-answers" id="question-88-answers-D" value="D" />
                        <label for="question-88-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-88-answers" id="question-88-answers-E" value="E" />
                        <label for="question-88-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                    
                    <h3>I am good at organizing and analyzing data.</h3>
                    
                    <div>
                        <input type="radio" name="question-89-answers" id="question-89-answers-A" value="A" />
                        <label for="question-89-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-89-answers" id="question-89-answers-B" value="B" />
                        <label for="question-89-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-89-answers" id="question-89-answers-C" value="C" />
                        <label for="question-89-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-89-answers" id="question-89-answers-D" value="D" />
                        <label for="question-89-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-89-answers" id="question-89-answers-E" value="E" />
                        <label for="question-89-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>


                <li>
                    
                    <h3>I am good at noticing errors and omissions in documents.</h3>
                    
                    <div>
                        <input type="radio" name="question-90-answers" id="question-90-answers-A" value="A" />
                        <label for="question-90-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-90-answers" id="question-90-answers-B" value="B" />
                        <label for="question-90-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-90-answers" id="question-90-answers-C" value="C" />
                        <label for="question-90-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-90-answers" id="question-90-answers-D" value="D" />
                        <label for="question-90-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-90-answers" id="question-90-answers-E" value="E" />
                        <label for="question-90-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Office skills section ends here -->

                <!-- Management skills : Time management skills section starts here Q91 to Q92-->

                <li>
                    <h3>If a task is difficult, I break it down into easier components.</h3>
                    
                    <div>
                        <input type="radio" name="question-91-answers" id="question-91-answers-A" value="A" />
                        <label for="question-91-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-91-answers" id="question-91-answers-B" value="B" />
                        <label for="question-91-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-91-answers" id="question-91-answers-C" value="C" />
                        <label for="question-91-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-91-answers" id="question-91-answers-D" value="D" />
                        <label for="question-91-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-91-answers" id="question-91-answers-E" value="E" />
                        <label for="question-91-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I have a "to-do" list that I regularly update and check things off from.</h3>
                    
                    <div>
                        <input type="radio" name="question-92-answers" id="question-92-answers-A" value="A" />
                        <label for="question-92-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-92-answers" id="question-92-answers-B" value="B" />
                        <label for="question-92-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-92-answers" id="question-92-answers-C" value="C" />
                        <label for="question-92-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-92-answers" id="question-92-answers-D" value="D" />
                        <label for="question-92-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-92-answers" id="question-92-answers-E" value="E" />
                        <label for="question-92-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Management skills: Time management ends here -->
                <!-- Management skills: Resource management Q93 to Q94 -->

                <li>
                
                    <h3>I am proactive in identifying and arranging the resources needed for finishing my work.</h3>
                    
                    <div>
                        <input type="radio" name="question-93-answers" id="question-93-answers-A" value="A" />
                        <label for="question-93-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-93-answers" id="question-93-answers-B" value="B" />
                        <label for="question-93-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-93-answers" id="question-93-answers-C" value="C" />
                        <label for="question-93-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-93-answers" id="question-93-answers-D" value="D" />
                        <label for="question-93-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-93-answers" id="question-93-answers-E" value="E" />
                        <label for="question-93-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I am good at saving resources and bringing a significant cost-saving.</h3>
                    
                    <div>
                        <input type="radio" name="question-94-answers" id="question-94-answers-A" value="A" />
                        <label for="question-94-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-94-answers" id="question-94-answers-B" value="B" />
                        <label for="question-94-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-94-answers" id="question-94-answers-C" value="C" />
                        <label for="question-94-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-94-answers" id="question-94-answers-D" value="D" />
                        <label for="question-94-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-94-answers" id="question-94-answers-E" value="E" />
                        <label for="question-94-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <!-- Management skills: Resource management ends here -->

                <!-- Management skills: Leadership skills Q95 to Q97 -->
                <li>
                
                    <h3>When assigning tasks, I consider people's skills and interests.</h3>
                    
                    <div>
                        <input type="radio" name="question-95-answers" id="question-95-answers-A" value="A" />
                        <label for="question-95-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-95-answers" id="question-95-answers-B" value="B" />
                        <label for="question-95-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-95-answers" id="question-95-answers-C" value="C" />
                        <label for="question-95-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-95-answers" id="question-95-answers-D" value="D" />
                        <label for="question-95-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-95-answers" id="question-95-answers-E" value="E" />
                        <label for="question-95-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I expect nothing less than high-quality work from my peers.</h3>
                    
                    <div>
                        <input type="radio" name="question-96-answers" id="question-96-answers-A" value="A" />
                        <label for="question-96-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-96-answers" id="question-96-answers-B" value="B" />
                        <label for="question-96-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-96-answers" id="question-96-answers-C" value="C" />
                        <label for="question-96-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-96-answers" id="question-96-answers-D" value="D" />
                        <label for="question-96-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-96-answers" id="question-96-answers-E" value="E" />
                        <label for="question-96-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I can handle complex problems.</h3>
                    
                    <div>
                        <input type="radio" name="question-97-answers" id="question-97-answers-A" value="A" />
                        <label for="question-97-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-97-answers" id="question-97-answers-B" value="B" />
                        <label for="question-97-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-97-answers" id="question-97-answers-C" value="C" />
                        <label for="question-97-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-97-answers" id="question-97-answers-D" value="D" />
                        <label for="question-97-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-97-answers" id="question-97-answers-E" value="E" />
                        <label for="question-97-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Management skills leader ship skills ends here -->
                <!-- Management skills conflict management or negotiation skills starts here -->

                <li>
                
                    <h3>I am known for discussing issues and finding solutions that meets everyone's needs.</h3>
                    
                    <div>
                        <input type="radio" name="question-98-answers" id="question-98-answers-A" value="A" />
                        <label for="question-98-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-98-answers" id="question-98-answers-B" value="B" />
                        <label for="question-98-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-98-answers" id="question-98-answers-C" value="C" />
                        <label for="question-98-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-98-answers" id="question-98-answers-D" value="D" />
                        <label for="question-98-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-98-answers" id="question-98-answers-E" value="E" />
                        <label for="question-98-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I am good at negotiating and adopting a "give and take" approach to solving problems.</h3>
                    
                    <div>
                        <input type="radio" name="question-99-answers" id="question-99-answers-A" value="A" />
                        <label for="question-99-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-99-answers" id="question-99-answers-B" value="B" />
                        <label for="question-99-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-99-answers" id="question-99-answers-C" value="C" />
                        <label for="question-99-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-99-answers" id="question-99-answers-D" value="D" />
                        <label for="question-99-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-99-answers" id="question-99-answers-E" value="E" />
                        <label for="question-99-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>I can figure out what needs to be done and I am usually right.</h3>
                    
                    <div>
                        <input type="radio" name="question-100-answers" id="question-100-answers-A" value="A" />
                        <label for="question-100-answers-A">A) Strongly Agree </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-100-answers" id="question-100-answers-B" value="B" />
                        <label for="question-100-answers-B">B) Agree</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-100-answers" id="question-100-answers-C" value="C" />
                        <label for="question-100-answers-C">C) Neutral</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-100-answers" id="question-100-answers-D" value="D" />
                        <label for="question-100-answers-D">D) Disagree</label>
                    </div>

                    <div>
                        <input type="radio" name="question-100-answers" id="question-100-answers-E" value="E" />
                        <label for="question-100-answers-E">E) Strongly disagree</label>
                    </div>
                
                </li>
                <!-- Management skills: Conflict Management or negotiation ends here -->


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