<?php

include 'user.php';
$staffID = $_POST['staffIDUpdate'];
$qry = getUserInformation($staffID);
$row = mysqli_fetch_assoc($qry);

 $username = $row['username'];
$email = $row['email'];
$userType = $row['userType'];
$question = $row['question'];
$answer = $row['answer'];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update User</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!Doctype html>
<html>
<head>
     <meta charset="UTF-8">
     <title>Update User</title>
     	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
 <div class="container">
 <!---heading---->
     <header class="heading"> Update User </header><hr></hr>
	<!---Form starting----> 
	
	<form class="form" action="userProcess.php" method="post" id="registrationForm">
	<div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">User Type :</label></div>
				  <div class="col-xs-8">
			             <div class="form-group">
                                        <div class="input-group">
                                            <?php
											  showUserType($userType);
											?>
											<br> <br>
                                        </div>
				 </div>
					 </div>
					  <br></br>
	<div classs="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Staff ID :</label></div>
				  <div class="col-xs-8">
			          <?php  
					  
					  echo "<input type='text' name='newStaffID' value='$staffID' placeholder='Enter Your ID' class='form-control'>";
					  
					  echo "<input type='hidden' name='staffID' value='$staffID' >";
					  
					  ?>
					  <br> <br>
				 </div>
		 
		 
         <div class="col-sm-12">
		     <div class="row">
			     <div class="col-xs-4">
                     <label class="pass">Username :</label></div>
				<div class ="col-xs-8">	 
		             <?php
					echo "<input type='text' name='username' value='$username' placeholder='Enter your Username' class='form-control'>";
					?>
				 </div>
          </div>
			  <br> <br>
		  </div>
		<div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Email :</label></div>
				  <div class="col-xs-8">
			             <?php
					  echo "<input type='text' name='email' value='$email'  placeholder='Enter your Email' class='form-control'>";
					  ?>
				 </div>
          </div>
			
			<br> <br>
			</div>
			
		<div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="pass">Security Question :</label></div>
				  <div class="col-xs-8">
			             <div class="form-group">
                                        <div class="input-group">
                                            <?php
											showQuestion($question);
											?>
                                        </div>
				 </div>
					<br>
          </div>
		
		  </div>
		<div class="col-sm-12">
		         <div class="row">
				     <div class="col-xs-4">
		 	              <label class="answer">Answer :</label></div>
				  <div class="col-xs-8">
			             <?php
					  echo "<input type='text' name='answer' value='$answer' placeholder='Enter your Answer' class='form-control'>";
					 ?>
				 </div>
          </div>
		  </div>
		  <br><br>
			
		  	 </div>
		     <div class="col-sm-12">
		         <button type="submit" name="updateUserBtn" class="btn btn-warning">Update</div>
				 </form>
				 ?>
		   </div>
		 </div>
	 </div>	 
		 		 
		 
</div>

</body>		
</html>
	 
	 

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>