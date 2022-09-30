<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:home.php');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html>
<html>
<head>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<link href="Backend.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/homepage.css">
	<link rel="stylesheet" href="css/signupform.css">
 <script src="js/jquery.js" type="text/javascript"></script>
 <script src="js/bootstrap.min.js"  type="text/javascript"></script>
<?php
if (@$_GET['w']) {
    echo '<script>alert("' . @$_GET['w'] . '");</script>';
}
?>
<style>
        body {
            margin: 0
			width: 100%;
			background-image: url(image/gradientbackground.jpg); 
			background-repeat: no-repeat;
			background-attachment: fixed;
			background-size: 100% 100%;
        }
		.button {
		  background-color: transparent;
		  border: none;
		  border-radius: 4px;
		  color: white;
		  padding: 20px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}
		.login-box{
			width: 280px;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			color:white;
				
		}
		.login-box h1{
			float: left;
			font-size: 30px;
			border-bottom: 6px solid;
			padding: 5px 0
		}
		.textbox{
			width: 100%;
			overflow: hidden;
			font-size: 15px;
			border-bottom: 1px solid;
		}
		.textbox i{
			width: 26px;
			float: left;
			text-align: center;
		}
		.textbox input{
			border: none;
			outline: none;
			background: transparent;
			color: white;
			font-size: 15px;
			width: 250px;
			lfoat: left;
		}

</style>
<script>
function validateForm() {
  var y = document.forms["form"]["name"].value; 
  if (y == null || y == "") {
    document.getElementById("errormsg").innerHTML="Name must be filled out.";
    return false;
  }
  var g = document.forms["form"]["gender"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Gender must be filled out";
    return false;
  }
  var g = document.forms["form"]["age"].value;
  if (g=="") {
    document.getElementById("errormsg").innerHTML="Age must be filled out";
    return false;
  }
  if (Number(g) <  0) {
    document.getElementById("errormsg").innerHTML="Age must be greater than zero";
    return false;
  }
  var x = document.forms["form"]["username"].value;
  if (x.length == 0) {
    document.getElementById("errormsg").innerHTML="Please enter a valid username";
    return false;
  }
  if (x.length < 5) {
    document.getElementById("errormsg").innerHTML="Username must be at least 5 characters long";
    return false;
  }
  var a = document.forms["form"]["password"].value;
  if(a == null || a == ""){
    document.getElementById("errormsg").innerHTML="Password must be filled out";
    return false;
  }
  if(a.length<5 || a.length>15){
    document.getElementById("errormsg").innerHTML="Passwords must be 5 to 15 characters long.";
    return false;
  }
  var b = document.forms["form"]["cpassword"].value;
  if (a!=b){
    document.getElementById("errormsg").innerHTML="Passwords must match.";
    return true;
  }
}
</script>
</head>
<body>
<div class="header">
  <a href="#default" class="logo">Re:Vise</a>
</div>
<div class="login-box">
	<h1>Register</h1>
			<form name="form" action="sign.php?q=account.php" onSubmit="return validateForm()" method="POST">
				<div class="textbox">
				<input type="text" name="name" placeholder="Enter your name" id="name" required>
				<br>
				</div>
				<div class="textbox">
				<input type="text" name="gender" placeholder="Enter your gender" id="gender" required>
				</div>
				<div class="textbox">
				<input type="text" name="age" placeholder="Enter your age" id="age" required>
				<br>
				</div>
				<div class="textbox">
				<input type="text" name="username" placeholder="Enter your username" id="username" required>
				<br>
				</div>
				<div class="textbox">
				<div class="form-group">
				<label class="col-md-12 control-label" for="password"></label>
				<div class="col-md-12">
					<input id="password" name="password" placeholder="Enter your password" class="form-control input-md" type="password">
				</div>
				</div>
				</div>
				<div class="textbox">
				<div class="form-group">
					<label class="col-md-12control-label" for="cpassword"></label>
					<div class="col-md-12">
						<input id="cpassword" name="cpassword" placeholder="Confirm Password" class="form-control input-md" type="password">
					</div>
				</div>
				</div>
				<div class="form-group">
				  <label class="col-md-12 control-label" for="name"></label>  
				  <div class="col-md-12">
				  <div id="errormsg" style="font-size:14px;font-family:calibri;font-weight:normal;color:red"><?php
				if (@$_GET['q7']) {
					echo '<p style="color:red;font-size:15px;">' . @$_GET['q7'];
				}
				?></div>
				<button class="button" type="submit">Register</button>
			</form>
</div>
</body>
</html>
