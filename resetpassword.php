<!DOCTYPE html>
<script src="jquery/jquery.js"></script>

<?php

?>
<html lang="en">
<!-- images 1900X 1080 -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

   <title>hello</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.css" rel="stylesheet">
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
            <form action="reset.php" method="post">
            

		


                <div class="form-group">
                    <label for="email">Email</label>
                    <div class="input-group" data-validate="email">
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email" required>
                        <span class="input-group-addon danger"><span class="glyphicon glyphicon-remove"></span></span>
                    </div>
                </div>


                <div class="form-group">
                    <label for="email">Confirmation String</label>
                    <div class="input-group" >
                        <input type="password" class="form-control" name="confstr" id="confstr" placeholder="Confirmation String" required>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="email">New Password</label>
                    <div class="input-group" >
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="New Password" required>
                        <span class="input-group-addon success"><span class="glyphicon glyphicon-ok"></span></span>
                    </div>
                </div>

		
               
                
                
                <button type="submit" class="btn btn-primary col-xs-12">Submit</button>
            </form>
        </div>
  </body>
</html>


