<?php

// step 1: find a session
session_start();

//step 2. unset all the session variables
$_SESSION=array();


//step3 . Destroy the session cookie
if (isset($_COOKIE[session_name()]))
{
setcookie(session_name(),'',time()-42000,'/');
//unset the cookie variables causing the cookie to last sometime back in the past
}

//step4 . destroy the session
session_destroy();

header('Location:wronglogin.php?logout=1');
?>
