<?php
 include("Header2.php"); 
 include("config.php");
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
 <form class="form-contact contact_form" action="companyjobpostaction.php" method="post" enctype="multipart/form-data">
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
                       while($row=mysqli_fetch_array($sql))
                       {
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
 <input type="text"  name="txtqualification" class="form-control valid" id="exampleInputName1" placeholder="Qualification">
    
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Age Limit</label>
 <input type="text"  name="txtagelimit" class="form-control valid" id="exampleInputName1" placeholder="Age Limit">
 
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Experience</label>
 <input type="text"  name="txtexperience" class="form-control valid" id="exampleInputName1" placeholder="Experience">
 
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Last Late</label>
 <input type="date"  name="duedate" class="form-control valid" id="exampleInputName1" placeholder="Late Date">

 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Salary</label>
 <input type="number"  name="salary" class="form-control" id="exampleInputName1" placeholder="Salary">
 </div>
 </div>
 
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Available Vacancies</label>
 <input type="number"  name="no_of_Vacancies" class="form-control" id="exampleInputName1" placeholder="Available Vacancies">
 
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label for="exampleInputName1">Selection criteria</label>
 <input type="text"  name="criteria" class="form-control" id="exampleInputName1" placeholder="Selection criteria">
 
 </div>
 </div>

 </div>
 <div class="form-group mt-3">
 <button type="submit" class="btn btn-primary mr-2">REGISTER</button>
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
 










