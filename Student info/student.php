<?php

//addNewStud function==================
function addNewStud()
{
$con = mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $studentID = $_POST['studentID'];
 $name = $_POST['name'];
 $gender = $_POST['gender'];
 $BOD = $_POST['BOD'];
 $address = $_POST['address'];
 $pname = $_POST['pname'];
 $phonenum = $_POST['phonenum'];	
  
  $sql="INSERT INTO studentinfo(studentID, name, gender, BOD, address, pname, phonenum)
	VALUES ('$studentID','$name','$gender','$BOD','$address','$pname', '$phonenum')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
 
}



?>