<?php
require_once("include/session.php");
?>
<?php
confirm_logged_in();
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
				     
 <p class="navbar-text pull-right"> <a href="bank.php?username=<?php global $username;echo $username1; ?>">Go Back</a></p>

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
	  <div class="col-md-2" >
</div>
  <div class="col-md-8" >


<table class="table table-hover">
      <thead>
        <tr>
          
          <th>Email</th>
          <th>Details</th>
          <th>Credit</th>
          <th>Debit</th>
        </tr>
      </thead>
 <tbody>

<?php
 require_once("include/dbconnection.php");
?>
<?php
//3.perform database  query
$sql11="SELECT email,details,credit,debit FROM datasheet where email='".$_SESSION['email']."'";
//echo $sql11;
$result=mysql_query($sql11,$connection);
if (!$result)
die("database query failed:".mysql_error());
//4. Use returned data

while ($row=mysql_fetch_array($result))
{
    
echo "<tr style='cursor: pointer;'' ><td>".$row['email']."</td><td>".$row['details']."</td><td>".$row['credit']."</td><td>".$row['debit']."</td> </tr>";    
}

$result=mysql_query("SELECT balance101 FROM users where email='".$_SESSION['email']."'",$connection);
while ($row=mysql_fetch_array($result))
{

echo "<br><br>";

  echo "<tr style='cursor: pointer;'' ><td>Total Balance is equal to:</td><td></td><td>Rs.".$row['balance101']."</td><td></td> </tr>";  
  
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



            </div><!--/.fluid-container-->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="jquery/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
    

  </body>
</html>
