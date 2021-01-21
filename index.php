<?php
include('login.php');

?>
<!DOCTYPE html>
<html>
   <head>
      <title>EXAM</title>
      <link href="style.css" rel="stylesheet" type="text/css">
   </head>
   <body>
      

      <div class="form-container">
      
      <form action="" method="post">
         <h2>Login Form</h2>
         <label>UserName :</label>
         <input id="name" name="username" placeholder="username" type="text">
         <label>Password :</label>
         <input id="password" name="password" placeholder="**********" type="password">
         <input name="submit" type="submit" value=" Login ">
      <span><?php if(!empty($error)){echo $error; }?></span>
   </form>
   </div>
   </body>
</html>

