<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="Untitled-2.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>	
</head>
	<h3>Student List</h3>
<body>
<div class="container">
	<div class="row">
		<table class="table table-hover table-responsive">
		    <thead>
		        <tr>
		            <th>Student ID</th>
		            <th>Name</th>
		            <th>Edit</th>
					<th>View</th>
		            <th>Delete</th>
		        </tr>
		    </thead>
		    <tbody>
			<?php	
				
			include 'student.php';
			
			$studList = getListOfStudent();
			$bil=1;
			
			while($row = mysqli_fetch_assoc($studList)) {	
		
		        echo '<tr>';
				    $studentID = $row["studentID"];
		            echo '<td>'.$row['studentID'].'</td>';
		            echo '<td>'.$row['name'].'</td>';
				
		            echo '<td>';
				    echo '<form action="viewStudentInfo.php" method="post" >';
			        echo "<input type='hidden' value='$studentID' name='studentIDView'>";
					echo '<button type="submit" data-toggle="modal" name="viewStudBtn" data-target="#edit"  class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></form>
					</td>'
					;
				
					echo '<td><button type="button" data-toggle="modal" data-target="#view" data-uid="1" class="delete btn btn-info btn-sm"><span class="glyphicon glyphicon glyphicon-eye-open"></span></button></td>
		            <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
		        </tr>
		        <tr id="d2"> </tr>
                <tr id="d4"> </tr>'; 
			$bill++; }
			?>
		    </tbody>
		</table>
	</div>
</div>
<div id="edit" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">Update Data</h4>
      </div>
      <div class="modal-body">
           <input id="fn" type="text" class="form-control" name="fname" placeholder="First Name">
           <input id="ln" type="text" class="form-control" name="fname" placeholder="Last Name">
           <input id="mn" type="text" class="form-control" name="fname" placeholder="Middle Name">
      </div>
      <div class="modal-footer">
        <button type="button" id="up" class="btn btn-warning" data-dismiss="modal">Update</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div id="delete" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h4 class="modal-title">Delete Data</h4>
      </div>
      <div class="modal-body">
        <strong>Are you sure you want to delete this data?</strong>
      </div>
      <div class="modal-footer">
        <button type="button" id="del" class="btn btn-danger" data-dismiss="modal">Delete</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</body>
</html>
