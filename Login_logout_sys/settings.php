<?php
session_start();
//$_SESSION["default"]="default";
if (isset($_POST['l1']))
{logout();
}
function reg(){
     if(isset($_POST['sub_r'])){
         if(isset($_POST['usr_r']) and isset($_POST['pas1_r']) and isset($_POST['pas2_r']) and ($_POST['pas2_r']==$_POST['pas1_r']) ){
/*sql */
$con=mysqli_connect("localhost","root","","login");
if($con){
    $p1=$_POST['usr_r'];
    $p2=$_POST['pas1_r'];
    $p3=$_POST['email_r'];
    // $templl="VALUES ($_POST[usr_r],$_POST[pas1_r],0);";
    $qr="INSERT INTO persons (username , temp_pass,email)
    VALUES ('$p1','$p2','$p3');
    ";
    if(mysqli_query($con,$qr)){  
        //echo "New record created successfully";
        ?>
        <script>
            location.replace("login.php")
            window.alert("Your Account has been created  successfully");
        </script>
<?php
//sleep(3);
//header('location:login.php');
    }
    else{
        echo "Error: " . $qr . "<br>" . mysqli_error($con);
    }
    mysqli_close($con);
    }
    else{
        die("connection failed ".mysqli_connect_error() );
    }

/*sql*/

         }
         else{
             echo" something is missing please fill it again";
         }
     }
 }

 

 function auth(){
    $con=mysqli_connect("localhost","root","","login");
     $temp1=$_POST['usr'];
     $temp2=$_POST['pas'];
     $temp3="select * from persons where username='".$temp1."' AND temp_pass='".$temp2."'limit 1";
     //echo($temp3);
     $result=mysqli_query($con,$temp3);
     //echo($result);
     $row = mysqli_fetch_array($result);

     if($row){
         
     if($row["username"]==$temp1 && $row["temp_pass"]==$temp2)
     {$_SESSION["user_name"] = $temp1;
        header('location:dashboard.php');
         //echo"You are a validated user.";
    }

     }
     else
     {
         ?>
         <script>
             window.alert("Sorry, your credentials are not valid, Please try again.");
         </script>
    <?php
    }
 }


function OTP() {
    $n=8; 
   $generator = "1357902468"; 
   $result = ""; 
   for ($i = 1; $i <= $n; $i++) { 
       $result .= substr($generator, (rand()%(strlen($generator))), 1); 
   }
   return $result; 
}

 function submit(){
     if(isset($_POST['sub'])){
         if(isset($_POST['usr']) and isset($_POST['pas']) ){
             auth();
         }
         else{
             echo" error";
         }
     }
 }
 function verify($to){
    //$to = "gauravdatt2000@gmail.com";
    $mm=OTP();
    $con=mysqli_connect("localhost","root","","login");
    if($con){
        $qr="UPDATE persons
         SET otp='".$mm."' WHERE email='".$to."' limit 1";
         if(mysqli_query($con,$qr)){               
    $subject = "verfication otp";
    $message = "<b>This is automated verfication.</b>";
    $message .= "<h1>Verification OTP- ".$mm."</h1>";
    $header = "From:abc@somedomain.com \r\n";
    $header .= "Cc:afgh@somedomain.com \r\n";
    $header .= "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html\r\n";
    $retval = mail ($to,$subject,$message,$header);
    if( $retval) {
       echo "Message sent successfully , otp is send on your mail id...";
    }else {
       echo "Message could not be sent...";
    }


        }
        /*
        UPDATE Customers
SET ContactName='Alfred Schmidt', City='Frankfurt'
WHERE CustomerID=1;
        */
    
    mysqli_close($con);
    }
    else{
        echo"database not connected";
    }
    return $mm;
   }
   function logout(){
         session_unset();
         session_destroy();
         header('location:login.php');
   }
   function valid_pass($p1,$p2){
       /*
       1.password is ok
       0.password is not matching
       2.password is short
        */
        if($p1!=$p2){
            return 0;
        }
        else if(strlen($p1)<8 or strlen($p2)<8){
            return 2;
        }
       else if($p1==$p2  and strlen($p1)>=8){
           return 1;
       }  
   }
?>