<?php
session_start();
if (isset($_SESSION["username"])) {
    session_destroy();
}
include_once 'dbConnection.php';
    $result = mysqli_query($con, "SELECT * FROM user") or die('Error');

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
<?php
    echo '<div class="panel"><table class="table table-striped title1">
<tr><td style="vertical-align:middle"><b>S.N.</b></td><td style="vertical-align:middle"><b>Name</b></td><td style="vertical-align:middle"><b>Gender</b></td><td style="vertical-align:middle"><b>Username</b></td><td style="vertical-align:middle"></td><td style="vertical-align:middle"></td></tr>';
    $c = 1;
    while ($row = mysqli_fetch_array($result)) {
        $name      = $row['name'];
        $gender    = $row['gender'];
        $username1 = $row['username'];
        
        echo '<tr><td style="vertical-align:middle">' . $c++ . '</td><td style="vertical-align:middle">' . $name . '</td><td style="vertical-align:middle">' . $gender . '</td><td style="vertical-align:middle">' . $username1 . '</td><td style="vertical-align:middle"></td>
  <td style="vertical-align:middle"><a title="Delete User" href="systembackend.php?dusername=' . $username1 . '"><b><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></b></a></td></tr>';
    }
    $c = 0;
    echo '</table></div>';
?>
</div>
</body>
</html>
