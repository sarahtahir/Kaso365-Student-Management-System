<?php
function resetPassword($password,$staffID)
{
$con=mysqli_connect("localhost","kaso365","kaso365","kaso365");
if(!$con)
	{
	echo  mysqli_connect_error();
	exit;
	}
$sql= "UPDATE kaso365.users SET users.password ='".$password."' WHERE users.staffID = '".$staffID ."'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result); 
	
	
}
?>