<?php
session_start();
?>

<?php
$dir    = 'uploads';
$files1 = scandir($dir);
$i=0;
foreach ($files1 as &$value) 
{
$i=$i+1;
if($i>2)
{
    //echo $value;

//$domain = strstr($value, '_');
//echo $domain; // prints @example.com

$user = strstr($value, '_', true); // As of PHP 5.3.0
//echo $user;
if ($_SESSION['user_id']==$user)
{
    //echo $user; // prints name
$domain = strstr($value, '_');
    echo "<a href='uploads/$value'>".substr($domain, 1)."</a>";
}

//echo $_SESSION['user_id'];

}

}

//print_r($files1);
//print_r($files2);
?>

