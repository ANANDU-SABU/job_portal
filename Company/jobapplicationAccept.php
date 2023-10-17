<?php
                        include("config.php");
                        if (isset($_GET["jobapplyid"])) 
                        {
                            $jobapplyid = $_GET["jobapplyid"];
                            $sql = mysqli_query($con, "Update  tbljobapply set `requeststatus`='Accepted' WHERE jobapplyid='$jobapplyid'");
                            echo"<script> alert('Application Accepted');window.location='jobpostapplications.php'</script>";
                        }
                       
?>