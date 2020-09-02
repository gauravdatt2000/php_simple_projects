<?php
require"settings.php";
//echo($_SESSION["user_name"]);

 if( !isset($_SESSION["user_name"]) ){
    //header('forbidden.php');
    header('location:login.php');
}

else{
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets\forbidden.css">
    <!-- <script src="forbidden.js"></script> -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div><p>> <span>Welcome</span>: "<i><?php echo($_SESSION["user_name"])?></i>"</p>
<p>> <span></span>: "<i>Access Denied. You Do Not Have The Permission To Access This Page On This Server</i>"</p>
<p>> <span>ERROR POSSIBLY CAUSED BY</span>: [<b>execute access forbidden, read access forbidden, write access forbidden, ssl required, ssl 128 required, ip address rejected, client certificate required, site access denied, too many users, invalid configuration, password change, mapper denied access, client certificate revoked, directory listing denied, client access licenses exceeded, client certificate is untrusted or invalid, client certificate has expired or is not yet valid, passport logon failed, source access denied, infinite depth is denied, too many requests from the same client ip</b>...]</p>
<p>> <span>SOME PAGES ON THIS SERVER THAT YOU DO HAVE PERMISSION TO ACCESS</span>: [<a href="/">Home Page</a>, <a href="/">About Us</a>, <a href="/">Contact Us</a>, <a href="/">Blog</a>...]</p><p>> <span>HAVE A NICE DAY SIR AXLEROD :-)</span></p>
</div>


</body>
<script src="assets\forbidden.js"></script>

</html>


<?php
}
?>