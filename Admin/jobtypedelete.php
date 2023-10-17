<?php
include("config.php");
if(isset($_GET["jobtypeid"]))
{
    $jobtype=$_GET["jobtypeid"];
    $sql= "DELETE from tbljobtyperegistration WHERE `jobtypeid`='$jobtype'";
mysqli_query($con,$sql);
header("location:jobtypeview.php");
    // $sql=mysqli_query($con,"DELETE FROM tbljobtyperegistration WHERE `jobtypeid`='$jobtype'");
    // $display=mysqli_fetch_array($sql);
    // echo"<script>alert('Deletion Successfull!!'); window.location='jobtypeview.php';</script>";
}
?>