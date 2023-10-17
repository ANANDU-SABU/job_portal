<?php
include("config.php");
$jobtypename=$_POST["txtjobtypename"];
$description=$_POST["txt_description"];
$sql=mysqli_query($con,"insert into tbljobtyperegistration(jobtypename,description)values('$jobtypename','$description')");
// echo"insert into tblcompanytyperegistration(companyname,description)values('$companyname','$description')";
echo"<script>alert('Job Type Registration Details Saved Successfully!!'); window.location='jobtypeview.php'</script>";
?>