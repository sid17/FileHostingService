
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
	    </div>
  </div><form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="last name"><b>Lastname</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" name="lastname" id="lastname" placeholder="Last Name">
	    </div>
  </div>

<form class="form-horizontal">
  <div class="control-group">
    <label class="control-label" for="username"><b>username</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text" name="username" id="username" placeholder="Username">
	    </div>
  </div>
  <div class="control-group">
    <label class="control-label" for="inputEmail"><b>email</b></label>
    <div class="controls">
      <input class="input-xlarge  btn-large" type="text"  name="email" id="inputEmail" placeholder="Email">
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
        </div>
  </div>
  <div class="control-group">
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox" name="check">I agree the terms of use<br>
	      </label>


<img src="/dropbox/simple-php-captcha/simple-php-captcha.php?_CAPTCHA&amp;t=0.58242300+1415110565"></img>

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
