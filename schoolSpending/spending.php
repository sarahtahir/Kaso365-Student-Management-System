<?php

if (isset($_POST['addBtn'])){
	
	$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $itemID = $_POST['itemID'];
 $name = $_POST['name'];
 $price = $_POST['price'];
 $description = $_POST['description'];
 $date = $_POST['date'];  
   
  $sql="INSERT INTO spending(itemID, name, price, description, date)
	VALUES ('$itemID','$name','$price','$description','$date')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
	
	header('Location:spendingList.php');
 
}
function getSpending(){
	$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo  mysqli_connect_error(); 
	exit;
	}
$sql = 'select * from spending';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

if (isset($_POST['deleteBtn'])){
	$con = mysqli_connect("localhost","id14621811_kaso365ms","kaso365_MSystem","id14621811_kaso365");
if(!$con)
	{
	echo mysqli_connect_error();
	exit;
	}

 $itemID = $_POST['deleteID'];
  
  $sql="delete from spending where itemID ='".$itemID."'";
  $qry = mysqli_query($con,$sql);
  header('Location:spendingList.php');
}