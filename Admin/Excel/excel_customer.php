<?php
include 'excel_controller.php';
$customer = new DBController();
$productResult = $customer->runQuery("SELECT jobseekername,gender,districtname,locationname,pincode,email,contactno,dob,experence,qualification FROM tbljobseeker c 
inner join tbldistrict d on d.districtid=c.districtid inner join tbllocation l on l.locationid=c.locationid");

  
    $filename = "Export_jobseekerexcel.xls";
    header("Content-Type: application/vnd.ms-excel");
    header("Content-Disposition: attachment; filename=\"$filename\"");
    $isPrintHeader = false;
    if (! empty($productResult)) {
        foreach ($productResult as $row) {
            if (! $isPrintHeader) {
                echo implode("\t", array_keys($row)) . "\n";
                $isPrintHeader = true;
            }
            echo implode("\t", array_values($row)) . "\n";
        }
    }
    exit();

?>



 
  
      
