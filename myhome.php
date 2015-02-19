<?php
require_once("include/session.php");
?>
<?php
confirm_logged_in();
?>
<?php
if (isset($_GET['query']))
{
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
	  <div class="col-md-6" >

<a class="btn btn-primary" href="bank.php?username=<?php global $username;echo $username1; ?>" ><span style="font-size:2em">BANK TRANSACTIONS</span> </a>
			

	</div>
 <div class="col-md-6" >


	

<a class="btn btn-primary" href="filehost.php?username=<?php global $username;echo $username1;?>" ><span style="font-size:2em">DROPBOX-FILE HOSTING</span> </a>
		
</div>
</div>
</div>
<!--/.fluid-container-->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="jquery/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
    

  </body>
</html>
