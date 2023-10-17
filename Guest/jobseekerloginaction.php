<?php
session_start();
include("config.php");
$email=$_POST["txtemail"];
$password=$_POST["txtpassword"];
$sql = mysqli_query($con,"select * from tbljobseeker where email = '$email' and password = '$password'");  
 
$result = mysqli_fetch_array($sql);
  
if($result>0)
{  
    // $_SESSION["jobseekerid"]=$result["jobseekerid"];
    $_SESSION['jobseekerid']=$result['jobseekerid'];

    echo $_SESSION['jobseekerid'];
     header("Location:../job seeker/index.php");
}  
else
{  
   
    echo "<script>alert('Invalid email or Password'); windos.location='..Guest/jobseekerlogin.php'</script> ";
}     
?>  
