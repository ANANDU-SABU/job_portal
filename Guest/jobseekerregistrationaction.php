<?php
include("config.php");
session_start();

$jobseekername=$_POST['txtjobseekernname'];
$gender=$_POST['txtgender'];
$email=$_POST['txtemail'];
$contactno=$_POST['txtcontactno'];
$dob=$_POST['txtdob'];
$qualification=$_POST['txtqualification'];
$experence=$_POST['txtexperence'];
$district=$_POST['drpdistrictid'];
$locationid=$_POST['drplocationid'];
$pincode=$_POST['txtpincode'];

$sql2=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tbljobseeker");
$display=mysqli_fetch_array($sql2);
$id=$display['count'];
$password="$jobseekername@$id";

$sql=mysqli_query($con,"SELECT  count(*) as count FROM tbljobseeker WHERE email='$email'");
$rowset=mysqli_fetch_array($sql);
if($rowset['count']>0)
{
	echo "<script>alert('jobseeker Details already exist'); window.location='jobseekerregistration.php'</script>";
}
else
{

// $password=$_POST['txtpassword'];
$sql=mysqli_query($con,"insert into tbljobseeker(jobseekername,gender,email,contactno,dob,qualification,experence,districtid,locationid,pincode,password)
values('$jobseekername','$gender','$email','$contactno','$dob','$qualification','$experence','$district','$locationid','$pincode','$password')");



$result = mysqli_query($con,$sql);
$bodyContent="Dear $jobseekername, Your account has been successfully created, Please login using the username $jobseekername and Password $password";
$mailtoaddress=$email;
require('Mailtemplate.php'); 
echo"<script>alert('Jobseeker Details Saved Successfully!!'); window.location='jobseekerlogin.php'</script>";

}
?>
