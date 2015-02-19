<?php
session_start();
?>
<?php
 require_once("include/dbconnection.php");
?>

<?php

$transfer_from=$_POST['transfer_from'];
$transfer_to=$_POST['transfer_to'];
$amount=$_POST['amount'];


if ($transfer_from != $_SESSION['email'])
{

	echo 0;
}
else
{



	$result=mysql_query("SELECT balance101 FROM users where email='".$transfer_from."'",$connection);
	
	if (!$result)
	die("database query failed:".mysql_error());
	while ($row=mysql_fetch_array($result))
	{
		    if ($row['balance101']<$amount || $amount< 0 )
			{
		 	echo 1;
			}
		else
		{


			mysql_query("SET AUTOCOMMIT=0");
			mysql_query("START TRANSACTION");

			$result1=mysql_query("UPDATE users SET balance101=balance101+".$amount." where email='".$transfer_to."'",$connection);
			
			if (!$result1)
			{
				echo 0;
				die("database query failed:".mysql_error());
			}
			
			$result2=mysql_query("UPDATE users SET balance101=balance101-".$amount." where email='".$transfer_from."'",$connection);
			
			if (!$result2)
			{
				echo 0;
				die("database query failed:".mysql_error());
			}
			

			


$sql1 ="INSERT INTO datasheet(email,details, credit,debit) values('$transfer_from','Amount transferred to $transfer_to','-','Rs. $amount')";
$sql2 ="INSERT INTO datasheet(email,details, credit,debit) values('$transfer_to','Amount transferred from  $transfer_from','Rs.$amount','-')";

$retval1= mysql_query( $sql1, $connection );
$retval2= mysql_query( $sql2, $connection );

if ($retval1 && $retval2 && $result2 && $result1)
{
	mysql_query("COMMIT");
	echo 4;
}
else
{
	mysql_query("ROLLBACK");
	echo 2;

}

		}
	}
}
//5.close the coonection
mysql_close($connection);

?>
