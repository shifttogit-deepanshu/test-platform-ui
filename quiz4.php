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
		<form action="quiz5.html" method="POST" id="mcq1">
            <ol start="25">
                
                <!-- Attention to detail with data checking skills Q25 to Q28 -->
                <li>
                    <h3>Which of the following two sums are the same? A) 667492   B) 676492 C) 667942 D) 667492</h3>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-A" value="A" />
                        <label for="question-25-answers-A">1) AC </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-B" value="B" />
                        <label for="question-25-answers-B">2) BD</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-C" value="C" />
                        <label for="question-25-answers-C">3) AD</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-25-answers" id="question-25-answers-D" value="D" />
                        <label for="question-25-answers-D">4) DB</label>
                    </div>
                </li>

                <li>
                
                    <h3>Which of the following is a psychologist? A) Er. Rajeev kumar, Indian Civil Engineer B) Ar. Rahul Bhati, Aga Khan Architecture Institute C) Dr. Ravi Sapru, Indian Psychological Association D) Dr. Manish Singh, Neurological Clinic </h3>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-A" value="A" />
                        <label for="question-26-answers-A">1) A </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-B" value="B" />
                        <label for="question-26-answers-B">2) B </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-C" value="C" />
                        <label for="question-26-answers-C">3) C </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-26-answers" id="question-26-answers-D" value="D" />
                        <label for="question-26-answers-D">4) D </label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Which of the following is an Architect? A) Er. Rajeev kumar, Indian Civil Engineer B) Ar. Rahul Bhati, Aga Khan Architecture Institute C) Dr. Ravi Sapru, Indian Psychological Association D) Dr. Manish Singh, Neurological Clinic  </h3>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-A" value="A" />
                        <label for="question-27-answers-A">1) A </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-B" value="B" />
                        <label for="question-27-answers-B">2) B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-C" value="C" />
                        <label for="question-27-answers-C">3) C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-27-answers" id="question-27-answers-D" value="D" />
                        <label for="question-27-answers-D">4) D</label>
                    </div> 
                </li>

               <li>
                
                    <h3>Which of the following five pairs are identical?</h3>
                    <img src="./images/im67.jpg" alt="im67" width="480" height="240">
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-A" value="A" />
                        <label for="question-28-answers-A">A) 2,3 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-B" value="B" />
                        <label for="question-28-answers-B">B) 1,5</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-C" value="C" />
                        <label for="question-28-answers-C">C) 3,4</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-28-answers" id="question-28-answers-D" value="D" />
                        <label for="question-28-answers-D">D) 1,2</label>
                    </div>
                
                </li>
                <!--Attention to detail with data checking section ends here -->
               
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