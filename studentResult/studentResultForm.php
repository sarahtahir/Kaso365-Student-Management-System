<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Student Result</title>
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
						<h2>Insert Results</h2>			
						
					</div>
					<div class="col-xs-2">Select exam and year</div>
                    <div class="col-xs-2">
					
					 <form action="result.php" method="post">
                     <select class="form-control" name="exam" >
		                       <option value="early Year"> Early Year</option>
		                       <option value="mid Term">Mid Term</option>
		                       <option value="final">Finals</option>	
	                       </select>	
                     
                   </div>
					<div class="col-xs-2">
				   <select class="form-control" name="year" id="year">
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
					</div>
					
				
                </div>
            </div>
            <table class="table table-striped">
                <thead>
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
					$studList = getListStudent();
					
                    while($row = mysqli_fetch_assoc($studList)) { 
					?>
				<td>
					<?php echo $row["studentID"]; ?>	                   
                </td>
				<td>
					<?php echo $row["name"]; ?>				    
				</td>
                <td> 
                <input type="text" name="sirah<?php echo $row["studentID"]; ?>" size="3" >  
                </td>
				<td> 
                <input type="text" name="akhlak<?php echo $row["studentID"]; ?>"size="3" >  
                </td>
				<td> 
                <input type="text" name="ibadah<?php echo $row["studentID"]; ?>" size="3" >  
                </td>
				<td> 
                <input type="text" name="akidah<?php echo $row["studentID"]; ?>" size="3">  
                </td>
				<td> 
                <input type="text" name="jawi<?php echo $row["studentID"]; ?>" size="3">  
                </td>
				<td> 
                <input type="text" name="alquran<?php echo $row["studentID"]; ?>" size="3">  
                </td>
            </tr>
				<?php } ?>
                      
                </tbody>
            </table>
        </div>
    </div> 
  <button type="submit" class="btn btn-success" name="addBtn">Record Result</button> 
</body>
</html>