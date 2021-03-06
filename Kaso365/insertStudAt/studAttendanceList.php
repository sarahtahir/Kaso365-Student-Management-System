<?php
session_start();
include "../navBar/studentAttNavBar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student Attendance List</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
    body {
        color: #566787;
        background: #f7f5f2;
		font-family: 'Roboto', sans-serif;
	}
	.table-responsive {
    	margin: 30px 0;
	}
	.table-wrapper {
		min-width: 1000px;
        background: #fff;
        padding: 20px 25px;
		border-radius: 3px;
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
		color: #fff;
		background: #40b2cd;		
		padding: 16px 25px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
    }
    .table-title h2 {
        margin: 5px 0 0;
        font-size: 24px;
    }
	.search-box {
        position: relative;
        float: right;
    }
	.search-box .input-group {
		min-width: 300px;
		position: absolute;
		right: 0;
	}
	.search-box .input-group-addon, .search-box input {
		border-color: #ddd;
		border-radius: 0;
	}	
    .search-box input {
        height: 34px;
        padding-right: 35px;
        background: #f4fcfd;
        border: none;
        border-radius: 2px !important;
    }
	.search-box input:focus {
        background: #fff;
	}
	.search-box input::placeholder {
        font-style: italic;
    }
	.search-box .input-group-addon {
        min-width: 35px;
        border: none;
        background: transparent;
        position: absolute;
        right: 0;
        z-index: 9;
        padding: 6px 0;
    }
    .search-box i {
        color: #a0a5b1;
        font-size: 19px;
        position: relative;
        top: 2px;
    }
    table.table {
        table-layout: fixed;
        margin-top: 15px;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:first-child {
        width: 60px;
    }
    table.table th:last-child {
        width: 120px;
    }
    table.table td a {
        color: #a0a5b1;
        display: inline-block;
        margin: 0 5px;
    }
	table.table td a.view {
        color: #03A9F4;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }    
</style>
<script>
$(document).ready(function(){
	// Activate tooltips
	$('[data-toggle="tooltip"]').tooltip();
    
	$('.updateBtn').on('click', function() {
		
		$('#updateModal').modal('show');
		
		$tr = $(this).closest('tr');
		
		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();
		
		console.log(data);
		$('#studentID').val(data[0]);
		$('#name').val(data[1]);
		$('#attendance_status').val(data[2]);
    });
});
</script>
</head>
<body>
<div class="container">
    <div class="table-responsive">
        <div class="table-wrapper">			
            <div class="table-title">
                <div class="row">
					<div class="col-xs-4">
						<h2>Student Attendance List</h2>			
						
					</div>
					<div class="col-xs-2">Select attendance date</div>
                    <div class="col-xs-2">
					
					 <form action="" method="post">
                     <input type="date" name="attendance_date" class="form-control">
                     
                   </div>
					
					<div><button type="submit" name="getAttendanceBtn" ><i class="fa fa-search"></i>
						</button></form>
					<a href="studAttendance.php" class="btn btn-success btn-sm" ><i class="material-icons">&#xE147;</i> <span>Add Attendance</span></a>
				
				</div>
				
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th style="width: 22%;">Student Name</th>
                        <th style="width: 22%;">Attendance</th>
						<th>Update</th>
                    </tr>
                </thead>
                <tbody>
					<?php 
						
					include 'attendance.php';		    
				 					
				   if (isSet($_POST['getAttendanceBtn'])){	
				   
				   $studList = getAttendance();
				   }				   
				
                   while($row = mysqli_fetch_assoc($studList)) { 
						?>
						<tr> 
				
                           <td><?php echo $row["studentID"]; ?> </td>                         
                           <td><?php echo $row["name"]; ?> </td>
                           <td>
                              <?php echo $row["attendance_status"]; ?>                    
                           </td>
							<td>
								<button type="button" class="btn btn-info updateBtn">Update</button> 
							</td>
            </tr>
						<?php } ?>
                      
                </tbody>
            </table>
        </div>
    </div> 
 <div id="updateModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="attendance.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Update Attendance</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>student ID</label>
							<input type="text" name="studentID" id="studentID"class="form-control" readonly >
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" id="name" class="form-control" readonly>
						</div>
						<div class="form-group">
						  <label>Attendance:</label>
							<label for="present0">
                              <input type="radio" id="present0" name="attendance_status" checked value="Present"> Present
                              </label>
                            <label for="absent0">
                              <input type="radio" id="absent0" name="attendance_status" value="Absent"> Absent
                            </label> 
					        <label for="late0">
                              <input type="radio" id="absent0" name="attendance_status" value="Late"> Late
                           </label>
						</div>						
											
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" name="updateBtn" value="Update">
					</div>
				</form>
			</div>
		</div>
	</div>  
</body>
</html>