<?php
  include("Header.php");
  include("config.php");
  ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> Job Type View</h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Job Type View tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                  <a href="jobtyperegistration.php"><button type="button" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin"><i class="mdi mdi-plus" ></i>Add New</button></a>
                

                    <table class="table table-striped">
                      <thead style="background-color: #78e137">
                        <tr>
                          <th> # </th>
                          <th> Job Type Name </th>
                          <th> Description </th>
                          <th></th>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
    $s=1;
    $sql=mysqli_query($con,"SELECT * FROM tbljobtyperegistration");
    while($display=mysqli_fetch_array($sql))
    {
    ?>
                        
                        
                        <tr>
                          <td class="py-1"><?php echo $s++; ?></td>
                          <td><?php echo $display["jobtypename"]; ?> </td>
                          <td> <?php echo $display["description"]; ?> </td>
                          <td></td>
                          <td> 
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Dropdown</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          <h6 class="dropdown-header">Settings</h6>
                          <a class="dropdown-item" href="jobtypeedit.php?jobtypeid=<?php echo $display['jobtypeid'];?>">EDIT</a>
                          <a class="dropdown-item" onclick="return confirm('Are You Sure to Delete this Record?')" 
                          href="jobtypedelete.php?jobtypeid=<?php echo $display['jobtypeid'];?>">Delete</a>

                        </div>
                      </div>
                             </td>
                        </tr>
   <?php
   }
   ?>                 
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            

          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
       
<?php
include("Footer.php");
?>