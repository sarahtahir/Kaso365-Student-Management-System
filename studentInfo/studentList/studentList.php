<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="Untitled-2.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #54104B ;
}

.topnav a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #F1C40F  ;
  color: white;
}

.topnav a.active {
  background-color:#E58A88 ;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #E58A88 ;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background:#F1C40F  ;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #D6B0DD ;  
  }
}
</style>
	<title> Student List </title>
</head>
	<h2 class="text-center">Student List</h2>
<body>
	
<div class="container">
	
	<div class="row">
		
		<table class="table table-hover table-responsive">
		<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">Student Attendance</a>
  <div class="search-container">
	  
    <form action="" method=post>
      <input type="text" placeholder="Search Name" name="name">
      <button type="submit" name="showAll" ><i class="fa fa-remove"></i></button>
	  <button type="submit" name="searchName" ><i class="fa fa-search"></i></button>
    </form>
	  <?php
	    include 'student.php';
			if (isSet($_POST['searchName'])){
				$studList = findName();
			}
	       else
			$studList = getListOfStudent();
	  ?>
  </div>
</div>
		   <thead bgcolor="#F1C40F">  
			   <tr>
			    <th>Student ID</th>
				<th>Name</th>
				<th>Update</th>
				<th>View Info</th>
				<th>Delete</th>
			   </tr>
			</thead>  
			   
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
				    
				    echo '<form action="studProcess.php" method="post" >';
			        echo "<input type='hidden' value='$studentID' name='studentIDDelete'>";
		            echo '<td><button type="submit" name="deleteStudBtn" data-toggle="modal" data-target="#delete"  class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></form></td>
		        </tr>
		        <tr id="d2"> </tr>
                <tr id="d4"> </tr>'; 
			$bill++; }
			?>
		    </tbody>
		</table>
	 <br/>
    <td class="text-center"><a class='btn btn-primary btn-xs' href="#"><span class="glyphicon glyphicon-plus-sign"></span> Add Student </a>
		


</body>
</html>
