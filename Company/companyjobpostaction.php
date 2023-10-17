<?php
include("config.php");
session_start();


$jobname=$_POST['drpjobtypeid'];
$postdate=date("Y-m-d");
$applydate=$_POST['duedate'];
$qualification=$_POST['txtqualification'];
$agelimit=$_POST['txtagelimit'];
$salary=$_POST['salary'];
$experience=$_POST['txtexperience'];
$no_of_Vacancies=$_POST['no_of_Vacancies'];
$description=$_POST['criteria'];
$company=$_SESSION['company'];




$sql=mysqli_query($con,"INSERT INTO `tbljobpost`( `companyid`, `jobtypeid`, `postdate`, `applydate`, `no-of-vacancies`, `qualification`, `agelimit`, `experience`, `criteria`, `salary`, `poststatus`) 
                                        VALUES ('$company','$jobname','$postdate','$applydate','$no_of_Vacancies','$qualification','$agelimit','$experience','$description','$salary','Active')");

echo"<script> alert('Job post Registration Sucessfull');window.location='jobvacancyview.php'</script>";

// echo "<script>alert('Job post Registration Sucessfull');windos.location='jobvacancyview.php'</script> ";

// echo "<script>alert(''); windos.location='jobvacancyview.php'</script> ";







?>
