<?php
function Check_vulnerable($key_val) 
{
$not_allowed_keywords = array('script','drop','truncate','delete','select','create','alter','update','modify',';','--','=','<','>');
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
$val='DROP TABLE FROM USERS';
if (Check_vulnerable(strtolower($val)))
{
	echo '<script> alert("Code is vulnerable"); </script>';
}
?>