<?php
include("config.php");
if(isset($_GET["companyid"]))
{
    $company=$_GET["companyid"];
//     $sql= "DELETE from tblcompanytyperegistration WHERE `companyid`='$company'";
// mysqli_query($con,$sql);
// header("location:companytypeview.php");
    $sql=mysqli_query($con,"DELETE FROM tblcompanytyperegistration WHERE `companytypeid`='$company'");
    // echo"DELETE FROM tblcompanytyperegistration WHERE `companytypeid`='$company'";
    // $display=mysqli_fetch_array($sql);
    mysqli_query($con,$sql);
    echo"<script>window.location='companytypeview.php';</script>";
}
?>