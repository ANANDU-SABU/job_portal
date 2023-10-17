<?php
session_start();
    include("header2.php");
    ?>
<section class="banner-bottom-wthree py-lg-10 py-md-5 py-3" style="background-color: #c0c0c040">
        <div class="container">
            

                <?php
            include("config.php");
            $jobvaccancyid=$_GET["jobvaccancyid"];
            // $jobtypeid=$_SESSION['jobtypeid'];
            $company_id=$_SESSION['company_id'];

            $sql=mysqli_query($con,"SELECT * FROM tbljobpost v 
            inner join tblcompanyregistration c on v.companyid=c.companyid 
            inner join tbljobtyperegistration t on v.jobtypeid=t.jobtypeid WHERE v.jobpostid='$jobvaccancyid' 
            and c.companyid='$company_id'  ");

             
            while($display=mysqli_fetch_array($sql))
            {
             
            

                ?> 
          
                <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <img src="../Guest/images/<?php echo $display["logo"]?>"  style="height:150px;width:150px;" alt=" " class="img-fluid rounded-circle">
                                 </div>
                             </div>
                        </div>
                 </div>
         <div class="inner-sec-w3ls py-lg-12  py-3">
            <h3 class="tittle text-center mb-lg-5 mb-3" style="margin-top: -110px;">

                    <span>Some Info</span><?php echo $display["companyname"]?></h3>
              

                    <div class="card-deck">
                        
                        <div class="card">
                        
                            <!-- <img src="images/g2.jpg" alt="Card image cap" class="img-fluid card-img-top"> -->
                            <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                            <h3 class="tittle   mb-lg-5 mb-3">
                            <span>Vacancy details</span></h3>
                                <u><h5 class="card-title"><?php echo $display["jobtypename"]?>  </h5></u> 
                                <h5 class="card-title"><?php echo $display["experience"]?> of experiance needed   </h5>
                                <h5 class="card-title">Qualifications:<?php echo $display["qualification"]?>  </h5>
                                <h5 class="card-title">Age limit:<?php echo $display["agelimit"]?>  </h5>
                                <h5 class="card-title">Due date:<?php echo $display["applydate"]?> </h5>
                                
                               

            </div>
            <div class="col-md-6" >
            <h5 class="card-title">Company details </h5>
                                <p class="card-text"></p>
                                <p class="card-text"><?php echo $display["companyname"]?>  </p>
                                <p class="card-text"><?php echo $display["companyaddress"]?> </p>
                                <p class="card-text"><?php echo $display["contactnumber"]?> </p>
                                <p class="card-text"><?php echo $display["email"]?> </p>
                                <!-- <p class="card-text"><?php echo $display["contact"]?> </p>
                                <p class="card-text"><?php echo $display["website_url"]?> </p>
                                <p class="card-text"><?php echo $display["description"]?> </p> -->

                            </div>
            </div>
            </div>
                           
                            <div class="card-footer">
                                <form action="jobapply.php" method="POST"  enctype="multipart/form-data">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="inputfield">
                                                <h3 class="tittle   mb-lg-5 mb-3"> <span>Upload Your Bio Data</span></h3>
                                                <input type="file" name="file"  class="input" required>
                                                <input type="hidden" name="jobvaccancyid" value="<?php echo $display['jobpostid'];?>" class="input" required>
                                            </div>
                                        </div>
                                         <div class="col-md-6">
                                             <button name="submit" class="btn-danger" type="submit" style="height:60px;width:250px;">Apply Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
            <?php
            }
            ?>
                        
                 </div>
            </div>
        </div>
    </section>
    <?php
    include("footer.php");
    ?>