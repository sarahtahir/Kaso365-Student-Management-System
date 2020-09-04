<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Main Page</title>
	<link href="css/bootstrap-4.4.1.css" rel="stylesheet">
	<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: grey;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}

</style>
  </head>
  <body>
  	<!-- body code goes here -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#school" class="w3-bar-item w3-button w3-padding-large w3-hide-small">SCHOOL</a>
    <a href="#calender" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CALENDER</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTACT</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="../view my profile/view my profile.php" class="w3-bar-item w3-button"><i class="fa fa-user fa-fw"></i> My Profile</a>
		<a href="../resetPassEmail/emailForm.html" class="w3-bar-item w3-button"><i class="fa fa-key fa-fw"></i>Change Password</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-bullseye fa-fw"></i> School Management</a>
        <a href="../userInfo/userList/userList.php" class="w3-bar-item w3-button"><i class="fa fa-bullseye fa-fw"></i> User Management</a>
        <a href="../studentInfo/studentList/studentList.php" class="w3-bar-item w3-button"><i class="fa fa-bullseye fa-fw"></i> Students Management</a>
        <a href="../staffInfo/staffList/staffList.php" class="w3-bar-item w3-button"><i class="fa fa-users fa-fw"></i> Staff Information</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-users fa-fw"></i> Students Information</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-money fa-fw"></i> School Spending</a>
        <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog fa-fw"></i> Settings</a>
        <a href="../Login/logout.php" class="w3-bar-item w3-button"><i class="fa fa-lock fa-fw"></i> Log Out</a>    
      </div>
    </div>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>


<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#school" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">SCHOOL</a>
  <a href="#calender" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">Calender</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
</div>


<div class="w3-content" style="max-width:2000px;margin-top:46px">


  <div class="mySlides w3-display-container w3-center">
    <img src="https://images.wallpaperscraft.com/image/books_pile_collection_123290_1024x768.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>GOOD MORNING!</h3>
      <p><b>You're not here to be AVERAGE, You're here to be AWESOME! </b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="https://images.wallpaperscraft.com/image/rose_books_texts_119588_1600x1200.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>HOW'S YOUR DAY?</h3>
      <p><b>Your FUTURE is defined by what you do TODAY!</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="https://images.wallpaperscraft.com/image/books_shelf_collection_119979_1152x864.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>HELLO!</h3>
      <p><b>You just did something great today!</b></p>    
    </div>
  </div>


  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="school">
    <h2 class="w3-wide">KAFA AS-SOBIRIN</h2>
    <p class="w3-justify"> ABOUT KAFA - AS SOBIRIN</p>
    <div class="w3-row w3-padding-32">
      <div class="w3-third">
        <p>Nur Aminah Binti Said</p>
        <img src="https://cdn4.iconfinder.com/data/icons/circle-avatars-1/128/050_girl_avatar_profile_woman_suit_student_officer-2-512.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Enon Binti Zaim</p>
        <img src="https://cdn4.iconfinder.com/data/icons/circle-avatars-1/128/034_girl_avatar_profile_woman-2-512.png" class="w3-round w3-margin-bottom" alt="Random Name" style="width:60%">
      </div>
      <div class="w3-third">
        <p>Zainab Binti Mohd</p>
        <img src="https://cdn4.iconfinder.com/data/icons/circle-avatars-1/128/042_girl_avatar_profile_woman_shirt-2-512.png" class="w3-round" alt="Random Name" style="width:60%">
      </div>
    </div>
  </div>


  <div class="w3-black" id="calender">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">CALENDER</h2>
      <div class="month">      
  <ul>
    <li class="prev">&#10094;</li>
    <li class="next">&#10095;</li>
    <li>
      August<br>
      <span style="font-size:18px">2020</span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days">  
  <li>1</li>
  <li>2</li>
  <li>3</li>
  <li>4</li>
  <li>5</li>
  <li>6</li>
  <li>7</li>
  <li>8</li>
  <li>9</li>
  <li><span class="active">10</span></li>
  <li>11</li>
  <li>12</li>
  <li>13</li>
  <li>14</li>
  <li>15</li>
  <li>16</li>
  <li>17</li>
  <li>18</li>
  <li>19</li>
  <li>20</li>
  <li>21</li>
  <li>22</li>
  <li>23</li>
  <li>24</li>
  <li>25</li>
  <li>26</li>
  <li>27</li>
  <li>28</li>
  <li>29</li>
  <li>30</li>
  <li>31</li>
</ul>

</div>

	   <h2 class="w3-wide w3-center">INFORMATION</h2>
	  
 <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>52</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Students</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>2</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Staffs</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>23</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Users</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>8</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Subject</h4>
      </div>
    </div>
  </div>


<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-light-grey w3-xlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
</footer>

<script>

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}


function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}


var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/popper.min.js"></script> 
	<script src="js/bootstrap-4.4.1.js"></script>
  </body>
</html>