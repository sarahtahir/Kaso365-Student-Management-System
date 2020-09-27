<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../Untitled-2.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="student attendance.css" rel="stylesheet" type="text/css">
	<style>
* {box-sizing: border-box;}
		
.dateDiv {
		text-align: center;
		}
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
<title>Staff Attendance List</title>
</head>
	
<h2>Staff Attendance List</h2>
	
<body>
		<div class="container">
	<div class="row">
		<table class="table table-hover table-responsive">
				<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">About</a>  
  		</div> 
	
    <div class="dateDiv"> Attendance Date
		<form action="" method="post">
		<input type="date" name="attendance_date" />
		<button type="submit" name="getAttendanceBtn" ><i class="fa fa-search"></i></button>
	    </form>
		</div>		

		<thead bgcolor="#F1C40F">  
            <tr>                
                <th>staff ID</th>
                <th>staff Name</th>
                <th>Attendance</th>
            </tr>
			</thead>
			
			<tbody>
			<?php
				include 'attendance.php';
				if (isSet($_POST['getAttendanceBtn'])){
				    $staffList = getAttendance();
				    }		       				
				
				    while($row = mysqli_fetch_assoc($staffList)) {						
					?>
            <tr> 
				
                <td>
				
                    <?php echo $row["staffID"]; ?>                    
                </td>
                <td>
                    <?php echo $row["name"]; ?>                    
                </td>
                <td>
                   <?php echo $row["attendance_status"]; ?>                    
                </td>
            </tr>
            <?php } ?>
             
        </tbody>
    </table>
     
    <br/>
		<input type="submit" name="submit" value="Edit Attendance" /> 
</body>
</html>
