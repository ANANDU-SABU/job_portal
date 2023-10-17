<?php
                        include("config.php");
                        if (isset($_GET["jobapplyid"])) 
                        {
                            $jobapplyid = $_GET["jobapplyid"];
                            $sql = mysqli_query($con, "Update  tbljobapply set `requeststatus`='Rejected' WHERE jobapplyid='$jobapplyid'");
                        //    echo" Update  tbljobapply set `remark`='Reject' WHERE jobpost_id='$jobapplyid'";
                             echo"<script>alert('Application Rejected');window.location='jobpostapplications.php'</script>";
                        }
                       
?>