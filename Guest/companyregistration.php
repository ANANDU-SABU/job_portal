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
 <h2 class="contact-title">COMPANY REGISTRATION</h2>
 <br/> <br/>
 </div>

 <div class="col-lg-8">
 <form class="form-contact contact_form" action="companyregistrationaction.php" method="post" enctype="multipart/form-data">
 <div class="row"> 
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtcompanyname" id="name" type="text"pattern="^[A-Za_z][A-Za-z -]+$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your company name'" placeholder="Enter your company name">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group"> 
 <?php
 $sql=mysqli_query($con,"select * from tblcompanytyperegistration");
 ?> 
 <i class="fa fa-arrow-circle-o-down fa-3x" aria-hidden="true"></i>
 <select name="txtcompanytypeid" class="form control" style="width: 359px;" >
    <option value="">---company type enter here---</option>
        <?php
        while($row=mysqli_fetch_array($sql))
        {
        ?>
 <option value="<?php echo $row['companytypeid'] ?>">  <?php echo $row['companytypename']; ?> </option>
            <?php
            }
            ?>
            <div class="col-lg-8">
 <!-- <form class="form-contact contact_form" action="companytyperegistration.php" method="post" enctype="multipart/form-data"> -->
 <div class="row"> 
 <div class="col-sm-6">
 </select>
 </div>
 </div>
 <!-- <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtcompanytypeid" id="companytypeid" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your companytypeid'" placeholder="Enter your companytypeid">
 </div>
 </div> -->
 <div class="col-sm-6">
 <div class="form-group">
    ADD YOUR LOGO HERE📥
 <input class="form-control valid" name="txtlogo" id="logo" type="file" onfocus="this.placeholder = ''" onblur="this.placeholder = 'insert your logo'" placeholder="insert your logo">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input pattern="[0-9]{10}"   mobile number validation class="form-control valid" name="txtcontactnumber"required id="contactnumber" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your contact number'" placeholder="Enter your contact number">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtabout" required id="about" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'fill your details'" placeholder="fill your details">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtemail"required id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your email address'" placeholder="email">
 </div>
 </div>
 <div class="col-sm-6">
 <div class="form-group">
 <input class="form-control valid" name="txtcompanyaddress"required id="companyaddress" type="text"pattern="^[A-Za_z][A-Za-z -]+$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter company address'" placeholder="company address">
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
 <select name="drpdistrict" class="form control"required id="district" style="width: 350px;"  onChange="populate()">
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
        <select name="drplocationid"required id="district" class="form control" style="width: 350px;" >
            <option value="0">---Select Location---</option> 
            </select>
        </div>
        </div>

 <div class="col-sm-6">
 <div class="form-group">
 <input pattern="[0-9]{6}" class="form-control valid" name="txtpincode"required id="pincode" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your pincode'" placeholder="pincode">
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