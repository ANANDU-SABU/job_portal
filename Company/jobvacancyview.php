<?php
session_start();
  include("Header2.php");
  ?>

        <!-- partial -->
        <div class="container">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title" >  </h3>
              <br>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                <h3 class="page-title"> Jobvacancies </h3>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Basic tables</li> -->
                </ol>
              </nav>
            </div>
            <div class="row">
             
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <!-- <a href="jobtypereg.php"><button type="button" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin"><i class="mdi mdi-plus" ></i>Add New</button></a> -->
                  <br>

                    <table class="table table-striped">
                      <thead style="background-color: #78e137">
                        <tr>
                          <th> # </th>
                          <th> Post Date</th>
                          <th> Jobtype </th>
                          <th> Experiance </th>
                          <th> No of vacancies </th>
                          <th> Last Date </th>
                          <th> Salary </th>
                          <th> Criteria </th>
                          <th> Qualification </th>
                          <th> Age Limit </th>
                          <th> Status </th>
                          <th> Action </th>
                          
                          
                        </tr>
                      </thead>
                      <tbody>
                      <?php
            include("config.php");
           $companyid=$_SESSION['company'];
            $s=1;
            $sql=mysqli_query($con,"SELECT * FROM tbljobpost v 
            inner join tbljobtyperegistration j on v.jobtypeid=j.jobtypeid where v.companyid='$companyid'");
            while($display=mysqli_fetch_array($sql))
            {
                ?> 
                        <tr>
                          <td class="py-1"><?php echo $s++ ?></td>
                          <td><?php echo $display["postdate"]?></td>
                          <td><?php echo $display["jobtypename"]?></td>
                          <td><?php echo $display["experience"]?></td>
                          <td><?php echo $display["no-of-vacancies"]?></td>
                          <td><?php echo $display["applydate"]?></td>
                          <td><?php echo $display["salary"]?></td>
                          <td><?php echo $display["criteria"]?></td>
                          <td><?php echo $display["qualification"]?></td>
                          <td><?php echo $display["agelimit"]?></td>
                          <td><?php echo $display["poststatus"]?></td>
                          <td>
              <a href="jobvacancyedit.php?jobpostid=<?php echo $display['jobpostid'];?>" class="active" ui-toggle-class="">
              <i class="fa fa-edit text-success text-active" style="font-size: 15px;"></i></a>

              <a onclick="return confirm('Are You Sure to Active this jobpost?')" 
                          href="jobvacancyactive.php?jobpostid=<?php echo $display['jobpostid'];?>" class="active" ui-toggle-class="">
             <i class="fa fa-check text-ckeck text" style="font-size: 15px;"></i></a>
              <a onclick="return confirm('Are You Sure to Deactive this jobpost?')" 
                          href="jobvacancydeactive.php?jobpostid=<?php echo $display['jobpostid'];?>" class="active" ui-toggle-class="">
             <i class="fa fa-times text-danger text" style="font-size: 15px;"></i></a>
           
             <!-- <i class="fa fa-edit text-success text-active" style="font-size: 15px;"></i>
             <i class="fa fa-trash text-danger text" style="font-size: 15px;"></i> -->
            </td>
                    
                        
                            
                        </tr>
                        <?php
            }
            ?>
                       
                      </tbody>
                    </table>
                  </div>
                </div>
                <br/>
              </div>
          </div>
              
      
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
         
  <?php
  include("Footer.php");
  ?>