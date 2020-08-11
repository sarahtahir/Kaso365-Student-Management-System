<?php

//addNewStud function==================
function addNewUser()
{
$con = mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $staffID = $_POST['staffID'];
 $username = $_POST['uname'];
 $password = $_POST['pass'];
 $question = $_POST['question'];
 $answer = $_POST['answer'];
 $userType = $_POST['userType'];
   
  $sql="INSERT INTO users(staffID, username, password, question, answer, userType)
	VALUES ('$staffID','$username','$password','$question','$answer','$userType')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
	
	print_r($qry);
 
}

?>