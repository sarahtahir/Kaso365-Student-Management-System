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
	<title> User List </title>
</head>
	<h2 class="text-center">User List</h2>
<body>
	
<div class="container">
	
	<div class="row">
		
		<table class="table table-hover table-responsive">
		<div class="topnav">
  <a class="active" href="#home">Home</a>
  
  <div class="search-container">
    <form action="" method="post">
      <input type="text" placeholder="Search Staff ID" name="staffIDFind">
      <button type="submit" name="displayAll"><i class="fa fa-remove"></i></button>
	  <button type="submit" name="findName"><i class="fa fa-search"></i></button>
    </form>
	  <?php
	  include 'user.php';
	  
	  if (isSet($_POST['findName'])){
		  $userList= findName();
	  }
	  else
	  $userList = getListOfUser();
	  ?>
  </div>
</div>
		   <thead bgcolor="#F1C40F">  
			   <tr>
			    <th>Staff ID</th>
				<th>Name</th>
				<th>View Info</th>
				<th>Update</th>
				<th>Delete</th>
			   </tr>
			</thead>
			   
		        	<?php
				
				
			$bil=1;
			
			while($row = mysqli_fetch_assoc($userList)) {	
				
		     echo '<tr>';
				    $staffID = $row["staffID"];
		            echo '<td>'.$row['staffID'].'</td>';
		            echo '<td>'.$row['username'].'</td>';
					
		           echo "<td>";
				    
				    echo '<form action="viewUserInfo.php" method="post" >';
			        echo "<input type='hidden' value='$staffID' name='staffIDView'>";
					echo '<button type="submit" data-toggle="modal" data-target="#view" name="viewUserBtn" class="view btn btn-warning btn-sm"><span class="glyphicon glyphicon-user"></span></button>';
				    echo '</form>';
					 echo "</td>";
					
	                echo '<form action="../updateUser/updateUserForm.php" method="post" >';	
				    echo "<input type='hidden' value='$staffID' name='staffIDUpdate'>";
		            echo '<td><button type="submit" data-toggle="modal" data-target="#update" data-uid="1" class="update btn btn-warning btn-sm"><span class="glyphicon glyphicon-pencil"></span></button></form></td>';
					
					echo '<form action="userProc.php" method="post" >';
			        echo "<input type='hidden' value='$staffID' name='staffIDDelete'>"; 
		            echo '<td><button type="submit" name="deleteUserBtn" data-toggle="modal" data-target="#delete" data-uid="1" class="delete btn btn-danger btn-sm"><span class="glyphicon glyphicon-trash"></span></button></form></td>
		        </tr>';
				$bill++; }
		       ?> 
		    </tbody>
		</table>
	 <br/>
    <td class="text-center"><a class='btn btn-primary btn-xs' href="../addUser/addUser.html"><span class="glyphicon glyphicon-plus-sign"></span> Add User </a>
		


</body>
</html>
