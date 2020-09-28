<?php

function getListStudent()
{
//create connection
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from studentinfo';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getFees(){
session_start();
$_SESSION['month']= $_POST['month'];
$_SESSION['year'] = $_POST['year'];
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = "select * from fees WHERE year='".$_POST['year']."' AND month='".$_POST['month']."'";
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query	


}

if(isset($_POST['addBtn'])){
	
	$studList= getListStudent(); 

 while($row = mysqli_fetch_assoc($studList)) {
	 
	$studentID = $row['studentID']; //no problem here
    $name = $row['name'];
	$month = $_POST['month'];
	$year = $_POST['year'];
	$amount=	$_POST["amount".$row['studentID'].""];
	
$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}	
	 $query = "INSERT INTO fees(studentID, name, year, month, amount) VALUES ('$studentID','$name','$year', '$month' , '$amount')";
	 
	
$sql = mysqli_query($con,$query);//run query
}
header('Location:feeList.php');
}

if (isset($_POST['updateBtn'])) {
session_start();	
$year= $_SESSION['year'];
$month = $_SESSION['month'];
$studentID= $_POST['studentID'];
$amount= $_POST['amount'];	

$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}	
	 $query = "UPDATE fees SET amount='$amount' WHERE studentID='$studentID' AND month='$month' AND year='$year'";	 
	
$sql = mysqli_query($con,$query);//run query
session_destroy();
header('Location:feeList.php');
}
?>