<?php
include("config.php");
$companyname=$_POST["txtcompanyname"];
$description=$_POST["txtdescription"];

$sql2=mysqli_query($con,"select count(*) as count from tblcompanytyperegistration where companytypename='$companyname'");
 //echo  "select count(*) as count from tblcompanytyperegistration where companytypename='$companyname'";
$display2=mysqli_fetch_array($sql2);
if($display2[0]==1)
{
    echo "<script>alert('Already Exists!!!');window.location='companytypeview.php'</script>";
}
else
{
$sql=mysqli_query($con,"insert into tblcompanytyperegistration(companytypename,description)values('$companyname','$description')");
 //echo"insert into tblcompanytyperegistration(companytypename,description)values('$companyname','$description')";
 echo"<script>alert('companytyperegistration Details Saved Successfully!!'); window.location='companytypeview.php'</script>";
}
?>