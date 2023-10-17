<?php
include("Header.php");
include("config.php");
?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
              
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Job Type Registration </h4>
                    <p class="card-description"> Job Type Registration</p>
                    <?php
if(isset($_GET["jobtypeid"]))
{
$jobtype=$_GET["jobtypeid"];
$sql=mysqli_query($con,"SELECT * FROM tbljobtyperegistration WHERE jobtypeid='$jobtype'");
$display=mysqli_fetch_array($sql);
}
?>
                    <form method="post" action="" control="" class="form-sample">
                      <div class="form-group">
                        <label for="exampleInputName1"> Job Type Name</label>
                        <input type="text"  name="txtjobtypename" required pattern="^[A-Za_z][A-Za-z -]+$"  value="<?php echo $display['jobtypename'];?>" placeholder="Job Type Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1"> Description</label>
                        <input type="text"  name="txt_description"  value="<?php echo $display['description'];?>" placeholder="Description">
                      </div>
                      
                      <button type="submit" name="Update"class="btn btn-primary mr-2">UPDATE</button>
                      <!-- <button class="btn btn-light">Cancel</button> -->
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
          if(isset($_POST["Update"]))
          {
            $jobtypename=$_POST["txtjobtypename"];
            $description=$_POST["txt_description"];

            //   $sql2=mysqli_query($con,"select count(*) as count from tbljobtyperegistration where jobtypename='$jobtypename' ");
            //   $display2=mysqli_fetch_array($sql2);
            //   if($display2['count']>0)
            //   {
            //       echo "<script>alert('Already Exists!!!');window.jobtype='jobtypeView.php'</script>";
            //   }
            //   else
              {
                  $sql=mysqli_query($con,"UPDATE tbljobtyperegistration SET jobtypename='$jobtypename' WHERE jobtypeid='$jobtype'");
                  $sql=mysqli_query($con,"UPDATE tbljobtyperegistration SET description='$description' WHERE jobtypeid='$jobtype'");
                  if($sql)
                  {
                      echo "<script>alert('jobtype Details Updated Succesfully!!');window.location='jobtypeview.php'</script>";
                  }
              }
          }
include("Footer.php");
?>