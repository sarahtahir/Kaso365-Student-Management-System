<?php
session_start();
$userType=$_SESSION['userType'];

if ($userType == 'Admin'){
	?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">KaSo365</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">SCHOOL <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">CALENDAR <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">CONTACT <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../view my profile/view my profile.php">My Profile</a>
          <a class="dropdown-item" href="../resetPassEmail/emailForm.html">Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../userInfo/userList/userList.php">User List</a>
		  
		  <a class="dropdown-item" href="../staffInfo/staffList/staffList.php">Staff List</a>
		  <div class="dropdown-divider"></div>
		 <a class="dropdown-item" href="../staffInfo/staffList/staffList.php">Staff List</a>
		  <a class="dropdown-item" href="../schoolSpending/spendingList.php">School Spending</a>
		  	<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="../Login/logout.php">Logout</a>
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>
</div>
</body>
</html>
<?php } ?>
<?php if ($userType == 'Staff') { ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
    .bs-example{
        margin: 20px;
    }
</style>
</head>
<body>
<div class="bs-example">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">KaSo365</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">SCHOOL <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">CALENDAR <span class="sr-only">(current)</span></a>
      </li>
	  <li class="nav-item active">
        <a class="nav-link" href="#">CONTACT <span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          More
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="view my profile.php">My Profile</a>
          <a class="dropdown-item" href="../resetPassEmail/emailForm.html">Change Password</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="../studentInfo/studentList/studentList.php">Student List</a>		  
		  <div class="dropdown-divider"></div>
		  <a class="dropdown-item" href="../insertStudAt/studAttendanceList.php">Student Attendance</a>
		  <a class="dropdown-item" href="../studentResult/studentResultList.php">Student Result</a>
		  <a class="dropdown-item" href="../studentFee/feeList.php">School Monthly Fee</a>
		  <a class="dropdown-item" href="../schoolSpending/spendingList.php">School Spending</a>	
		   <div class="dropdown-divider"></div>	
		  <a class="dropdown-item" href="../Login/logout.php">Logout</a>	
        </div>
      </li>
      
    </ul>
    
  </div>
</nav>
</div>
</body>
</html>
<?php } ?>