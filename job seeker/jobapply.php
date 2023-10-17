<?php
session_start();
include("config.php");
$jobpostid=$_POST["jobvaccancyid"];
$seeker_id=$_SESSION['jobseekerid'];
$requested_date=date('y/m/d');

        $loc="File/";
		$file=$_FILES['file']['name'];
		move_uploaded_file($_FILES['file']['tmp_name'],$loc.$file);






$company_id=$_SESSION['company_id'];


$save=mysqli_query($con,"INSERT INTO `tbljobapply`(`jobseekerid`, `jobpostid`, `upload_cv`, `requestdate`, `requeststatus`) 
VALUES ('$seeker_id','$jobpostid','$file','$requested_date','Applayed')");
// echo "INSERT INTO `tbljobapply`(`jobseekerid`, `jobpostid`, `upload_cv`, `requestdate`, `requeststatus`) 
// VALUES ('$seeker_id','$jobpostid','$file','$requested_date','Applayed'";
 echo "<script>alert('Successfully applied!!!'); window.location='jobtypeview.php'</script>";

?>
 
