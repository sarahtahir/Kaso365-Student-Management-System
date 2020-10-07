<?php
session_start();
include "../../navBar/studentListNavBar.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Student List</title>
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
    
	// Filter table rows based on searched term
    $("#search").on("keyup", function() {
        var term = $(this).val().toLowerCase();
        $("table tbody tr").each(function(){
            $row = $(this);
            var name = $row.find("td:nth-child(2)").text().toLowerCase();
            console.log(name);
            if(name.search(term) < 0){                
                $row.hide();
            } else{
                $row.show();
            }
        });
    });
	$('.deleteBtn').on('click', function() {
		
		$('#deleteModal').modal('show');
		
		$tr = $(this).closest('tr');
		
		var data = $tr.children("td").map(function() {
			return $(this).text();
		}).get();
		
		console.log(data);
		$('#deleteID').val(data[0]);
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
					<div class="col-xs-3">
						<h2>Student List</h2>
					</div>
					
                    <div class="col-xs-6">
                        <div class="search-box">
							<div class="input-group">								
								<input type="text" id="search" class="form-control" placeholder="Search by Name">
                                <span class="input-group-addon"><i class="material-icons">&#xE8B6;</i></span>
							</div>
                        </div>
                    </div>
					<?php
	                         include 'student.php';  
	                        
	                        $studList = getListOfStudent();
	                    ?>
					<div class="col-xs-3">
							<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add Student</span></a>
													
						</div>
                </div>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        
                        <th style="width: 22%;">studentID</th>
                        <th style="width: 22%;">Name</th>
                        <th>Update</th>
                        <th>View</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php

			
			$bil=1;
			
			while($row = mysqli_fetch_assoc($studList)) {	
		
		        echo '<tr>';
				    $studentID = $row["studentID"];
		            echo '<td>'.$row['studentID'].'</td>';
		            echo '<td>'.$row['name'].'</td>';
				
		            echo '<td>';
				    echo '<form action="../updateStudent/updateStudentForm.php" method="post" >';
			        echo "<input type='hidden' value='$studentID' name='studentIDUpdate'>"; 
					echo '<button type="submit" data-toggle="modal"  data-target="#edit"  class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></form>
					</td>'
					;
				
					echo '<td>';
				    echo '<form action="viewStudentInfo.php" method="post" >';
			        echo "<input type='hidden' value='$studentID' name='studentIDView'>";
					echo '<button type="submit" data-toggle="modal" data-target="#view" data-uid="1" class="delete btn btn-info btn-sm"><span class="glyphicon glyphicon glyphicon-eye-open"></span></button></form>
					</td>'
					;
					
					//echo '<form action="userProc.php" method="post" >';
			        //echo "<input type='hidden' value='$staffID' name='staffIDDelete'>"; 
		            echo '<td><button type="button" name="deleteUserBtn"  class="delete btn btn-danger btn-sm deleteBtn"><span class="glyphicon glyphicon-trash"></span></button></td>
		        </tr>';
				$bill++; }
		       ?> 
                    
                        
                </tbody>
            </table>
        </div>
    </div> 
</div>  
	
<div id="deleteModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="student.php" method="post">
					<div class="modal-header">						
						<h4 class="modal-title">Delete Student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
						<input type="hidden" name="deleteID" id="deleteID">
						<p>Are you sure you want to delete these Records?</p>
						<p class="text-warning"><small>This action cannot be undone.</small></p>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-danger" name="deleteBtn">
					</div>
				</form>
			</div>
		</div>
	</div>
<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="student.php" method="post" >
					<div class="modal-header">						
						<h4 class="modal-title">Add Student</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">	
						
						<div class="form-group">
							<label>Student ID</label>
							<input type="text" name="studentID" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" required>
						</div>
						<div class="form-group">
							                <label>Gender</label>
                                            <select name="gender" class="form-control">
                                                <option selected="true" disabled="disabled">Please Select Gender</option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
											</div>
						<div class="form-group">
							<label>Date of Birth</label>
							<input type="date" name="BOD" class="form-control" required>
						</div>
						
						<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control" required>
						</div>
																	
						<div class="form-group">
							<label>Parent/Guardian Name</label>
							<input type="text" name="pname" class="form-control" required>
						</div>	
						<div class="form-group">
							<label>Parent Phone Number</label>
							<input type="text" name="phonenum" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" class="btn btn-success" name="addBtn" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>