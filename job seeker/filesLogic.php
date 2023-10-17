<?php
session_start();
// connect to the database
include("configupload.php");

// Uploads files
if (isset($_POST['save'])) { 
    // if save button on the form is clicked
    // name of the uploaded file
    $seeker_id=$_SESSION['seeker_id'];
    $filename = $_FILES['myfile']['name'];

    // destination of the file on the server
    $destination = '../uploads/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES["myfile"]["tmp_name"];
    $size = $_FILES["myfile"]["size"];

    if (!in_array($extension,['zip','pdf','docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['myfile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "UPDATE tbljobseeker SET bio_data='$filename' WHERE seeker_id='$seeker_id'";
            if (mysqli_query($conn, $sql)) {
               echo "<script>alert('File upload succesfully!!');window.location='index.php'</script>";
            }
        } else {
           echo "<script>alert('Failed to upload file!!');window.location='pdfupload.php'</script>";
        }
    }
	
}
?>
