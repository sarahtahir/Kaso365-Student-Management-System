<?php
session_start();
$userType=$_SESSION['userType'];

if (!(isset($_SESSION['username']) && $_SESSION['username'] != '')) {
	header ("Location: index.html");
}

if ($userType == 'Admin'){
	include "navbarAdmin.html";
}

if ($userType == 'Staff'){
	include "navbarStaff.php";
}

?>