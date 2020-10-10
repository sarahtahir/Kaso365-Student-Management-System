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
           

        
       <br>
      </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
				
			<?php
			
			include 'staff.php';
			$qry = getStaffInfo();
	        $row = mysqli_fetch_assoc($qry);	
			$staffID = $row['staffID'];
				
            echo '<h3 class="panel-title">'.$row['name'].'</h3>';
            echo '</div>';
            echo '<div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="profilepic/pic'.$staffID.'.'.$row['fileExt'].'?t='.time().'" class="img-circle img-responsive"> </div>';
                
                
                echo '<div class=" col-md-9 col-lg-9 ">';
                 echo '<table class="table table-user-information">';
                   echo '<tbody>
                      <tr>
                        <td>ID:</td>';
                        echo '<td>'.$row['staffID'].'</td>';
						echo '</tr>
						<tr>
                        <td>Name:</td>';
                        echo '<td>'.$row['name'].'</td>';
						echo '</tr>
                      <tr>
                        <td>Date of Birth</td>';
                        echo '<td>'.$row['BOD'].'</td>';
                      echo '</tr>
						<tr>
                        <td>Gender</td>';
                        echo '<td>'.$row['gender'].'</td>';
                      echo '</tr>';                      
                        echo '<tr>
                        <td>Address</td>';
                        echo '<td>'.$row['address'].'</td>';
                      echo '</tr>
                      <tr>
                        <td>Position</td>';
                       echo '<td>'.$row['position'].'</td>';
                      echo '</tr>';
						echo '<tr>
                        <td>Phone Number</td>';
                        echo '<td>'.$row['phonenum'].'</td>';   
                      echo '</tr>
                     
                    </tbody>
                  </table>';
                 ?>
                </div>
              </div>
            </div>
                 <div class="panel-footer">
                        <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                        <span class="pull-right">
                            <a href="#" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                            <a href="staffList.php"data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
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