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
		<form action="quiz19res.php" method="POST" id="mcq1">
            <ol start="139">
                <li>
                
                    <h3>Which group of shapes can be assembled to make the shape shown?</h3>
                    <img src="./images/im57.jpg" alt="im57" width="550" height="200">
                    
                    <div>
                        <input type="radio" name="question-139-answers" id="question-139-answers-A" value="A" />
                        <label for="question-139-answers-A">1) B </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-139-answers" id="question-139-answers-B" value="B" />
                        <label for="question-139-answers-B">2) C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-139-answers" id="question-139-answers-C" value="C" />
                        <label for="question-139-answers-C">3) D</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-139-answers" id="question-139-answers-D" value="D" />
                        <label for="question-139-answers-D">4) A</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>By adding these two following of the tools will be made?</h3>
                    <img src="./images/im61.jpg" alt="im61" width="600" height="200">
                    
                    <div>
                        <input type="radio" name="question-140-answers" id="question-140-answers-A" value="A" />
                        <label for="question-140-answers-A">1) D </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-140-answers" id="question-140-answers-B" value="B" />
                        <label for="question-140-answers-B">2) C </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-140-answers" id="question-140-answers-C" value="C" />
                        <label for="question-140-answers-C">3) B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-140-answers" id="question-140-answers-D" value="D" />
                        <label for="question-5-answers-D">4) A</label>
                    </div>
                
                </li>
                <!-- Mechanical skills: Mechanical Assembly Aptitde ends here -->
                <!-- Mechanical skills: Mechanical Identification begins here -->

                 <li>
                
                    <h3>Which shape in Group 2 corresponds to the shape in Group 1? </h3>
                        <img src="./images/im11.jpg" alt="im11" width="700" height="450">
                    
                    <div>
                        <input type="radio" name="question-141-answers" id="question-141-answers-A" value="A" />
                        <label for="question-141-answers-A">1) X,1 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-141-answers" id="question-141-answers-B" value="B" />
                        <label for="question-141-answers-B">2) Y,2 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-141-answers" id="question-141-answers-C" value="C" />
                        <label for="question-141-answers-C">3) R,17</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-141-answers" id="question-141-answers-D" value="D" />
                        <label for="question-141-answers-D">4) W,24</label>
                    </div>
                
                </li>
                <!-- Mechanical skills: Mechanical Identification ends here -->
                <!-- Mechanical Skills: Mechanical Interest sarts here -->

                <li>
                
                    <h3>Which of the following is your choice of work</h3>
                    <img src="./images/im62.jpg" alt="im62" width="600" height="80">
                    
                    <div>
                        <input type="radio" name="question-142-answers" id="question-142-answers-A" value="A" />
                        <label for="question-142-answers-A">1) A </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-142-answers" id="question-142-answers-B" value="B" />
                        <label for="question-142-answers-B">2) B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-142-answers" id="question-142-answers-C" value="C" />
                        <label for="question-142-answers-C">3) C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-142-answers" id="question-142-answers-D" value="D" />
                        <label for="question-142-answers-D">4) D</label>
                    </div>
                
                </li>

                 <li>
                
                    <h3>Which of the following is your choice of work</h3>
                    <img src="./images/im65.jpg" alt="im65" width="600" height="80">
                    
                    <div>
                        <input type="radio" name="question-143-answers" id="question-143-answers-A" value="A" />
                        <label for="question-143-answers-A">1) A</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-143-answers" id="question-143-answers-B" value="B" />
                        <label for="question-143-answers-B">2) B</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-143-answers" id="question-143-answers-C" value="C" />
                        <label for="question-143-answers-C">3) C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-143-answers" id="question-143-answers-D" value="D" />
                        <label for="question-143-answers-D">4) D</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Which of the following is your choice of work</h3>
                    <img src="./images/im66.jpg" alt="im66" width="600" height="80">
                    
                    <div>
                        <input type="radio" name="question-144-answers" id="question-144-answers-A" value="A" />
                        <label for="question-144-answers-A">1) A </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-144-answers" id="question-144-answers-B" value="B" />
                        <label for="question-144-answers-B">2) B </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-144-answers" id="question-144-answers-C" value="C" />
                        <label for="question-144-answers-C">3) C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-144-answers" id="question-144-answers-D" value="D" />
                        <label for="question-144-answers-D">4) D</label>
                    </div>
                
                </li>
                <!-- Mechanical Skills: Mechanical Interest ends here -->

                <!-- Spatial skills section starts here -->

                 <li>
                
                    <h3>Which image can be made from the three shapes shown?</h3>
                    <img src="./images/im13.jpg" alt="im13" width="680" height="380">
                    <div>
                        <input type="radio" name="question-145-answers" id="question-145-answers-A" value="A" />
                        <label for="question-145-answers-A">A) E </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-145-answers" id="question-145-answers-B" value="B" />
                        <label for="question-145-answers-B">B) A</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-145-answers" id="question-145-answers-C" value="C" />
                        <label for="question-145-answers-C">C) C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-145-answers" id="question-145-answers-D" value="D" />
                        <label for="question-145-answers-D">D) D</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Mr. Alex is standing at the Shakespeare Rd, he walks toward Bolivar St. and continues to walk towards the City Bank Building then he walks towards Axo Insurance Building. In which direction he is facing now? </h3>
                    <img src="./images/im18.jpg" alt="im11" width="580" height="480">
                    
                    <div>
                        <input type="radio" name="question-146-answers" id="question-146-answers-A" value="A" />
                        <label for="question-146-answers-A">A) North </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-146-answers" id="question-146-answers-B" value="B" />
                        <label for="question-146-answers-B">B) South-West </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-146-answers" id="question-146-answers-C" value="C" />
                        <label for="question-146-answers-C">C) South</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-146-answers" id="question-146-answers-D" value="D" />
                        <label for="question-146-answers-D">D) East</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Choose the missing one.</h3>
                        <img src="./images/im19.jpg" alt="im19" width="500" height="250"><br>
                        <img src="./images/im20.jpg" alt="im20" width="380" height="280">

                    
                    <div>
                        <input type="radio" name="question-147-answers" id="question-147-answers-A" value="A" />
                        <label for="question-147-answers-A">1) A </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-147-answers" id="question-147-answers-B" value="B" />
                        <label for="question-147-answers-B">2) B </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-147-answers" id="question-147-answers-C" value="C" />
                        <label for="question-147-answers-C">3) C</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-147-answers" id="question-147-answers-D" value="D" />
                        <label for="question-147-answers-D">4) D</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>Fill the missing one.</h3>
                    <img src="./images/im41.jpg" alt="im41" width="510" height="340"><br><br>

                    <div>
                        <input type="radio" name="question-148-answers" id="question-148-answers-A" value="A" />
                        <label for="question-148-answers-A">A)</label>
                        <img src="./images/im42.jpg" alt="im42" width="200" height="150"><br><br>

                    </div>
                    
                    <div>
                        <input type="radio" name="question-148-answers" id="question-148-answers-B" value="B" />
                        <label for="question-148-answers-B">B)</label>
                        <img src="./images/im43.jpg" alt="im43" width="230" height="170"><br><br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-148-answers" id="question-148-answers-C" value="C" />
                        <label for="question-148-answers-C">C)</label>
                        <img src="./images/im44.jpg" alt="im44" width="230" height="170"><br><br>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-148-answers" id="question-148-answers-D" value="D" />
                        <label for="question-148-answers-D">D)</label>
                        <img src="./images/im45.jpg" alt="im45" width="230" height="160"><br><br>
                    </div>
                
                </li>
                
             </ol>
            <div class="btn-container">
            <input type="submit" value="submit" class="input-btn"/>
            </div>
        </form>
    </div>
    </div>
    </div>s
    
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