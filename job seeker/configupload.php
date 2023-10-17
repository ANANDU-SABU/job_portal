<?php
$con=mysqli_connect("localhost","root","","dbjobportal");
$sql = "SELECT * FROM files";
$result = mysqli_query($con, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>