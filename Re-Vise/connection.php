<?php
$servername="localhost";
$mysql_user="root";
$mysql_pass="";
$dbname="database";
$conn=mysqli_connect($servername, $mysql_user, $mysql_pass, $dbname);
if ($conn){
	echo("Connection successful");
}else{
	echo("Connection not successful");
}
$name     = isset($_POST['name']);
$name     = ucwords(strtolower($name));
$gender   = isset($_POST['gender']);
$age     = isset($_POST['age']);
$username = isset($_POST['username']);
$password = isset($_POST['password']);
$name     = stripslashes($name);
$name     = addslashes($name);
$name     = ucwords(strtolower($name));
$gender   = stripslashes($gender);
$gender   = addslashes($gender);
$username = stripslashes($username);
$username = addslashes($username);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);

$q3 = mysqli_query($conn, "INSERT INTO user VALUES  (NULL,'$name','$gender','$age' ,'$username' , '$password')");
if ($q3) {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["name"]     = $name;
    
	echo("Successful");
} else {
	echo("Error");
}