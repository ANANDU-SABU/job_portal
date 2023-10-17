<?php
 include("Header2.php"); 
 include("config.php");

  $id = $_GET["jobpostid"];
  $query = "SELECT * FROM tbljobpost WHERE `jobpostid` = '$id';";

    $result = mysqli_query($con, $query);
    $resultRow = mysqli_fetch_array($result, MYSQLI_ASSOC);
 ?>
 <!-- <link rel="stylesheet" href="style2.css"> -->
<section class="contact-section">
 <div class="container">
 <br/> <br/>
 <div class="row">
 
 <div class="col-12">
 <h2 class="contact-title">JOB POST REGISTRATION</h2>
 <br/> <br/>
 </div>

 <div class="col-lg-8">
 <form class="form-contact contact_form" action="jobvacancyeditaction.php?postId=<?php echo $id?>" method="post" enctype="multipart/form-data">
 <div class="row"> 
 <div class="col-sm-6">
 <div class="form-group"> 
 <label for="exampleInputName1">Select Job Type</label>
 <?php
                       $sql=mysqli_query($con,"select * from tbljobtyperegistration");
                       ?>
       <select name="drpjobtypeid" id="drpjobtypename"  class="input-sm form-control w-sm inline v-middle">
         <option value="0">Job Name</option>
                        <?php
                        $typeId = $resultRow["jobtypeid"];
                       while($row=mysqli_fetch_array($sql))
                       {
                        if($typeId == $row["jobtypeid"]){
                            ?>
                                     <option selected value="<?php echo $row['jobtypeid'] ?>"> <?php echo $row['jobtypename'];?></option>
                            <?php
                        }
                       ?>
         <option value="<?php echo $row['jobtypeid'] ?>"> <?php echo $row['jobtypename'];?></option>
        
                       <?php
                       }
                       ?>
       </select>
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Qualification</label>
 <input type="text"  name="txtqualification" class="form-control valid" id="exampleInputName1" value="<?php echo $resultRow["qualification"]?>">
    
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Age Limit</label>
 <input type="text"  name="txtagelimit" class="form-control valid" id="exampleInputName1" value="<?php echo $resultRow["agelimit"]?>">
 
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Experience</label>
 <input type="text"  name="txtexperience" class="form-control valid" id="exampleInputName1" value="<?php echo $resultRow["experience"]?>">
 
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Last Late</label>
 <input type="date"  name="duedate" class="form-control valid" id="exampleInputName1" value="<?php echo $resultRow["applydate"]?>">

 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Salary</label>
 <input type="number"  name="salary" class="form-control" id="exampleInputName1" value="<?php echo $resultRow["salary"]?>">
 </div>
 </div>
 
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Available Vacancies</label>
 <input type="number"  name="no_of_Vacancies" class="form-control" id="exampleInputName1" value="<?php echo $resultRow["no-of-vacancies"]?>">
 
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Selection criteria</label>
 <input type="text"  name="criteria" class="form-control" id="exampleInputName1" value="<?php echo $resultRow["criteria"]?>">
 
 </div>
 </div>

 </div>
 <div class="form-group mt-3">
 <button type="submit" class="btn btn-primary mr-2">Update</button>
 <!-- <button type="submit" class="btn btn-submit" style=">REGISTER</button> -->
 </div>
 </form>
 </div>
 </div>
</div>
</section>
 <?php
 include("footer.php");
 ?>
 










