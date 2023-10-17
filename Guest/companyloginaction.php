<?php
session_start();
include("config.php");
$email=$_POST["txtemail"];
$password=$_POST["txtpassword"];
$sql=mysqli_query($con,"Select * from tblcompanyregistration where email='$email' and password='$password'");
$row=mysqli_fetch_array($sql);
if($row>0)
{
$_SESSION['company']=$row['companyid'];
header("Location:http:../Company/index.php");
}
else
{
    echo "<script>alert('Invalid email or Password'); windos.location='..Guest/index.php'</script> ";
}
?>