<html>
   <head>
      <title>REGISTRATION</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      
      <div class="form-container">
         <div class="form">
      <h2>REGISTER HERE</h2>
      <form action="regdone.php" method="post">
         <label>First Name:</label>
         <input name="firstname" placeholder="firstname" type="text" required>

         <label>Last Name :</label>
         <input name="lastname" placeholder="lastname" type="text" required>
         <p>Please select your gender:</p>
         <label for="male">Male</label>
         <input type="radio" id="male" name="gender" value="male">
         <label for="female">Female</label>
         <input type="radio" id="female" name="gender" value="female">
         <label for="other">Other</label> 
         <input type="radio" id="other" name="gender" value="other"><br><br>
          
         
         <label>Age:</label>
         <input name="age" placeholder="age" type="text" required>

         <label>Class:</label>
         <input name="class" placeholder="class" type="text" required>

         <label>Section:</label>
         <select id="section" name="sec">
         <option value="A">A</option>
         <option value="B">B</option>
         <option value="C">C</option>
         <option value="D">D</option>
         <option value="E">E</option>
         <option value="F">F</option>
         <option value="G">G</option>
<option value="H">H</option>
<option value="I">I</option>
<option value="J">J</option>
<option value="K">K</option>
<option value="L">L</option>
<option value="M">M</option>
<option value="N">N</option>
<option value="O">O</option>
<option value="P">P</option>
<option value="Q">Q</option>
<option value="R">R</option>
<option value="S">S</option>
<option value="T">T</option>
<option value="U">U</option>
<option value="V">V</option>
<option value="W">W</option>
<option value="X">X</option>
<option value="Y">Y</option>
<option value="Z">Z</option>

         
         </select>


         <label>Email ID:</label>
         <input name="email" placeholder="Email ID" type="text" required>

         <label>Registration/Mobile No:</label>
         <input name="mobile" placeholder="mobile" type="text" required>

         <label>School Name:</label>
         <select id="schoolname" name="schoolname">
         <option value="MRIS 51 Gurugram">MRIS 51 Gurugram</option>
         <option value="MRISCW">MRISCW</option>
         <option value="MRIS 14">MRIS 14</option>
         <option value="MRIS NOIDA">MRIS NOIDA</option>
         <option value="MRIS 46,GURUGRAM">MRIS 46,GURUGRAM</option>
         <option value="other">other</option>
         </select>

         <label>Password:</label>
         <input name="password" placeholder="password" type="password" required>

         <input name="submit" type="submit" value=" Login ">

      <span><?php if(!empty($error)){echo $error; }?></span>
   </form>
   </div>
</div>
   </body>
</html>


?>