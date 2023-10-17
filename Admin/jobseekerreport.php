<?php
  include("Header.php");
  ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title"> Jobseeker Details </h3>
              <nav aria-label="breadcrumb">
                
              </nav>
            </div>
            <form action="Excel/excel_customer.php" method="post">
            <div class="row">
             
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <button type="submit" name="addnew" value="Export" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin"><i class="mdi mdi-download" ></i>Export</button><br>
                    <table class="table table-striped">
                      <thead style="background-color: #78e137">
                        <tr>
                          <th> Sl.No </th>
                          <th> jobseeker Name  </th> 
                          <th> Contactdetails </th>

                          <th> gender </th>
                          <th> District </th>

                          <th> Location </th>
                          <th> Pincode </th>
                         
                          <th> date of birth </th>
                          <th> experence </th>
                          <th> qualification </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            include("config.php");
            $s=1;
            $sql=mysqli_query($con,"SELECT jobseekername,gender,districtname,locationname,pincode,email,contactno,dob,experence,qualification FROM tbljobseeker c 
            inner join tbldistrict d on d.districtid=c.districtid inner join tbllocation l on l.locationid=c.locationid");
            while($display=mysqli_fetch_array($sql))
            {
                        ?>
                        <tr>
                          <td><?php echo $s++;?></td>
                          <td> <?php echo $display["jobseekername"];?></td>
                          <td> <?php echo $display["email"];?> <br><br><?php echo $display["contactno"];?></td>

                          <td> <?php echo $display["gender"];?></td>
                          <td> <?php echo $display["districtname"];?></td>
                          <td> <?php echo $display["locationname"];?></td>
                          <td> <?php echo $display["pincode"];?></td>
                         
                          <td> <?php echo $display["dob"];?></td>
                          <td> <?php echo $display["experence"];?></td>
                          <td> <?php echo $display["qualification"];?></td>
                        </tr>
                        <?php  
            }
?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
        </form>
              

            </div>
          </div>
         
  <?php
  include("Footer.php");
  ?>