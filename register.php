<?php

if (isset($_GET['v']))
{
  if ($_GET['v']==1)
  {
echo '<script> alert("First name contains character that cause security breaches!Your IP will be Reported!"); </script>';
  }
  else if ($_GET['v']==2)
  {
echo '<script> alert("Last name contains character that cause security breaches!Your IP will be Reported!"); </script>';
  }
  else if ($_GET['v']==3)
  {
echo '<script> alert("User name contains character that cause security breaches!Your IP will be Reported!"); </script>';
  }
  else if ($_GET['v']==4)
  {
echo '<script> alert("Email contains character that cause security breaches!Your IP will be Reported!"); </script>';
  }
  else if ($_GET['v']==5)
  {
    echo '<script> alert("Password contains character that cause security breaches!Your IP will be Reported!"); </script>';
  }

}

?>

<?php
session_start();

include("simple-php-captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>My Dropbox!</title>
   
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
     
  </head>

  <body>
<div style="color:red">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div style="height:70px" class="container">
          
          
          <div class="nav-collapse">
            <ul style="margin-top:30px"class="nav">
              <li class="active"><a href="myhome.php"><span style="font-size:30px"><b>HOME</b></span></a></li>
              
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	</div>
  

    <div class="container" style="margin-top:200px;">
      <form action="registerprocess.php" method="POST" class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="firstname"><b>Firstname</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" name="firstname" id="firstname" placeholder="First Name">
	<?php
	if(isset($_GET['efirst']))
{
  if($_GET['efirst']==1)
  {
   echo("<span style='color:red' >field cant be blank</span>"); 
  }
  else if($_GET['efirst']==2)
  {
    echo("<span style='color:red' >only alphabets allowed</span>");
  }
}
	?>
    </div>
  </div><form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="last name"><b>Lastname</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" name="lastname" id="lastname" placeholder="Last Name">
	<?php
	if(isset($_GET['elast']))
{
  if($_GET['elast']==1)
  {
    echo("<span style='color:red' >field cant be blank</span>");
  }
  else if($_GET['elast']==2)
  {
    echo("<span style='color:red' >Only alphabets allowed</span>");
  }
}
	?>
    </div>
  </div>

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="username"><b>username</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" name="username" id="username" placeholder="Username">
	<?php
	if(isset($_GET['euser']))
{
  if($_GET['euser']==1)
  {
    echo("<span style='color:red' >field cant be blank</span>");
  }
  else if($_GET['euser']==2)
  {
    echo("<span style='color:red' >only alphabets numbers and underscore allowed</span>");
  }
  else if ($_GET['euser']==3)
  {
    echo("<span style='color:red' >username exists . choose a different name</span>");
  }
}
	?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail"><b>email</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text"  name="email" id="inputEmail" placeholder="Email">
	<?php
	if(isset($_GET['eemail']))
{
  if($_GET['eemail']==1)
  {
    echo("<span style='color:red' >field cant be blank</span>");
  }
  else if($_GET['eemail']==2)
  {
    echo("<span style='color:red' >enter a valid email</span>");
  }
}
	?>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label " for="inputPassword"><b>Password</b></label>
    <div class="controls">
      <input type="password" class="input-xlarge btn-large" name="password" id="inputPassword" placeholder="Password">
      <span style='color:green' ><br>Passwords specifications: atleast one small,caps,special character,min length 8 </span>
    </div>
  </div>
  <div class="control-group">
    <label class="control-label " for="inputcPassword"><b>confirm password</b></label>
    <div class="controls">
      <input type="password" class="input-xlarge btn-large" name="cpassword" id="inputcPassword" placeholder="confirmPassword">
    <?php
	if(isset($_GET['epass']))
{
  if($_GET['epass']==1)
  {
   echo("<span style='color:red' >Passwords dont match </span>") ;
  }
  else if ($_GET['epass']==2)
  {
    echo("<span style='color:red' >Passwords not in requisite format</span>") ;
  }
  
}
?>
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox" name="check">I agree the terms of use<br>
	<?php
	if(isset($_GET['echeck']))
{
  if($_GET['echeck']==1)
  {
   echo("<span style='color:red' >Accept the terms and conditions</span>") ;
  }
  
}
	?>
      </label>


<img src="<?php echo $_SESSION['captcha']['image_src']?>"></img>

<div class="control-group">
    
    <div class="controls">
      <input type="text"  name="captcha" class="input-xlarge btn-large" id="captcha" placeholder="Captcha">
    </div>
  </div>


      <button type="submit" class="btn btn-large">Sign in</button>
    </div>
  </div>
</form>

    </div> 
     <script src="jquery/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
   


  </body>
</html>
