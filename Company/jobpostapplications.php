
<?php
session_start();
include("header2.php");
?>
<section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span></span>job post applications</h3>
                <div class="row populor_category_grids mt-5">
                <?php
            include("config.php");
            $company_id=$_SESSION['company'];

            $sql=mysqli_query($con,"SELECT * FROM tbljobpost v 
            inner join tbljobtyperegistration t on v.jobtypeid=t.jobtypeid 
            WHERE  v.poststatus='Active' and v.companyid='$company_id'");

            
            while($display=mysqli_fetch_array($sql))
            {
                ?> 
                    
                        <div class="col-md-3 category_grid">
                        <a href="Request.php?jobpostid=<?php echo $display["jobpostid"];?>">
                        <div class="view view2 view-tenth">
                            <div class="category_text_box" style="height:200px;">
                                <i class="fas fa-job"></i>
                               
                                <h3> <?php echo $display["jobtypename"]?>
                                <br>
                                </h3> 
                                <p><?php echo $display["postdate"]?></p>
                            </div>
                            <div class="mask">
                               
                                    
                               
                            </div>
                        </div>
                        </a>
                    </div>
                   
                    <?php
            }
            ?>
                    

                    
                    
              
                
                    
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("footer.php");
    ?>