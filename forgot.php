<!DOCTYPE html>
<script src="js/jquery-1.10.2.js"></script>

<?php
session_start();

include("simple-php-captcha/simple-php-captcha.php");
$_SESSION['captcha'] = simple_php_captcha();
?>

<?php
if (isset($_GET['v']))
{
    if ($_GET['v']==0)
        echo"<script>alert('Email contains values that may cause security breaches! You will be Reported');</script>";
    else if ($_GET['v']==1)
        echo"<script>alert('Empty Email Address');</script>";
    else if ($_GET['v']==2)
         echo"<script>alert('Invalid Email Address or captcha Entered');</script>";
    else if ($_GET['v']==3)
        echo"<script>alert('Mail sent successfully');</script>";
    else if ($_GET['v']==4)
         echo"<script>alert('Mail sending failed');</script>";
     else if ($_GET['v']==5)
         echo"<script>alert('Could not find the email');</script>";
}
?>

<style>
.messageBox {  
width:250px;  
padding:15px;  
border:1px solid #666; 
background-color: white;
color:black; 
position:fixed; rightright:2%;  
top:2%;  
z-index:100000;  
-webkit-border-radius: 6px; -moz-border-radius: 6px;}  
</style>

<div class="messageBox" id='msg_1' style="position:fixed;left:40%;top:5%;display:none;">Here we say something very important!</div>  
 <script>  
 function display_message(my_message)
{
    document.getElementById('msg_1').innerHTML=my_message;
    $('#msg_1').show();
    setTimeout(function() {  
    $('.messageBox').fadeOut('fast');  
    }, 1000); // <-- time in milliseconds  
}
</script>







<html lang="en">
<!-- images 1900X 1080 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Forgot Password</title>
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Add custom CSS here -->
  

    <!-- Add custom CSS here -->
   

 
    <script src="bootstrap/js/bootstrap.js"></script>
   


</head>
  <body>      
    
 <div class="container">
    <div class="row">
        <h2>Forgot Password</h2>
    </div>
    
    <div class="row">
        <div class="col-sm-offset-4 col-sm-4">
            <form action="forgotprocess.php" method="post">
            

		


                <div class="form-group">
                    <label for="email">Enter your primary email address and submit</label>
                    <div class="input-group" data-validate="email">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
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
               
                
                
                <button type="submit" class="btn btn-primary col-xs-12" >Submit</button>
            </form>
            <a href='http://localhost/squirrelmail/src/login.php'>Check your emails at the squirrel mail</a>
        </div>
  </body>
</html>


