<?php
ob_start();
?>
<?php
session_start();
?>
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
function forgotmail($toemail,$randomstr)
{
$htmlbody = "Password reset string is ".$randomstr."<br> please log in at the following link to continue and respond localhost/dropbox/resetpassword.php";
$to = $toemail; //Recipient Email Address
$subject = "Reset Password : dropbboxiitk.in"; //Email Subject
$headers = "From: admin@dropbboxiitk.in\r\nReply-To: admin@dropbboxiitk.in";
$random_hash = md5(date('r', time()));
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\"";
$message = "--PHP-mixed-$random_hash\r\n"."Content-Type: multipart/alternative; boundary=\"PHP-alt-$random_hash\"\r\n\r\n";
$message .= "--PHP-alt-$random_hash\r\n"."Content-Type: text/plain; charset=\"iso-8859-1\"\r\n"."Content-Transfer-Encoding: 7bit\r\n\r\n";
//Insert the html message.
$message .= $htmlbody;
$message .="\r\n\r\n--PHP-alt-$random_hash--\r\n\r\n";
$mail = mail( $to, $subject , $message, $headers );
return $mail ? 1 : 0;
}
?>
<?php
require_once("include/dbconnection.php");
?>
<?php
function Check_vulnerable($key_val) 
{
	$flag=0;
$not_allowed_keywords = array('script','drop','truncate','delete','select','create','alter','update','modify',';','--','=','<','>');
foreach ($not_allowed_keywords as &$value) 
{
//echo $value;
if (strpos($key_val,$value)!== false ) 
{
 $flag=1; 
}
}
if ($flag==1)
    return 1;
else 
    return 0;
}
?>
<?php
$email=$_POST['email'];
$valid_captcha=$_SESSION['captcha']['code'];
unset($_SESSION['captcha']);

if (Check_vulnerable(strtolower($email)))
{
	//echo '<script> alert("Code is vulnerable"); </script>';
	header('Location:forgot.php?v=0');
}
else if (isset($_POST['email']))
{  
 if(empty($_POST['email']))  
   header('Location:forgot.php?v=1');
  else
{
$email_subject = $_POST['email'];  
$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';  
if(!preg_match($email_pattern, $email_subject) || !($_POST['captcha']==$valid_captcha))
  header('Location:forgot.php?v=2');
else
{

			echo "hello";
			$randomstr_1=generateRandomString();
			$sql ="UPDATE users set confirmationstr='".md5($randomstr_1)."' where email='".$email."'";
			$retval = mysql_query( $sql, $connection );
			if($retval )
			{
						if (forgotmail($_POST['email'],$randomstr_1))
						{
							header('Location:forgot.php?v=3');

						}
						else
						{

						header('Location:forgot.php?v=4');
						}
			}  
		else
		{
								echo $sql;
								die("database query failed:".mysql_error());
								header('Location:forgot.php?v=5');
		}}}} 

mysql_close($connection);
?>
<?php
ob_end_flush(); //now the headers are sent
?>