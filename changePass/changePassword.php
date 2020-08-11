<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="../Change Password/css/bootstrap-4.4.1.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="change-password">
	<form action="checkPassword.php" method="post">
        <div class="card-header">
            <h2>Change Your Password</h2>
        </div>
        <div class="card-body">
			
            <div class="form-group">				
                <label for="pwd">New Password</label>
                <input type="password" id="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <label for="pwd">Repeat Password</label>
                <input type="password" id="confirm_password"  class="form-control">
                <span class="form-text small text-muted">Type the password again
                </span>
            </div>            
            <div class="form-group">
                <input type="submit" class="btn" data-toggle="modal" data-target="#myModal" Value="Click on this button to verify">
					
            </div>
        </div>
		</form>
    </div>
   

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../Change Password/js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../Change Password/js/popper.min.js"></script> 
	<script src="../Change Password/js/bootstrap-4.4.1.js"></script>
	<script>
	  var password = document.getElementById("password")
       , confirm_password = document.getElementById("confirm_password");

       function validatePassword(){
        if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity("Passwords Don't Match");
		else {
           confirm_password.setCustomValidity('');
        } 
       }
		password.onchange = validatePassword;
       confirm_password.onkeyup = validatePassword;
	  </script>
  </body>
</html>