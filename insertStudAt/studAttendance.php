
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../Untitled-2.css" rel="stylesheet" type="text/css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="../Insert Student Attendance - LATEST/student attendance.css" rel="stylesheet" type="text/css">
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

		.dateDiv {
		text-align: center;
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
<title>Student Attendance</title>
</head>
	
<h2>Student Attendance</h2>
	
<body>
		<div class="container">
	<div class="row">
		
	
		<table class="table table-hover table-responsive">
				<div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#about">Add Student Attendance</a>
  
	
</div>
	<form action="studProcess.php" method="post">
			<div class="dateDiv"> Attendance Date
		<input type="date" name="attendance_date" />
	</div>
		<thead bgcolor="#F1C40F">  
            <tr>
                
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Attendance</th>
		
				
            </tr>
			</thead>
			
			<tbody>
            <tr>                
                
                
					<?php
					include 'attendance.php';
					$studList = getListStudent();
					
                    while($row = mysqli_fetch_assoc($studList)) { 
					?>
				<td>
					<?php echo $row["studentID"]; ?>						
                    <input type="hidden" name="studentID" value="<?php echo $row["studentID"];?>" />
                </td>
				<td>
					<?php echo $row["name"]; ?>
				    
				</td>
                <td> 
                    <label for="present0">
                        <input type="radio" id="present0" name="attendance_status<?php echo $row["studentID"]; ?>" value="Present"> Present
                    </label>
                    <label for="absent0">
                        <input type="radio" id="absent0" name="attendance_status<?php echo $row["studentID"]; ?>" checked value="Absent"> Absent
                    </label> 
					<label for="late0">
                        <input type="radio" id="absent0" name="attendance_status<?php echo $row["studentID"]; ?>" checked value="Late"> Late
                    </label>
                </td>
            </tr>
				<?php } ?>
            
             
        </tbody>
    </table>
     
    <br/>
		<td class="text-center"><button type="submit"  name="addBtn" class='btn btn-success btn-xs'><span class="glyphicon glyphicon-check"></span> Mark Attendance </button> </form>
		
    
</body>
</html>
