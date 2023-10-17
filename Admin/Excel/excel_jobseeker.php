<?php
include 'excel_controller.php';
$clinic = new DBController();
$productResult = $clinic->runQuery("select a.districtname,b.* from tbljobseeker b inner join tbldistrict a on b.districtid=a.districtid");

  
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