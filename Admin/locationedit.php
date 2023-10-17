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
                    <h4 class="card-title">location  Registration </h4>
                    <p class="card-description">location  Registration Form</p>
                    <?php
if(isset($_GET["locationid"]))
{
$location=$_GET["locationid"];
$sql=mysqli_query($con,"SELECT * FROM tbllocation WHERE locationid='$location'");
$display=mysqli_fetch_array($sql);
}
?>
                    <form method="post" action="" control="" class="form-sample">
                      <div class="form-group">
                        <label for="exampleInputName1"> Location Name</label>
                        <input type="text"  name="txtlocationname" value="<?php echo $display['locationname'];?>" required pattern="^[A-Za_z][A-Za-z -]+$" class="form-control" id="exampleInputName1" placeholder="Location Name">
                      </div>
                      
                      <button type="submit" name="Update" class="btn btn-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
           if(isset($_POST["Update"]))
           {
               $locationname=$_POST['txtlocationname'];
               $sql2=mysqli_query($con,"select count(*) as count from tbllocation where locationname='$locationname'");
               $display2=mysqli_fetch_array($sql2);
               if($display2['count']>0)
               {
                   echo "<script>alert('Already Exists!!!');window.location='locationview.php'</script>";
               }
               else
               {
                   $sql=mysqli_query($con,"UPDATE tbllocation SET locationname='$locationname' WHERE locationid='$location'");
                   if($sql)
                   {
                       echo "<script>alert('Location Details Updated Succesfully!!');window.location='locationview.php'</script>";
                   }
               }
            }
include("Footer.php");
?>