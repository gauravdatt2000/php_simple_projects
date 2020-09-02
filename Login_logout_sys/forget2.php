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

      <h1>Verify Otp</h1>
      <div class="textbox">
      <i class="fas fa-lock"></i>
        <input type="text" name="E2_Otp" placeholder="Verify your Otp." required> 
      </div>
      
      <button type="submit" name="E21_Confirm" class="btn">Confirm</button>
      <!-- <input type="button" class="btn" value="Confirm"> -->
      
    </div>

  </form>
  <?php
if(isset($_POST["E21_Confirm"]) and isset($_POST["E2_Otp"])){
    //$ab=$_SESSION["temp"];
   // echo("<h1>$ab</h1>");
    $con=mysqli_connect("localhost","root","","login");
    //echo"working";
    $temp1=$_SESSION["temp"];
    $temp3=$_POST["E2_Otp"];
    $temp2="select * from persons where email='".$temp1."'and  otp='".$temp3."';";
    $result=mysqli_query($con,$temp2);
    $row = mysqli_fetch_array($result);
    
    if($row and $row["email"]==$temp1){
        header('location:forget3.php');
    }
    else{
        ?>
        <script>
            window.alert("Invalid Otp");
        </script>
        
        <?php
        header('location:forget2.php');
    }
}
?>
</body>
</html>