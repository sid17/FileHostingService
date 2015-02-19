<?php
session_start();

include("simple-php-captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();

if (isset($_SESSION['user_id']))
{
  header("Location: myhome.php?username=".$_SESSION['user_id']);
  echo 'true';
}
else
{
  echo 'false';
}
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
              <li class="active"><a href="homepage.php"><span style="font-size:30px"><b>HOME</b></span></a></li>
              </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	</div>

    <div class="container" style="margin-top:200px;">
<form action="confirmlogin.php" method="POST" class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="username"><b>username</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" id="username" name="username"  placeholder="Username">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label " for="inputPassword"><b>Password</b></label>
    <div class="controls">
      <input type="password"  name="password" class="input-xlarge btn-large" id="inputPassword" placeholder="Password">
    </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <img src="<?php echo $_SESSION['captcha']['image_src']?>"></img>

<div class="control-group">
    
    <div class="controls">
      <input type="text"  name="captcha" class="input-xlarge btn-large" id="captcha" placeholder="Captcha">
    </div>
  </div>
      <span><button type="submit" class="btn btn-large"><span style="margin-left:25px;margin-right:25px">Log In</span></button><span class="pull-right" >Not Registered <a href="register.php" class="btn">Sign Up</a></span></span>
       
    </div>
  </div>


      <a href="forgot.php"><h4><b>Forgot Password?</b></h4></a>


</form>


    </div> 
     <script src="jquery/jquery.js"></script>
 <script src="bootstrap/js/bootstrap.min.js"></script>
    

  </body>
</html>
