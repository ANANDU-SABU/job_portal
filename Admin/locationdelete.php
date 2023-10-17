<?php
include("config.php");
if(isset($_GET["locationid"]))
{
$location=$_GET["locationid"];
$sql= "DELETE from tbllocation WHERE `locationid`='$location'";
mysqli_query($con,$sql);
header("location:locationview.php");
#$display=mysqli_fetch_array($sql);
// echo"<script>alert('deletion successfully!!');window.location='locationview.php';</script>";
}
 ?>