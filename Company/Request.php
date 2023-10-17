<?php
session_start();
 include("config.php");
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
                <h3 class="page-title"> Application details </h3>
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
                          <th>  Applay Date </th>
                          <th> Candidate name</th>
                          <th> Jobtype  </th>
                          <th> Biodata </th>
                          <th> Status </th>
                          <th> Accept </th>
                          <th> Reject </th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
           
            $s=1;
            $jobpostid=$_GET["jobpostid"];
            $companyid=$_SESSION['company'];
            $sql=mysqli_query($con,"SELECT * FROM tbljobapply v 
            inner join tbljobseeker j on v.jobseekerid=j.jobseekerid
            inner join tbljobpost p on p.jobpostid=v.jobpostid
            inner join tblcompanyregistration c on c.companyid=p.companyid
            inner join tbljobtyperegistration t on t.jobtypeid=p.jobtypeid 
            where p.companyid='$companyid' and v.jobpostid='$jobpostid'");
            // echo"SELECT * FROM tbljobapply v 
            // inner join tbljobseeker j on v.jobseekerid=j.jobseekerid
            // inner join tbljobpost p on p.jobpostid=v.jobpostid
            // inner join tblcompanyregistration c on c.companyid=p.companyid
            // inner join tbljobtyperegistration t on t.jobtypeid=p.jobtypeid 
            // where v.companyid='$companyid' and p.jobtypeid='$jobtypeid'";

            while($display=mysqli_fetch_array($sql))
            {
                ?> 
                        <tr>
                          <td class="py-1"><?php echo $s++ ?></td>
                          
                          <td><?php echo $display["requestdate"]?></td>
                          <td><?php echo $display["jobseekername"]?> </td>
                          <td><?php echo $display["jobtypename"]?></td>
                          <td><a href="../job seeker/File/<?php echo $display["upload_cv"]?>" target="blank">View Resume </a></td>
                          <td style="color:red;"><b><?php echo $display["requeststatus"]?></b></td>
                          
                          <td> 
                         
                        <button type="button" class="btn btn-success">
                          <a class="dropdown-item" href="jobapplicationAccept.php?jobapplyid=<?php echo $display['jobapplyid'];?>">Accept</a>
                        </button>

                        </td>
                        <td>
                        <button type="button" class="btn btn-danger">
                          <a class="dropdown-item" href="jobapplicationReject.php?jobapplyid=<?php echo $display['jobapplyid'];?>">Reject</a>
                        </button>
                       
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