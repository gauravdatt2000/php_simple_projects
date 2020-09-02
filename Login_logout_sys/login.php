<?php
require"settings.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets\style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login!!!</title>
</head>
<body>

<form action="" method="post">
    
    <div class="login-box">
      <h1>Login</h1>

      <div class="textbox">
        <i class="fas fa-user"></i>
        <input type="text" name="usr" placeholder="Username"> 
      </div>
    
      <div class="textbox">
        <i class="fas fa-lock"></i>
        <input type="password" name="pas" placeholder="Password">
      </div>

      <button type="submit" name="sub" class="btn">Submit</button>
    </div>

  </form>

</body>

</html>

<?php
submit();
?>