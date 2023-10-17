<?php
include 'excel_controller.php';
$customer = new DBController();
$productResult = $customer->runQuery("SELECT companyname,companyaddress,districtname,pincode,email,contactnumber,logo,status FROM 
tblcompanyregistration c inner join tbldistrict d on d.districtid=c.districtid");

  
    $filename = "Export_companyexcel.xls";
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



 
  
      
