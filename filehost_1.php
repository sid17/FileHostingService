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
	  <div class="col-md-6" >

<h1> Upload files</h1>
			<form enctype="multipart/form-data" method="post" action="file_upload_script.php" style="margin-top:60px">
			
			<input name="file1" type="file"  /><br /><br />
			<input type="submit" class="btn btn-primary" value="Upload It" />
			</form>

	</div>
  <div class="col-md-6" >

<table class="table table-hover">
      <thead>
        <tr>
          
          <th>Directory Listing</th>
          
        </tr>
      </thead>
 <tbody>


			
			<?php
			$dir    =md5(md5($_SESSION['user_id']).md5($_SESSION['email']));
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
			$user1=strstr($value, '@', true);
			//echo $user;

			if ($_SESSION['user_id']==$user || $_SESSION['user_id']==$user1 )
			{
			    //echo $user; // prints name
if ($_SESSION['user_id']==$user1)
{


$domain = strstr($value, '@');
			    echo "<a href='uploads/$value'>".substr($domain, 1)."</a><br>";
//echo "<a href='a.php'>".substr($domain, 1)."</a><br>";

}
else
{
			$domain = strstr($value, '_');
			//echo "<a href='uploads/$value'>".substr($domain, 1)."</a><br>";
echo "<tr style='cursor: pointer; ' id='".$value."' onclick='download(this.id)' ><td>".substr($domain, 1)."</td> </tr>";


}
			}
			}

			}
			?>  


 </tbody>
    </table>


</div>
 
</div>    	

</div>


	

         


         
  
          
    

    </div><!--/.fluid-container-->
    
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
     <script src="jquery/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
    <script>

function download(a)
{

$.ajax
    ({
        type: "POST",
        url: "download.php",
        
    })
    .done(function(msg2) 
    {

    	window.location = 'download.php?filename='+a;
    //alert(msg2);
    //alert(msg2);
    // if (msg2!=1)
    // {

    //     alert("Transaction Successful");

    // }
    // else
    // {
    //     alert("Transaction unsuccessful , may be insufficient funds");
    
    // }
    });


}

    </script>

  </body>
</html>