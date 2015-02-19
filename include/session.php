<?php
session_start();
function confirm_logged_in ()
{
$mystring=$_GET['username'];
$pos = strrpos($mystring, "___");
$p=(substr($mystring, 0, $pos));  
    
if (!(isset($_SESSION['user_id'])&&($_SESSION['user_id']==$_GET['username']||$_SESSION['user_id']==$p) ))
header("Location: login.php");
    
}
?>
