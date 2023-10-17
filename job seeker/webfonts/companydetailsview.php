<?php
session_start();
include("header2.php");
?>

<section class="banner-bottom-wthree pb-lg-5 pb-md-4 pb-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
			<!---728x90--->
                <h3 class="tittle text-center mb-lg-4 mb-3">
			
                    <span></span> company vacancies</h3>
					<!---728x90--->
                <div class="tabs mt-5">
                    <ul class="nav nav-pills my-4" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"> company vacancies</a>
                        </li>


                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <div class="menu-grids mt-4">
                                <div class="row t-in">
                                    <div class="col-lg-10 text-info-sec">
                                        <!--/job1-->


                                        <?php
            include("config.php");
            $jobtypeid=$_GET["companyid"];
            $sql=mysqli_query($con,"SELECT * FROM tbljobpost v
            inner join tblcompanyregistration c on v.companyid=c.companyid 
            inner join tbljobtyperegistration t on v.jobtypeid=t.jobtypeid WHERE  v.poststatus='Active' and v.jobtypeid='$jobtypeid' ");
          
           
            while($display=mysqli_fetch_array($sql))
            {
                $_SESSION['jobtypeid']=$display['jobtypeid'];
                $_SESSION['company_id']=$display['companyid'];
            

                ?> 
                                        <div class="job-post-main row">
                                            <div class="col-md-9 job-post-info text-left">
                                                <div class="job-post-icon">
                                                    <i class="fas fa-briefcase"></i>
                                                </div>
                                                <div class="job-single-sec">
                                                    <h4>
                                                        <a href="#"><?php echo $display["companyname"]?></a>
                                                    </h4>
                                                    <p class="my-2"><?php echo $display["jobtypename"]?></p>
                                                    <ul class="job-list-info d-flex">
                                                        <li>
                                                            <i class="fas fa-briefcase"></i><?php echo $display["postdate"]?></li>
                                                        <li>
                                                            
                                                        <li>
                                                            <!-- <i class="fas fa-dollar-sign"></i> </i><?php echo $display["salary"]?>.00</li> -->
                                                    </ul>
                                                </div>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="col-md-3 job-single-time text-right">
                                                <span class="job-time">
                                                    <!-- <i class="far fa-heart"></i> Full Time</span> -->
                                                <a href="viewmorevaccancy.php?jobvaccancyid=<?php echo $display['jobpostid'];?>" class="aply-btn ">View Details</a>
                                            </div>
                                        </div>
            <?php
            }
            ?>
                                      
                                    </div>
                                  
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("footer.php");
    ?>