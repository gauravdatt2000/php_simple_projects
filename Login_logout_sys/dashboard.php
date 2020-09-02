<?php
require"settings.php";
//echo($_SESSION["user_name"]);

if( !isset($_SESSION["user_name"]) ){
    //header('forbidden.php');
    header('location:forbidden.php');
}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets\forbidden.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <!-- <form action="" method="post">
    <input type="submit" name="l1" value="Logout">
    </form> -->

<div><p>> <span>Welcome</span>: <i><?php echo($_SESSION["user_name"])?></i></p>
<p>> <span>HERE I HAVE CAME TO AN END OF MY ASSIGNMENT NO 5! VOLA</span></p>
<p>> <span>You can follow me on my </span>:
<i> <a href="https://www.instagram.com/_gaurav_datt__/">Instagram</a>
<i> <a href="https://github.com/gauravdatt2000">Github</a>
 <i></p>
<p>> <span>YOU CAN logout by clicking on the </span>:<i> <a href="http://localhost/ass5_back/logout.php">bye-bye!</a> <i></p>
</div>

</p>

</body>
<script src="assets\forbidden.js"></script>
</html>

<?php
}
?>