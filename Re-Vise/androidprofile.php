<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'loginregister';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}
$stmt = $con->prepare('SELECT * FROM users');
$stmt->execute();
$stmt->fetch();
$stmt->close();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link href="Backend.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/homepage.css">
	<link rel="stylesheet" href="css/signupform.css">
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
<body>
<div class="header">
  <a href="#default" class="logo">Re:Vise</a>
</div>
<div class="login-box">
	<h1 style="color:white"<center>Profile</center></h1>
		<div class="textbox">
			<h3 style="color:white"<center>Name is <?=$_SESSION['name']?></center></h3>
		</div>
		<div class="textbox">
			<h3 style="color:white"<center>Gender is <?=$_SESSION['gender']?></center></h3>
		</div>
		<div class="textbox">
			<h3 style="color:white"<center>Age is <?=$_SESSION['age']?></center></h3>
		</div>
		<div class="textbox">
			<h3 style="color:white"<center>Username is <?=$_SESSION['username']?></center></h3>
		</div>
</div>
</body>
</html>
