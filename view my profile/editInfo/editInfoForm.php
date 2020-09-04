<?php

include '../profile.php';
$staffID = $_POST['staffID'];
$qry= getStaffInformation($staffID);
$row = mysqli_fetch_assoc($qry);

$staffID = $row['staffID'];
$name = $row['name'];
$gender = $row['gender'];
$BOD = $row['BOD'];
$address = $row['address'];
$position = $row['position'];
$phonenum = $row['phonenum'];

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Update Information</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>Update Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1></h1></div>
    	<div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        
      </div></hr><br>

          
    
         
          
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home">Home</a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  
                      <div class="form-group">
                          <form action="../process.php" method="post">
                          <div class="col-xs-6">
                              <label for="staffID"><h4>ID</h4></label>
                              <?php
							  echo "<input type='text' class='form-control' name='newStaffID' id='staffID' placeholder='ID' value='$staffID'title='enter your ID.'>";
							  echo "<input type='hidden' name='staffID' value='$staffID'";
							  ?>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="name"><h4>Name</h4></label>
                              <?php
							  echo "<input type='text' value='$name' class='form-control' name='name' id='Name' placeholder='Name' title='enter your name.'>"; ?>
                          </div>
                      </div>
          
					  <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name">Gender<h4></h4></label>
                              <?php 
							  echo "<input type='text' value='$gender' class='form-control' name='gender' id='gender' placeholder='gender' title='enter your gender.'>"; ?>
                          </div>
                      </div>
					  
          <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="BirthDate"><h4>Date of Birth</h4></label>
                              <?php
							  echo "<input type='date' value='$BOD' class='form-control' name='BOD' id='BOD' placeholder='BOD' title='enter your Birth of day.'>"; ?>
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone Number</h4></label>
                              <?php 
							  echo "<input type='text' value='$phonenum' class='form-control' name='phonenum' id='phone' placeholder='enter phone' title='enter your phone number if any.'>";
							  ?>
                          </div>
                      </div>
          
                     
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="text"><h4>Address</h4></label>
                              <?php 
							   echo "<input type='text' value='$address' class='form-control' name='address' id='text' placeholder='text' title='enter your address.'>"; ?>
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Position</h4></label>
                              <?php
							  echo "<input type='position' value='$position' class='form-control' id='position' placeholder='position' name='position' title='enter position'>"; ?>
                          </div>
                      </div>
                      
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit" name="updateStaffButton"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
             
    </div><!--/row-->
                                                      

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../js/popper.min.js"></script> 
	<script src="../js/bootstrap-4.4.1.js"></script>
  </body>
</html>