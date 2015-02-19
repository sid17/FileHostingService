<?php
session_start();
?>
<?php

// Set local PHP vars from the POST vars sent from our form using the array
// of data that the $_FILES global variable contains for this uploaded file
$fileName = $_SESSION['user_id'].'_'.$_FILES["file1"]["name"]; // The file name
$fileTmpLoc = $_FILES["file1"]["tmp_name"]; // File in the PHP tmp folder
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true

// Specific Error Handling if you need to run error checking
if (!$fileTmpLoc) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
} else if($fileSize > 50000) { // if file is larger than we want to allow
    echo "ERROR: Your file was larger than 50kb in file size.";
    unlink($fileTmpLoc);
    exit();
} else if (!preg_match("/.(gif|jpg|png)$/i", $fileName) ) {
     // This condition is only if you wish to allow uploading of specific file types    
     echo "ERROR: Your image was not .gif, .jpg, or .png.";
     unlink($fileTmpLoc);
     exit();
}
// Place it into your "uploads" folder mow using the move_uploaded_file() function
move_uploaded_file($fileTmpLoc, "uploads/$fileName");
// Check to make sure the uploaded file is in place where you want it
if (!file_exists("uploads/$fileName")) {
    echo "ERROR: File not uploaded<br /><br />";
    echo "Check folder permissions on the target uploads folder is 0755 or looser.<br /><br />";
    echo "Check that your php.ini settings are set to allow over 2 MB files, they are 2MB by default.";
    exit();
}
// Display things to the page so you can see what is happening for testing purposes
echo "The file named <strong>$fileName</strong> uploaded successfuly.<br /><br />";
echo "It is <strong>$fileSize</strong> bytes in size.<br /><br />";
echo "It is a <strong>$fileType</strong> type of file.<br /><br />";
echo "The Error Message output for this upload is: <br />$fileErrorMsg";
?>
