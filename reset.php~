<?php
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

?>


<?php
require("include/dbconnection.php");
?>
<?php
ob_start();
?>
<?php
$email=$_POST['email'];
$confstr=$_POST['confstr'];
$password=$_POST['pass'];
$rand=generateRandomString();
$sql="SELECT confirmationstr from users where email='".$email."'";
$result = mysql_query( $sql, $connection );
if (!$result)
{
header('Location:resetpassword.php?success=0');
 die("database query11 failed:".mysql_error());
}
else
{
	while ($row=mysql_fetch_array($result))
			{

			 
			   $confirmationstr=$row['confirmationstr']; 
			}


   if ($confirmationstr==md5($confstr))
   {

		$sql="UPDATE users set password='".md5($password)."',confirmationstr='".md5($rand)."' where email='".$email."'";
		$result = mysql_query( $sql, $connection );
		if (!$result)
		{
		header('Location:resetpassword.php?success=0');
		 die("database query12 failed:".mysql_error());
		}
		else
		{
			header('Location:resetpassword.php?success=1');
			
		}


   }
   else
   {
   	header('Location:resetpassword.php?success=0');
   }
}

mysql_close($connection);
?>
<?php
ob_flush();
?>

