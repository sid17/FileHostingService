<?php
session_start();
?>
<?php
// Configuration - Your Options
$path11=md5(md5($_SESSION['user_id']).md5($_SESSION['email']));

$filename = $_SESSION['user_id'].'_'.$_FILES["file1"]["name"]; // Get the name of the file (including file extension).

if (file_exists("$path11/$filename")) 
{
 


$ext = substr($_FILES["file1"]["name"], strpos($_FILES["file1"]["name"],'.'), strlen($_FILES["file1"]["name"])-1);
$name=substr($_FILES["file1"]["name"], 0,strpos($_FILES["file1"]["name"],'.'));




$filename = $_SESSION['user_id'].'_'.$name.'_'.time().$ext; // Get the name of the file (including file extension).
   
//echo $filename;

}



$allowed_filetypes = array('.jpg','.gif','.bmp','.png','.pdf','.doc','.docx','.txt','.php'); // These will be the types of file that will pass the validation.

//$not_allowed_filetypes = array('.pdf');
$max_filesize = 524288*2; // Maximum filesize in BYTES (currently 0.5MB).
$upload_path = $path11.'/'; // The place the files will be uploaded to (currently a 'files' directory).

//echo $filename;
$ext = substr($filename, strpos($filename,'.'), strlen($filename)-1); // Get the extension from the filename.
$flag_check=0;
// Check if the filetype is allowed, if not DIE and inform the user.
if (!($ext==" " || $ext==''))
{
$flag_check=1;

//if(!in_array($ext,$allowed_filetypes))
//{
//echo $ext;
////header('Location: filehost.php?username='.$_SESSION['user_id'].'&query=0');
//die('The file you attempted to upload is not allowed.');
//}

if(!in_array($ext,$allowed_filetypes) || (strpos($filename,'<') !== false) || (strpos($filename,'>') !== false) )
{
//echo $ext;
echo 'hello1';
//echo $filename;
//header('Location: filehost.php?username='.$_SESSION['user_id'].'&query=0');
die('The file you attempted to upload is not allowed.');
}


// Now check the filesize, if it is too large then DIE and inform the user.
if(filesize($_FILES['file1']['tmp_name']) > $max_filesize)
{
echo 'hello2';
//header('Location: filehost.php?username='.$_SESSION['user_id'].'&query=0');
die('The file you attempted to upload is too large.');
}

// Check if we can upload to the specified path, if not DIE and inform the user.
if(!is_writable($upload_path))
{
echo 'hello3';
echo $upload_path;
//header('Location: filehost.php?username='.$_SESSION['user_id'].'&query=0');
die('You cannot upload to the specified directory, please CHMOD it to 777.');
}



// Upload the file to your specified path.
if(move_uploaded_file($_FILES['file1']['tmp_name'],$upload_path . $filename))
{
//header('Location: filehost.php?username='.$_SESSION['user_id'].'&query=1');
echo 'Your file upload was successful, view the file <a href="' . $upload_path . $filename . '" title="Your File">here</a>'; // It worked.
}
else
{
echo 'hello4';
//header('Location: filehost.php?username='.$_SESSION['user_id'].'&query=0');
die ('There was an error during the file upload. Please try again.');
} // It failed .
}

?>


