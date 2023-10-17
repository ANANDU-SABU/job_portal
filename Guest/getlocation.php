<?php
include("config.php");
$id=$_POST['id'];
?>

<div class="col-sm-6">
        <div class="form-group" > 
        <?php
        $sql=mysqli_query($con,"SELECT * from tbllocation where districtid='$id'");
        ?> 
        <i class="fa fa-arrow-circle-o-down fa-3x" aria-hidden="true"></i>
        <select name="drplocationid" id="district" class="form control" style="width: 350px;" >
            <option value="0">---Select Location---</option>
                <?php
                while($row=mysqli_fetch_array($sql))
                {
                ?>
        <option value="<?php echo $row['locationid'] ?>">  <?php echo $row['locationname']; ?> </option>
                    <?php
                    }
                    ?>
        </select>
        </div>
        </div>