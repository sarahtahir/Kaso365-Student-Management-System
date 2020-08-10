

<!DOCTYPE html>
<html>
<head>
<title>Staff List</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>Staff List</title>

</head>
<style>

<link href="Untitled-2.css" rel="stylesheet" type="text/css">
	
table{
    font-family:'Calibri';
    font-size:15px;
    background-color:#fff;
    color:#333;
}
.modal-header{
    background-color:#333;
    color:#fff;
}
</style>
<body>
<h2> Staff List </h2>
<div class="container">
	<div class="row">
		<table class="table table-hover table-responsive">
		    <thead>
		        <tr>
		            <th>ID</th>
		            <th>Name</th>
                    <th>View</th>
		            <th>Update</th>
		            <th>Delete</th>
		        </tr>
		    </thead>
			<tbody>
			<?php 
			
			include 'staff.php';
			
			$staffList = getListOfStaff();
			$bil=1;
			
			while($row = mysqli_fetch_assoc($staffList)) {		    
				
		        echo "<tr>";
				$staffID = $row["staffID"];
		            echo "<td>".$row["staffID"]."</td>";
		            echo "<td>".$row["name"]."</td>";
		            echo "<td>";
				    
				    echo '<form action="viewStaffInfo.php" method="post" >';
			        echo "<input type='hidden' value='$staffID' name='staffIDView'>";
					echo '<button type="submit" data-toggle="modal" data-target="#view" name="viewStaffBtn" class="view btn btn-warning btn-sm"><span class="glyphicon glyphicon-user"></span></button>';
				    echo '</form>';
					 echo "</td>";
				
		            echo '<td><button type="button" data-toggle="modal" data-target="#update" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>';
				
		            echo '<td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>';
				
		        echo '</tr>';
					$bil++;
			}
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
           <input id="fn" type="text" class="form-control" name="fname" placeholder="Name">
      </div>
      <div class="modal-footer">
      <button type="button" id="up" class="btn btn-warning" data-dismiss="modal">View</button>
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
