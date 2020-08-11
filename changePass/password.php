<?php
function resetPassword($password,$staffID)
{
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
$sql= "UPDATE users SET password ='".$password."' WHERE staffID = '".$staffID ."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); 	
}
?>