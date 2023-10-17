<?php
 include("Header2.php"); 
 include("config.php");
 ?>
 <link rel="stylesheet" href="style2.css">
<section class="contact-section">
 <div class="container">
 <br/> <br/>
 <div class="row">
 
 <div class="col-12">
 <h2 class="contact-title">jobseeker Registration</h2>
 <br/> <br/>
 </div>

 <div class="col-lg-8">
 <form class="form-contact contact_form" action="jobseekerregistrationaction.php" method="post" >
 <script type="text/javascript" src="../Guest/js/jquery-2.2.3.min.js"></script>
 <div class="row"> 
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtjobseekernname" required id="name" type="text"  pattern="^[A-Za_z][A-Za-z -]+$"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" placeholder="Enter your name">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <label>Gender</label>
 <input type="radio" name="txtgender"  required value=" male"> Male <input type="radio" name="txtgender" value=" female"> Female 
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtemail" required id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email'" placeholder="Enter your email">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtcontactno" required id="name" type="text" pattern="[0-9]{10}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your contact no'" placeholder="Enter your contact no">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtdob" id="name" required type="date" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your DOB'" placeholder="Enter your DOB">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtqualification" required id="qualification" type="text"  pattern="^[A-Za_z][A-Za-z -]+$"  onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter qualification details'" placeholder="qualification">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtexperence"  required id="experence" type="text"    onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Experence'" placeholder="Experence">
 </div>
 </div>
 <!-- <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtpassword" id="name" type="password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your password'" placeholder="Enter your password">
 </div>
 </div> -->
 
 <div class="col-sm-6">
 <div class="form-group"> 
 <?php
 $sql=mysqli_query($con,"select * from tbldistrict");
 ?> 
 <i class="fa fa-arrow-circle-o-down fa-3x" aria-hidden="true"></i>
 <select name="drpdistrictid" required id="district" onChange="populate()" class="form control" style="width: 350px;"  >
    <option value="0">---Select District---</option>
        <?php
        while($row=mysqli_fetch_array($sql))
        {
        ?>
 <option value="<?php echo $row['districtid'] ?>">  <?php echo $row['districtname']; ?> </option>
            <?php
            }
            ?>
 </select>
 </div>
 </div>
 
        <div class="col-sm-6">
        <div class="form-group" id="chkboxContainer"> 
        
        <i class="fa fa-arrow-circle-o-down fa-3x" aria-hidden="true"></i>
        <select name="drplocationid" id="district" class="form control" style="width: 350px;" >
            <option value="0">---Select Location---</option>
                
        </select>
        </div>
        </div>

 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtpincode" id="pincode" type="text"  pattern="[0-9]{6}" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your pincode'" placeholder="pincode">
 </div>
 </div>
 
 

 
 
 </div>
 <div class="form-group mt-3">
 <button type="submit" class="button button￾contactForm boxed-btn">REGISTER</button>
 </div>
 </form>
 </div>
 
 </div>
</div>
</section>
 <?php
 include("footer.php");
 ?>
 <script>
  	function populate()
    {
	 
     var val=document.getElementById('district').value;
 	 $.ajax({
		type: "POST",
		url: "getlocation.php",
		data: "id="+val,
		
		success: function(data){
		$("#chkboxContainer").html(data);	
		}
		})
		
 }
 </script>