<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
      <div class="row">
      <div class="col-md-5  toppad  pull-right col-md-offset-3 ">
           <A href="edit.html" >Edit Profile</A>

        <A href="edit.html" >Logout</A>
       <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
			<?php
				
			   include 'student.php';
			   $qry = getStudentInfo();
	           $row = mysqli_fetch_assoc($qry);
				
              echo '<h3 class="panel-title">'.$row['name'].'</h3>';
            echo '</div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="https://cdn5.vectorstock.com/i/1000x1000/84/29/student-girl-flat-style-beautiful-icon-avatar-eps-vector-14428429.jpg" class="img-circle img-responsive"> </div>';
                
                
                echo '<div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>';
                      echo '<tr>';
                        echo '<td>ID:</td>';
                        echo '<td>'.$row['studentID'].'</td>';
                     echo '</tr>';
                     echo '<tr>';
                        echo '<td>Name: </td>';
                        echo '<td>'.$row['name'].'</td>';
                      echo '</tr>';
                      echo '<tr>';
                        echo '<td>Date of Birth</td>';
                        echo '<td>'.$row['BOD'].'</td>';
                      echo '</tr>
                   
                         <tr>
                             <tr>
                        <td>Gender</td>';
                        echo '<td>'.$row['gender'].'</td>';
                      echo '</tr>
                        <tr>
                        <td>Home Address</td>';
                        echo '<td>'.$row['address'].'</td>';
                      echo '</tr>';
						
						echo '<tr>
                        <td>Parents Name</td>';
                        echo '<td>'.$row['pname'].'</td>';
                           
                      echo '</tr>
                        <tr>
                        <td>Parents Phone Number</td>';
                      echo '<td>'.$row['phonenum'].'</td>';
                       echo 
                           
                      '</tr>
                     
                    </tbody>
                  </table>';
                  ?>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="studentList.php"data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>