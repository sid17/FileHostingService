<?php
ob_start();
?>
<?php
session_start();

?>
<?php
function registermail($toemail)
{
$htmlbody = "Successfully registered at dropbox iitk";
$to = $toemail; //Recipient Email Address
$subject = "Account Created: dropbboxiitk.in"; //Email Subject
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


function Check_vulnerable($key_val) 
{
$not_allowed_keywords = array('script','drop','truncate','delete','select','create','alter','update','modify',';','--','=','<','>','/','<!--');
foreach ($not_allowed_keywords as &$value) 
{
//echo $value;
if (strpos($key_val,$value)!== false) 
{
 $flag=1; 
}
}
if ($flag==1)
	return 1;
else 
	return 0;
}

function valid_pass($candidate) {
   $r1='/[A-Z]/';  //Uppercase
   $r2='/[a-z]/';  //lowercase
   $r3='/[!@#$%^&*()\-_=+{};:,<.>]/';  // whatever you mean by 'special char'
   $r4='/[0-9]/';  //numbers

   if(preg_match_all($r1,$candidate, $o)<2) return FALSE;

   if(preg_match_all($r2,$candidate, $o)<2) return FALSE;

   if(preg_match_all($r3,$candidate, $o)<2) return FALSE;

   if(preg_match_all($r4,$candidate, $o)<2) return FALSE;

   if(strlen($candidate)<8) return FALSE;

   return TRUE;
}


?>
<?php
 require_once("include/dbconnection.php");
 ?>
<?php

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=md5($_POST['password']);
$cpassword=md5($_POST['cpassword']);

// $firstname='Siddhant';
// $lastname='Manocha';
// $username='fknvjf';
// $email='Drop table';
// $password='select';
// $cpassword='select';


if (Check_vulnerable(strtolower($firstname)))
{
	//echo '<script> alert("Code is vulnerable"); </script>';
	header('Location:register.php?v=1');

}

else if (Check_vulnerable(strtolower($lastname)))
{
	//echo '<script> alert("Code is vulnerable"); </script>';
	header('Location:register.php?v=2');
	
}

else if (Check_vulnerable(strtolower($username)))
{
	//echo '<script> alert("Code is vulnerable"); </script>';
	header('Location:register.php?v=3');
	
}

else if (Check_vulnerable(strtolower($email)))
{
	//echo '<script> alert("Code is vulnerable"); </script>';
	header('Location:register.php?v=4');
	
}

else if (Check_vulnerable(strtolower($password)))
{
	//echo '<script> alert("Code is vulnerable"); </script>';
	header('Location:register.php?v=5');
	
}

else
{







global $efirst;
$efirst=0;
global $elast;
$elast=0;
global $eemail;
$eemail=0;
global $euser;
$euser=0;
global $echeck;
$echeck=0;
global $epass;
$epass=0;


if($password!=$cpassword)
{
 	$epass=1;
}
else if (valid_pass($password)==FALSE)
{
	$epass=2;
}

if (isset($_POST['firstname'])) {  
if(empty($_POST['firstname']))
$efirst =1;
else{
 $name_subject = $_POST['firstname'];
 $name_pattern = '/^[a-zA-Z]*$/';
  if(!preg_match($name_pattern, $name_subject))  
$efirst=2;
}
if(empty($_POST['lastname']))
$elast =1;
else{
$name_subject1 = $_POST['lastname'];
$name_pattern1 = '/^[a-zA-Z ]*$/';  
;
if(!preg_match($name_pattern1, $name_subject1 ))  
$elast =2;
}
}
if (isset($_POST['email']))
{  
if(empty($_POST['email']))  
$eemail= 1;
else{
$email_subject = $_POST['email'];  
$email_pattern = '/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/';  
if(!preg_match($email_pattern, $email_subject))
  $eemail =0;
}
} 

//terms and condition acceptance
if (isset($_POST['check'])) {  
//checking facilities  
$check = $_POST['check'];  
  if(empty($check))   
  {  
    $echeck = 1;
  }   
   
 
}  
//username check
if (isset($_POST['username']))
{  
if(empty($_POST['username']))  
$euser= 1;
if ($euser==0)
{
$user_subject = $_POST['username'];  
$user_pattern = ' /^[0-9a-zA-Z_][0-9a-zA-Z_]+$/'; 
if(!preg_match($user_pattern, $user_subject))  
$euser =2;
}
if ($euser==0)
{
 $res=mysql_query("SELECT * FROM users  ",$connection);
if (!$res) die("database query failed:".mysql_error());

while ($row=mysql_fetch_array($res)) 
{
 if($row['username']==$_POST['username'])
 $euser=3;
}
}
}


if (!($efirst==0&&$elast==0&&$eemail==0&&$euser==0&&$echeck==0) || !($_POST['captcha']==$_SESSION['captcha']['code']))
{
 header('Location:register.php?efirst='.$efirst.'&elast='.$elast.'&eemail='.$eemail.'&echeck='.$echeck.'&euser='.$euser."&epass=".$epass);
}

else{
$sql ="INSERT INTO users(username, firstname, lastname,email,password,balance101) values('$username','$firstname','$lastname','$email','$password','1000')";
$sql1 ="INSERT INTO datasheet(email,details, credit,debit) values('$email','Rs 1000 deposited by Admin','Rs.1000','-')";
mysql_select_db('test_db');
//mkdir("users/".$username,0777);
$retval1= mysql_query( $sql1, $connection );
$retval = mysql_query( $sql, $connection );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
if (! $retval1)
{
	die('Could not give you Rs 1000 :Sorry , Error is : ' . mysql_error());
}

registermail($email);

mkdir(md5(md5($username).md5($email)), 0777);
$folder=md5(md5($username).md5($email));
$clrpasswd=$_POST['password'];
//$myfile = fopen($folder."/.htaccess", "w") or die("Unable to open file!");
fclose($myfile);
//$myfile = fopen($folder."/.htpasswd", "w") or die("Unable to open file!");
fclose($myfile);
file_put_contents($folder.'/.htaccess','AuthType Basic'. PHP_EOL, FILE_APPEND);
file_put_contents($folder.'/.htaccess','AuthName "restricted area"'. PHP_EOL, FILE_APPEND);
file_put_contents($folder.'/.htaccess','AuthUserFile /home/siddhantmanocha/apache/dropbox/'.md5(md5($username).md5($email)).'/.htpasswd'. PHP_EOL, FILE_APPEND);
file_put_contents($folder.'/.htaccess','require valid-user'. PHP_EOL, FILE_APPEND);
file_put_contents($folder.'/.htaccess','php_flag engine off', FILE_APPEND);
$clearTextPassword = $clrpasswd;
// Encrypt password
$password123 = crypt($clearTextPassword, base64_encode($clearTextPassword));
file_put_contents($folder.'/.htpasswd',$username.':'.$password123, FILE_APPEND);




header("Location:registered.php");
}
mysql_close($connection);

}
?>
<?php
ob_flush();
?>

