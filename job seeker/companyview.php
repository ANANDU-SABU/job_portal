<?php
 include("Header2.php"); 
 include("config.php");
 ?>
<!-- <span>Some Info</span>Featured Candidates</h3> -->
<br><br>
<h3 class="tittle text-center mb-lg-4 mb-3">
                    <span>Our</span>Companies</h3>
        </select>
                <div class="row mt-5">
                    <?php
                    $sql=mysqli_query($con,"SELECT * FROM tblcompanyregistration");
                    while($display=mysqli_fetch_array($sql))
                    {
                    ?>
                    <div class="col-lg-3 member-main text-center">
                        <div class="card">
                            <div class="card-body">
                                <div class="member-img">
                                    <a href="companyviewmore.php?companyid=<?php echo $display['companyid'] ?>">
                                <img src="../Guest/images/<?php echo $display["logo"]?>"  style="height:150px;width:150px;" alt=" " class="img-fluid rounded-circle">
                                    <!-- <img src="images/<?php echo $display['logo']; ?>" alt=" " class="img-fluid rounded-circle"> -->
                   
                                </div>
                                <div class="member-info text-center py-lg-4 py-2">
                                    <h4><?php echo $display['companyname']; ?> </h4>

                                    <p class="my-4"> <?php echo $display['companyaddress']; ?> </p>
                                    <p class="my-4"> <?php echo $display['contactnumber']; ?></p>
                                    <p class="my-4"> <?php echo $display['about']; ?></p>
                                    <div class="mt-3 team-social text-center">
                                    </a>



                                        <!-- <ul class="social-icons text-center">
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-facebook-f"></i>
                                                </a>
                                            </li>
                                            <li class="mx-3">
                                                <a href="#">
                                                    <i class="fab fa-twitter"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <i class="fab fa-google-plus-g"></i>
                                                </a>
                                            </li>

                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
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