<?php

//addNewStud function==================
function getUserInformation($staffID)
{
//create connection
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
$sql = "select * from users where staffID = '".$staffID."'";

$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function showUserType($userType)
{
	echo '<select name="userType" class="form-control" id="sel1">';
    
    echo '<option selected="true" disabled="disabled">Please Select User Type</option>';
    
	if ($userType == 'Admin'){
		echo "<option value='Admin' selected>Admin</option>";
	}
	
	else {
		echo "<option value='Admin'>Admin</option>";
	}
	
	if ($userType == 'Staff'){
		echo "<option value='Staff' selected>Staff</option>";
	}
	else {
		echo "<option value='Staff'>Staff</option>";
	}	
   echo '</select>';                                         
}

function showQuestion($question)
{
	echo '<select name= "question" class="form-control" id="sel1">';
    
	echo '<option selected="true" disabled="disabled">Please Select Security Question</option>';
    
	if ($question == 'Which is your favorite movie?'){                                        
	echo '<option value="Which is your favorite movie?" selected>Which is your favorite movie?</option>';
	}
	
	else{
	echo '<option value="Which is your favorite movie?">Which is your favorite movie?</option>';
	}
	
	if ($question == 'What is your pets name?'){
	echo '<option value="What is your pets name?" selected>What is your pets name?</option>';
	}
	
	else {
	echo '<option value="What is your pets name?">What is your pets name?</option>';	
	}
	
	if ($question == 'What is the name of your village?'){
	echo '<option value="What is the name of your village?" selected>What is the name of your village?</option>';
	}
	
	else {
	echo '<option value="What is the name of your village?">What is the name of your village?</option>';	
	}
	echo '</select>';
}

function updateUser(){
	
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
	
$oldStaffID = $_POST['staffID'];
$newStaffID = $_POST['newStaffID'];
$userType = $_POST['userType'];
$username = $_POST['username'];
$email = $_POST['email'];
$question = $_POST['question'];
$answer = $_POST['answer'];
	
$sql = "UPDATE users SET staffID='$newStaffID', userType='$userType', username ='$username', email='$email', question='$question', answer='$answer' WHERE staffID='$oldStaffID'";

$qry= mysqli_query($con,$sql);
return $qry;	
}
?>