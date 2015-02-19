<?php
session_start();
if (isset($_GET['filename']) && isset($_SESSION['user_id']) && isset($_SESSION['email']))
{
	//echo strstr($_GET['filename'], '_', true);
if (strstr($_GET['filename'], '_', true)==$_SESSION['user_id'])
{

$folder=md5(md5($_SESSION['user_id']).md5($_SESSION['email']));
$filepath=$folder.'/'.$_GET['filename'];
	//$filepath='download.jpg';
	$contents = file_get_contents($filepath);
	header('Content-Type: ' . mime_content_type($filepath));
	echo $contents;
}
}
else
{
	header('Location:login.php');
}
?>
