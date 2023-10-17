
<?php
include("config.php");

         
$postId = $_GET["postId"];
$jobType = $_POST["drpjobtypeid"];
$qualification = $_POST["txtqualification"];
$ageLimit = $_POST["txtagelimit"];
$exp = $_POST["txtexperience"];
$ddate = $_POST["duedate"];
$salary = $_POST["salary"];
$vacancies = $_POST["no_of_Vacancies"];
$criteria = $_POST["criteria"];

            //   $sql2=mysqli_query($con,"select count(*) as count from tbljobtyperegistration where jobtypename='$jobtypename' ");
            //   $display2=mysqli_fetch_array($sql2);
            //   if($display2['count']>0)
            //   {
            //       echo "<script>alert('Already Exists!!!');window.jobtype='jobtypeView.php'</script>";
            //   }
            //   else
              {
                  $sql=mysqli_query($con,"UPDATE `tbljobpost` SET `jobtypeid`='$jobType',`postdate`='$ddate',`no-of-vacancies`='$vacancies',
                  `qualification`='$qualification',`agelimit`='$ageLimit',`experience`='$exp',`criteria`='$criteria',`salary`='$salary'
                   WHERE `jobpostid` = '$postId'");
                //    echo "UPDATE `tbljobpost` SET `jobtypeid`='$jobType',`postdate`='$ddate',`no-of-vacancies`='$vacancies',
                //    `qualification`='$qualification',`agelimit`='$ageLimit',`experience`='$exp',`criteria`='$criteria',`salary`='$salary'
                //     WHERE `jobpostid` =$postId";
                  
                  if($sql)
                  {
                      echo "<script>alert('jobtype Details Updated Succesfully!!');window.location='jobvacancyview.php'</script>";
                  }
              }
          

?>