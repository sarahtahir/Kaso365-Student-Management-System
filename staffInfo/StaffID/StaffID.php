<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="../../css/bootstrap-4.4.1.css" rel="stylesheet">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: black;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>	
  </head>
  <body>
  	<!-- body code goes here -->
	  <form action="/action_page.php" method="post">
  <div class="imgcontainer">
    <img src="https://cdn2.iconfinder.com/data/icons/ios-7-icons/50/user_male2-512.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname"><b>Staff ID:</b></label>
    <input type="text" placeholder="Enter Staff ID" name="uname" required>

        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div>
</form>



	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
	<script src="../../js/jquery-3.4.1.min.js"></script>

	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../../js/popper.min.js"></script> 
	<script src="../../js/bootstrap-4.4.1.js"></script>
  </body>
</html>