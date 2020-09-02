<?php
require"settings.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="assets\style.css">
</head>

<body>
  <form action="" method="POST">
    <div class="login-box">
      <h1>Reset Password</h1>
      <div class="textbox">
      <i class="fas fa-lock"></i>
        <input type="text" name="C11" placeholder="New Password" required> 
      </div>

      <div class="textbox">
      <i class="fas fa-lock"></i>
        <input type="text" name="C12" placeholder="Confirm Password." required> 
      </div>

      <button type="submit" name="C11_Confirm" class="btn">Submit</button>
      
    </div>
  </form>
  <?php
  if(isset($_POST["C11"]) and isset($_POST["C12"]) and isset($_POST["C11_Confirm"]) ){
  //check password ;
  $phi=valid_pass($_POST['C11'] , $_POST['C11']);
  if($phi==1){
      //if password is correct;password reset confirm query ;session_destroy;redirrect to sign ;
      $con=mysqli_connect("localhost","root","","login");
      $qr="UPDATE persons
         SET temp_pass='".$_POST['C11'] ."' WHERE email='".$_SESSION["temp"]."' limit 1";
         if(mysqli_query($con,$qr)){
            session_unset();
            session_destroy();
            header('location:login.php');
         }

    }
    else if($phi==0){
        ?>
        <script>
            window.alert("Your password is not matching");
        </script>
        <?php


    }
    else if($phi==2){
        ?>
        <script>
            window.alert("Your password length should be minimum of 8 character!");
        </script>
        <?php
    }
  //
}
  ?>
</body>
</html>