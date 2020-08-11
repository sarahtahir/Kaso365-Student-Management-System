<!DOCTYPE html>
<html>
<head>
<title>Font Awesome Icons</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<title>User List</title>

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
<h2> User List </h2>
	<input type="submit" class ="w3-display-right" value="Submit">
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
		        <tr id="d1">
		            <td>A18DW1013</td>
		            <td id="f1">Nur Ain Naim</td>
		           <td><button type="button" data-toggle="modal" data-target="#view" data-uid="1" class="view btn btn-warning btn-sm"><span class="glyphicon glyphicon-user"></span></button></td>
		            <td><button type="button" data-toggle="modal" data-target="#update" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
		            <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
		        </tr>
		        <tr id="d2">
		            <td>A18DW0066</td>
		            <td id="f2">Aminah Zaharah Naim</td>
                    <td><button type="button" data-toggle="modal" data-target="#view" data-uid="2" class="view btn btn-warning btn-sm"><span class="glyphicon glyphicon-user"></span></button></td>
		            <td><button type="button" data-toggle="modal" data-target="#update" data-uid="2" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
		            <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="2" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
		        </tr>
                <tr id="d2">
		            <td>A18DW1111</td>
		            <td id="f2">Asyfarr Razali Rezal</td>
                    <td><button type="button" data-toggle="modal" data-target="#view" data-uid="2" class="view btn btn-warning btn-sm"><span class="glyphicon glyphicon-user"></span></button></td>
		            <td><button type="button" data-toggle="modal" data-target="#update" data-uid="2" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></td>
		            <td><button type="button" data-toggle="modal" data-target="#delete" data-uid="2" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></td>
		        </tr>
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
