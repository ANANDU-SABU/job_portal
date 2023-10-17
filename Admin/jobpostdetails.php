<?php
  include("Header.php");
  ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title"> jobpost Details </h3>
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
                          <th> Company Name  </th> 
                          <th> jobpost name </th>
                          <!-- <th> District </th>

                          
                          <th> Pincode </th>
                          <th> Email </th>
                          <th> Contact </th>
                          <th> logo </th>
                          <th> status </th> -->
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            include("config.php");
            $s=1;
            $sql=mysqli_query($con,"SELECT companyname,jobpost FROM 
            tbljobpost c inner join tblcompanyregistration d on d.companyid=c.companyid");
            while($display=mysqli_fetch_array($sql))
            {
                        ?>
                        <tr>
                          <td><?php echo $s++;?></td>
                          <td> <?php echo $display["companyname"];?></td>
                          <td> <?php echo $display["companyaddress"];?></td>
                          <td> <?php echo $display["districtname"];?></td>

                          <td> <?php echo $display["pincode"];?></td>
                          <td> <?php echo $display["email"];?></td>
                          <td> <?php echo $display["contactnumber"];?></td>
                          <td> <?php echo $display["logo"];?></td>
                          <td> <?php echo $display["status"];?></td>
                
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