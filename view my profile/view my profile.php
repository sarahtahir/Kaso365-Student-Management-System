<?php
   include '../header.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	
  </head>
  <body>
  	<!-- body code goes here -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
						<?php
							
							
                            include "profile.php";                            
 

                            $username= $_SESSION['username'];
                            $staffID = getstaffID($username);
                            $qry = getProfileInfo($staffID);
                            $row = mysqli_fetch_assoc($qry);
							
							
                            
                            echo '<img src="../staffInfo/staffList/profilepic/pic'.$staffID.'.'.$row['fileExt'].'?t='.time().'">';
                            echo '<div class="file btn btn-lg btn-primary">
                                Change Photo
								<form action="editPic.php" method="post" enctype="multipart/form-data">';
								echo "<input type='hidden' value='$staffID' name='staffIDPic'>";
                                echo '<input type="file" name="file" onchange="this.form.submit()" />
								</form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">';
							
                          
							
							        echo '<h5>'
                                        .$row['name'].
                                    '</h5>';
                                    
                                    echo '<p class="proile-rating">STAFF ID : <span>'.$row['staffID'].'</span></p>';
                            echo '<ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>SKILLS</p>
                            <a href="">Photography</a><br/>
                            <a href="">Video Editing</a><br/>
                            <a href="">Photo Editing</a>
                            <p>LANGUAGE</p>
                            <a href="">Malay</a><br/>
                            <a href="">English</a><br/>
                            <a href="">Hangul</a><br/>
                            <a href="">Japaness</a><br/>
                            <a href="">Mandrin</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row"></div>
                                        <div class="row">';
                                            echo '<div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['name'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">';
                                             echo '<label>Position</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>'.$row['position'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">';
                                              echo '<p>'.$row['phonenum'].'</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">';
                                               echo '<p>'.$row['address'].'</p>';
										?>
                                            </div>
                                        </div>
                            </div>
                                        </div>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>