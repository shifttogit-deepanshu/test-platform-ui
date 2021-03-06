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
		<form action="quiz17res.php" method="POST" id="mcq1">
            <ol start="128">
                <!-- Numerical skills: Numerical ability reasoning q128 to q130 -->
                <li>
                    
                    <h3>Which of the following is a prime number?</h3>
                    <div>
                        <input type="radio" name="question-128-answers" id="question-128-answers-A" value="A" />
                        <label for="question-128-answers-A">A) 4 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-128-answers" id="question-128-answers-B" value="B" />
                        <label for="question-128-answers-B">B) 18</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-128-answers" id="question-128-answers-C" value="C" />
                        <label for="question-128-answers-C">C) 19</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-128-answers" id="question-128-answers-D" value="D" />
                        <label for="question-128-answers-D">D) 40</label>
                    </div>
                
                </li>

                <li>
                    <h3>Express 4% as a decimal?.</h3>
                    
                    <div>
                        <input type="radio" name="question-129-answers" id="question-129-answers-A" value="A" />
                        <label for="question-129-answers-A">A) 4/25 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-129-answers" id="question-129-answers-B" value="B" />
                        <label for="question-129-answers-B">B) 1/25</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-129-answers" id="question-129-answers-C" value="C" />
                        <label for="question-129-answers-C">C) 1/500</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-129-answers" id="question-129-answers-D" value="D" />
                        <label for="question-129-answers-D">D) 14/25</label>
                    </div>
                
                </li>


                <li>
                    <h3>What is 10% of 200?</h3>
                    
                    <div>
                        <input type="radio" name="question-130-answers" id="question-130-answers-A" value="A" />
                        <label for="question-130-answers-A">A) 10 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-130-answers" id="question-130-answers-B" value="B" />
                        <label for="question-130-answers-B">B) 15</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-130-answers" id="question-130-answers-C" value="C" />
                        <label for="question-130-answers-C">C) 20</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-130-answers" id="question-130-answers-D" value="D" />
                        <label for="question-130-answers-D">D) 2000</label>
                    </div>
                
                </li>
                <!-- Numerical skills: Numerical Ability Reasoning section ends here -->
                <!-- Numerical skills: Numerical skills logic begins here Q131 only -->

                <li>
                    
                    <h3>Insert the Missing number: 2,4,12,48,240,(...).</h3>
                    
                    <div>
                        <input type="radio" name="question-131-answers" id="question-131-answers-A" value="A" />
                        <label for="question-131-answers-A">A) 1140 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-131-answers" id="question-131-answers-B" value="B" />
                        <label for="question-131-answers-B">B) 1090</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-131-answers" id="question-131-answers-C" value="C" />
                        <label for="question-131-answers-C">C) 1470</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-131-answers" id="question-131-answers-D" value="D" />
                        <label for="question-131-answers-D">D) 1520</label>
                    </div>
                </li>

                <!-- Numerical skills: Estimation begins here Q132 to Q134 -->
            
                <li>
                
                    <h3>1505 x 60.</h3>
                    
                    <div>
                        <input type="radio" name="question-132-answers" id="question-132-answers-A" value="A" />
                        <label for="question-132-answers-A">A) 90,000 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-132-answers" id="question-132-answers-B" value="B" />
                        <label for="question-132-answers-B">B) 80,000</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-132-answers" id="question-132-answers-C" value="C" />
                        <label for="question-132-answers-C">C) 10,000</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-132-answers" id="question-132-answers-D" value="D" />
                        <label for="question-132-answers-D">D) 70,000</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>5.6 + 8.9 + 2.1 + 3.3 + 2.8 = ?</h3>
                    
                    <div>
                        <input type="radio" name="question-133-answers" id="question-133-answers-A" value="A" />
                        <label for="question-133-answers-A">A) 24 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-133-answers" id="question-133-answers-B" value="B" />
                        <label for="question-133-answers-B">B) 23</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-133-answers" id="question-133-answers-C" value="C" />
                        <label for="question-133-answers-C">C) 32</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-133-answers" id="question-133-answers-D" value="D" />
                        <label for="question-133-answers-D">D) 34</label>
                    </div>
                
                </li>

                <li>
                
                    <h3>8 + 2 x 3 + 5 = ?</h3>
                    
                    <div>
                        <input type="radio" name="question-134-answers" id="question-134-answers-A" value="A" />
                        <label for="question-134-answers-A">A) 20 </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-134-answers" id="question-134-answers-B" value="B" />
                        <label for="question-134-answers-B">B) 16</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-134-answers" id="question-134-answers-C" value="C" />
                        <label for="question-134-answers-C">C) 30</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-134-answers" id="question-134-answers-D" value="D" />
                        <label for="question-134-answers-D">D) 25</label>
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