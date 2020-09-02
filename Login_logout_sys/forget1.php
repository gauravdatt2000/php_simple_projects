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

      <h1>Enter your Email</h1>
      <div class="textbox">
      <i class="far fa-envelope"></i>
        <input type="email" name="E1_Email" placeholder="Enter your Email." required> 
      </div>

      <!-- <input type="button" class="btn" name="E1_Confirm" value="Confirm"> -->
      <button type="submit" name="E1_Confirm" class="btn">Confirm</button>
    </div>

  </form>
</body>
<?php
if(isset($_POST["E1_Confirm"]) and isset($_POST["E1_Email"])){

    $con=mysqli_connect("localhost","root","","login");
    $temp1=$_POST["E1_Email"];
    $temp2="select * from persons where email='".$temp1."';";
    $result=mysqli_query($con,$temp2);
    $row = mysqli_fetch_array($result);

    if($row and $row["email"]==$temp1){
        verify($temp1);
        $_SESSION["temp"]=$temp1;
        header('location:forget2.php');
    }
    else{
        ?>
        <script>
            window.alert("Invalid Email");
        </script>

        <?php
    }
}
?>
</html>