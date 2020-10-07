<?php

function getListOfUser()
{
//create connection
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
$sql = 'select * from users';
$qry = mysqli_query($con,$sql);//run query
return $qry;  //return query
}

function getUserInfo()
{
	$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
	$staffID = $_POST["staffIDView"];
	$sqlStr = "select * from users where staffID = '".$staffID."'";
	$qry = mysqli_query($con, $sqlStr);
	mysqli_close($con);
	return $qry;
}

if (isset($_POST['addBtn']))
{
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
 //collect data from post array
 $staffID = $_POST['staffID'];
 $username = $_POST['uname'];
 $password = $_POST['pass'];
 $question = $_POST['question'];
 $answer = $_POST['answer'];
 $userType = $_POST['userType'];
 $email = $_POST['email'];
	
 $password = password_hash($password, PASSWORD_DEFAULT);
	 
   
  $sql="INSERT INTO users(staffID, username, password, question, answer, userType, email)
	VALUES ('$staffID','$username','$password','$question','$answer','$userType', '$email')";
 
//echo $sql;
	$qry = mysqli_query($con,$sql);
	
header('Location:userList.php');
 
}


if (isset($_POST['deleteBtn']))
{
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}

 $staffID = $_POST['deleteID'];
  
  $sql="delete from users where staffID ='".$staffID."'";
  $qry = mysqli_query($con,$sql);
  
echo "<script>";
	echo " alert('User has been deleted.');
		</script>";
	header( "refresh:1; url=userList.php" );
  
};

function findName(){
	$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
	$sql = "select * from users where staffID like '%".$_POST['staffIDFind']."%'";
    
    $qry = mysqli_query($con,$sql);//run query
    return $qry;  //return query
}

?>
