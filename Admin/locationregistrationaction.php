<?php
include("config.php");
session_start();
$locationname=$_POST['txtlocationname'];
$district= $_SESSION['district'];
$sql=mysqli_query($con,"insert into tbllocation(locationname,districtid)values('$locationname','$district')");
// echo"insert into tbllocation(locationname,districtid)values('$locationname','$district')";
echo"<script>alert('location Details Saved Successfully!!');window.location='locationview.php'</script>";
?>
