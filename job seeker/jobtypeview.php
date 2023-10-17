
<?php
include("header2.php");
?>
<section class="banner-bottom-wthree py-lg-5 py-md-5 py-3">
        <div class="container">
            <div class="inner-sec-w3ls py-lg-5  py-3">
                <h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Our Mission</span>Popular Categories</h3>
                <div class="row populor_category_grids mt-5">
                <?php
            include("config.php");
        
            $sql=mysqli_query($con,"SELECT * FROM tbljobtyperegistration");
            while($display=mysqli_fetch_array($sql))
            {
                ?> 
                    
                        <div class="col-md-3 category_grid">
                      
                        <div class="view view-tenth "  style=" margin-top: 10px;">
                            <div class="category_text_box">
                                <i class="fas fa-users"></i>
                                <h3> <?php echo $display["jobtypename"]?></h3>
                                <!-- <p>(34 open flow-positions)</p> -->
                            </div>
                            <div class="mask">
                                <a href="jobvacancyview.php?jobtypeid=<?php echo $display["jobtypeid"];?>">
                                    <img src="images/p1.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                        </div>
                        
                    </div>
                   
                   
                    <?php
            }
            ?>
                    

                    <br>
                    <br>      
                    
              
                
                    
                    <div class="clearfix"> </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include("footer.php");
    ?>