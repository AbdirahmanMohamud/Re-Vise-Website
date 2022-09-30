<?php
session_start();
if(isset($_SESSION['username']) && (!isset($_SESSION['key']))){
   header('location:account.php?q=1');
}
else if(isset($_SESSION['username']) && isset($_SESSION['key']) && $_SESSION['key'] == '54585c506829293a2d4c3b68543b316e2e7a2d277858545a36362e5f39'){
   header('location:dash.php?q=0');
}
else{}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="Backend.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/homepage.css">
</head>
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
			font-size: 40px;
			border-bottom: 6px solid;
			margin-bottom: 50px;
			padding: 13px 0
		}
		.textbox{
			width: 100%;
			overflow: hidden;
			font-size: 20px;
			padding: 8px 0;
			margin: 8px 0;
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
			font-size: 18px;
			width: 150px;
			lfoat: left;
			margin: 10px;
		}
</style>
<body>
<div class="header">
  <a href="#default" class="logo">Re:Vise</a>
</div>
<div class="login-box">
	<h1 style="color:white"<center>Admin Login</center></h1>
			<form action="admin.php?q=index.php" method="post">
				<div class="textbox">
					<label for="username">
						<i class="fas fa-user"></i>
					</label>
					<input type="text" name="uname" id="username "maxlength="20"  placeholder="Username" class="form-control"/> 
					<br>
				</div>
				<div class="textbox">
					<label for="password">
						<i class="fas fa-lock"></i>
					</label>
					<input type="password" name="password" id="password" maxlength="30" placeholder="Password" class="form-control"/>
					<br>
				</div>
				<button class="button" type="submit">Login</button>
			</form>
</div>
</body>
</html>