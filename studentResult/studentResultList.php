<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="../Untitled-2.css" rel="stylesheet" type="text/css">
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
<title>Student Result</title>
</head>
	
<h2>Student Result</h2>
	
<body>
		<div class="container">
	<div class="row">
		
	
		<table class="table table-hover table-responsive">
				<div class="topnav">
  <a class="active" href="#home">Home</a>
  
  
	
</div>
			<br>
	<form action="" method="post">
			<div class="dateDiv"> 
		Select exam and year 
	<select name="exam">
		<option value="early Year"> Early Year</option>
		<option value="mid Term">Mid Term</option>
		<option value="final">Finals</option>		
	</select>			
	<select name="year">
		<Option value="2015">2015</Option>
		<option value="2016">2016</option>
		<option value="2017">2017</option>
		<option value="2018">2018</option>
		<option value="2019">2019</option>
		<option value="2020">2020</option>
		<option value="2021">2021</option>
		<option value="2022">2022</option>
		<option value="2023">2023</option>
		<option value="2024">2024</option>
	</select>
     <button type="submit" name="getMarksBtn" ><i class="fa fa-search"></i></button>
				</form>
		<br><br>
	</div>
		<thead bgcolor="#F1C40F">  
            <tr>                
                <th>Student ID</th>
                <th>Student Name</th>
                <th>Sirah</th>
				<th>Akhlak</th>
				<th>ibadah</th>
				<th>Akidah</th>
				<th>Jawi</th>
				<th>Al-quran</th>
				
            </tr>
			</thead>
			
			<tbody>				
            <tr>               
					<?php
				
				
					include 'result.php';
					
				   if (isSet($_POST['getMarksBtn'])){
				 	session_start();					
				   $studList = getMarks();
				   }
				
                    while($row = mysqli_fetch_assoc($studList)) { 
					?>
				<td>
					<?php echo $row["studentID"]; ?>	                   
                </td>
				<td>
					<?php echo $row["name"]; ?>				    
				</td>
                <td> 
                <?php echo $row["sirah"]; ?>  
                </td>
				<td> 
                <?php echo $row["akhlak"]; ?>
                </td>
				<td> 
                <?php echo $row["ibadah"]; ?>  
                </td>
				<td> 
                <?php echo $row["akidah"]; ?>  
                </td>
				<td> 
                <?php echo $row["jawi"]; ?>  
                </td>
				<td> 
                <?php echo $row["alquran"] ?>
                </td>
            </tr>
				<?php } ?>
            
             
        </tbody>
    </table>
     <form action="updateResultsForm.php">	
    <td class="text-center"><button type="submit"  name="updateBtn" class='btn btn-success'><span class="glyphicon glyphicon-check"></span> Edit Marks </button></form>
		
		
    
</body>
</html>
