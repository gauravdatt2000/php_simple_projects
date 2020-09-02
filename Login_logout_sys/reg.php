<?php
require"settings.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets\style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up!!</title>
</head>
<body>


<!-- <form action="reg.php" method="post">
<br>
Username: <input type="text" name="usr_r" required><br>
<br>
E-mail id: <input type="text" name="email_r" required><br>
<br>
Password: <input type="password" name="pas1_r" required><br>
<br>
Confirm Password: <input type="password" name="pas2_r" required><br>
<br>
<button type="submit" name="sub_r">Submit</button>
</form> -->

<form action="reg.php" method="post">
    
    <div class="login-box">
      <h1>Sign-Up</h1>


      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="usr_r" required placeholder="Username"> 
      </div>

      <div class="textbox">
      <i class="far fa-envelope"></i>
        <input type="email" name="email_r" required placeholder="Email"> 
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="pas1_r" required placeholder="Password">
      </div>

      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="pas2_r" required placeholder="Confirm Password">
      </div>

      <button type="submit" name="sub_r" class="btn">Submit</button>

      <!-- <input type="button" class="btn" value="Sign in"> -->
    </div>

  </form>




</body>
</html>
<?php

reg();
//testing();
?>