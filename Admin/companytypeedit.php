<?php
include("Header.php");
include("config.php");
?>
        
        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="row">
           
              
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">company type Registration form</h4>
                    <p class="card-description">company type Registration form</p>
                   
                    <form method="post" action="" control="" class="form-sample">
                    <?php
if(isset($_GET["companytypeid"]))
{
$companytype=$_GET["companytypeid"];
$sql=mysqli_query($con,"SELECT * FROM tblcompanytyperegistration WHERE companytypeid='$companytype'");

//echo "SELECT * FROM tblcompanytyperegistration WHERE companytypeid='$companytype'";
$display=mysqli_fetch_array($sql);
 }
?>
                  
                      <div class="form-group">
                        <label for="exampleInputName1">Company Type Name</label>
                        <input type="text"name="txtcompanytypename" value="<?php echo $display['companytypename'];?>" placeholder="company Type Name">
                      </div>
                      <div class="form-group">
                        <label for="exampleTextarea1">Description</label>
                        <input type="text"  name="txt_description"  value="<?php echo $display['description'];?>" placeholder="Description">
                      </div>
                      <button type="submit" name="Update"class="btn btn-primary mr-2">UPDATE</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php
          if(isset($_POST["Update"]))
          {
            $companytypename=$_POST["txtcompanytypename"];
            $description=$_POST["txt_description"];

           
              {
                  $sql=mysqli_query($con,"UPDATE tblcompanytyperegistration SET companytypename='$companytypename',description='$description' WHERE companytypeid='$companytype'");
                 
                  if($sql)
                  {
                      echo "<script>alert('companytype Details Updated Succesfully!!');window.location='companytypeview.php'</script>";
                  }
              }
          }
          
include("Footer.php");
?>