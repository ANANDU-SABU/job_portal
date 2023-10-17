<?php
include("config.php");
session_start();

$companyname=$_POST['txtcompanyname'];
$loc="images/";
 $companytypeid=$_POST['txtcompanytypeid'];
    $logo=$_FILES['txtlogo']['name'];
    move_uploaded_file($_FILES['txtlogo']['tmp_name'],$loc.$logo);
$contactno=$_POST['txtcontactnumber'];
$about=$_POST['txtabout'];
$email=$_POST['txtemail'];
$companyaddress=$_POST['txtcompanyaddress'];
$districtid=$_POST['drpdistrict'];
$locationid=$_POST['drplocationid'];
$pincode=$_POST['txtpincode'];
//  $password=$_POST['txtpassword']; 
// $status=$_POST['txtstatus'];

$sql2=mysqli_query($con,"SELECT ifnull(count(*),0)+11 as count FROM tblcompanyregistration");
$display=mysqli_fetch_array($sql2);
$id=$display['count'];
$password="$companyname@$id";

$sql=mysqli_query($con,"SELECT  count(*) as count FROM tblcompanyregistration WHERE email='$email'");
$rowset=mysqli_fetch_array($sql);
if($rowset['count']>0)
{
	echo "<script>alert('company Details already exist'); window.location='companyregistration.php'</script>";
}
else
{



$sql=mysqli_query($con,"insert into tblcompanyregistration(companyname,companytypeid,logo,contactnumber,about,email,companyaddress,districtid,locationid,pincode,password,status)
values('$companyname','$companytypeid','$logo','$contactno','$about','$email','$companyaddress','$districtid','$locationid','$pincode','$password','Active')");
// echo "insert into tblcompanyregistration(companyname,logo,contactnumber,about,email,companyaddress,districtid,locationid,pincode,password,status)
// values('$companyname','$logo','$contactno','$about','$email','$companyaddress','$districtid','$locationid','$pincode','$password','Active')";

$result = mysqli_query($con,$sql);
$bodyContent="Dear $companyname, Your company has been successfully registered, Please login using the username $companyname and Password $password";
$mailtoaddress=$email;
require('Mailtemplate.php'); 


echo"<script>alert('company registered  Successfully!!' ); window.location='companylogin.php' </script>";



}

?>