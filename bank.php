<?php
require_once("include/session.php");
?>
<?php
confirm_logged_in();
?>
<?php
if (isset($_GET['query']))
{
//echo ('alert("successfull");');
			if ($_GET['query']==1)
			{
				echo ('<script>alert("successfull");</script>');
			}
			else
			{
				echo ('<script>alert("un-successfull");</script>');
			}
}

?>
<?php
global $username1;
 $username1=$_GET['username'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Dropbox!</title>
    
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" media="screen">

      
  </head>
  <body>
<div class="container-fluid">

			    <div class="navbar navbar-inverse navbar-fixed-top">
			      <div class="navbar-inner">
				<div style="height:70px" class="container-fluid">
				  
				  <div class="nav-collapse">
				    <ul style="margin-top:25px"class="nav">
				      <li class="active"><a href="myhome.php"><span style="font-size:30px"><b>HOME</b></span></a></li>
				      
				    </ul>
				    
				     <p class="navbar-text pull-right">Logged in as <a href="#"><?php global $username;echo $username1; ?></a></p>
				     
 <p class="navbar-text pull-right"> <a href="myhome.php?username=<?php global $username;echo $username1; ?>">Go Back</a></p>

<p class="navbar-text pull-right"> <a href="logout.php">Log out</a></p>
				  </div><!--/.nav-collapse -->
				</div>
			      </div>
			    </div>
  


  <div class="row">
    
<div class="col-md-6" style="background-color:white;margin-top:200px;color:white"></div>
  <div class="col-md-6" style="background-color:white;margin-top:200px;color:white">.col-md-6</div>


  </div>
</div>


<div class="container">
<div class="row">
<div class="col-md-4" >
</div>
<div class="col-md-6" >
	<a class="btn btn-primary" href="view_transaction.php?username=<?php global $username;echo $username1; ?>" ><span style="font-size:1.5em">View Account Statement</span> </a>
<br>
<br>
<span><b>CLICK ON ANY USER ACCOUNT TO TRANSFER MONEY</b></span>
</div>

<div class="col-md-2" >
</div>
</div>
<div class="row">
	  <div class="col-md-2" >
</div>
  <div class="col-md-8" >


<table class="table table-hover">
      <thead>
        <tr>
          
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
        </tr>
      </thead>
 <tbody>

<?php
 require_once("include/dbconnection.php");
?>
<?php
//3.perform database  query
$result=mysql_query("SELECT firstname,lastname,email FROM users ",$connection);
if (!$result)
die("database query failed:".mysql_error());
//4. Use returned data
$flag=0;
while ($row=mysql_fetch_array($result))
{
    
echo "<tr style='cursor: pointer; ' id='".$row['email']."' onclick='transfer(this.id,\"".$_SESSION['email']."\")' ><td>".$row['firstname']."</td><td>".$row['lastname']."</td><td>".$row['email']."</td> </tr>";
       
        
     

    
}

//5.close the coonection
mysql_close($connection);
?>
 </tbody>
    </table>
</div>
 
<div class="col-md-2" >
</div>

</div>    	

</div>

<script>
function transfer(a,b)
{
//alert(a);

var person = prompt("Please enter the amount", "1000");

   if (person != null) 
{


		if (!isNumber(person))
		{
			alert("Not a valid amount");
		}
		else
		{
		
		if (person == 0)
		{
	alert("You are mistaken, You can't transfer zero amount!");
		}
		else
		{
var r = confirm("You want to transfer the given amount of Rs."+person+" to "+a+"?");
if (r == true) {var transfer_from=b;var transfer_to=a;var amount=person;alert("Your amount transferred successfully: Rs"+person);
$.ajax({type: "POST",url: "transfer_money.php",data: { transfer_from:b,transfer_to:a,amount:person }})
.done(function(msg2) { alert(msg2);if (msg2==4){alert("Transaction Successful");}else{alert("Transaction unsuccessful , may be insufficient funds");}});
} else {alert("Sorry!");}}
		}



}

}



function isNumber(n) 
{
  return !isNaN(parseFloat(n)) && isFinite(n);
}

</script>

	

         


         
  
          
    

    </div><!--/.fluid-container-->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="jquery/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
    

  </body>
</html>
