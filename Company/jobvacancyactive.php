<?php
                        include("config.php");
                        if (isset($_GET["jobpostid"])) 
                        {
                            $jobpost_id = $_GET["jobpostid"];
                            $sql = mysqli_query($con, "Update  tbljobpost set `poststatus`='Active' WHERE jobpostid='$jobpost_id'");
                        }
                        echo"<script> window.location='jobvacancyview.php'</script>";
?>