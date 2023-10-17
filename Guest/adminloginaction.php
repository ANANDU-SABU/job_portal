<?php  
include("config.php");
$username=$_POST["txtusername"];
$password=$_POST["txtpassword"];
$sql=mysqli_query($con,"Select * from tbladminlogin");
$row=mysqli_fetch_array($sql);
if(($row[1]==$username && $row[2]==$password))
{
header("Location: ../Admin/index.php");
}
else 
{
echo "invalid user";
}
?>