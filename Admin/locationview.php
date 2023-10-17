<?php
  include("Header.php");
  include("config.php");
  
  ?>

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title"> LOCATION VIEW </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
                </ol>
              </nav>
            </div>
            <div class="row">
             
              
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                
                    <div class="row">
                      <div class="col-md-6">
                      <form action="" method="POST">
                        <?php
                        $sql=mysqli_query($con,"select * from tbldistrict");
                        ?>
        <select name="drpdistrict" id="drpdistrict" onchange="this.form.submit()" class="input-sm form-control w-sm inline v-middle">
          <option value="0">Select</option>
                         <?php
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
          <option value="<?php echo $row['districtid'] ?>"> <?php echo $row['districtname'];?></option>
         
                        <?php
                        }
                        ?>
        </select>
                       
     
  </form>
                      </div>
                      <div class="col-md-4"></div>
                      <div class="col-md-2">
                      <a href="locationregistration.php"><button type="button" style="margin-bottom: 3%;" class="btn btn-social-icon-text btn-linkedin">
                  <i class="mdi mdi-plus" ></i>Add New</button></div></a>
                      </div>
                  
                  <br>
                  <?php
     if(isset($_POST["drpdistrict"]))
     {
         $district=$_POST["drpdistrict"];
        
         $_SESSION['district']=$district;
     ?>
<script>
document.getElementById("drpdistrict").value="<?php echo $district; ?>";

</script>
                 
                    <table class="table table-striped">
                      <thead style="background-color: #78e137">
                        <tr>
                          <th> # </th>
                          <th> Location Name </th>
                          <td></td>
                          <td></td>
                          <th> Action </th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      <?php
    $s=1;
    $sql=mysqli_query($con,"SELECT * FROM tbllocation WHERE Districtid='$district'");
    while($display=mysqli_fetch_array($sql))
    {
    ?>
                        
                        <tr>
                          <td class="py-1"><?php echo $s++; ?></td>
                          <td><?php echo $display["locationname"]; ?></td>
                          <td></td>
                          <td></td>
                          <td> 
                          <div class="btn-group dropup">
                        <button type="button" class="btn btn-danger">Dropdown</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" id="dropupMenuSplitButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropupMenuSplitButton2">
                          <h6 class="dropdown-header">Settings</h6>
                       
                          <a class="dropdown-item" href="locationedit.php?locationid=<?php echo $display['locationid'];?>">EDIT </a>
                          <a class="dropdown-item" onclick="return confirm('Are You Sure to Delete this Record?')" 
                          href="locationdelete.php?locationid=<?php echo $display['locationid'];?>">DELETE</a>

                        </div>
                      </div>
                             </td>
                        </tr>
    <?php
     }
     ?>                 
                       
                      </tbody>
                    </table>

    <?php
     }
     ?>
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