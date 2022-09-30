<?php
session_start();
if (isset($_SESSION["username"])) {
    session_destroy();
}
include_once 'dbConnection.php';
$ref      = @$_GET['q'];
$username = $_POST['username'];
$password = $_POST['password'];
$username = stripslashes($username);
$username = addslashes($username);
$password = stripslashes($password);
$password = addslashes($password);
$password = md5($password);
$result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username' and password = '$password'") or die('Error');
$count = mysqli_num_rows($result);
if ($count == 1) {
    while ($row = mysqli_fetch_array($result)) {
        $name = $row['name'];
		$gender = $row['gender'];
		$age = $row['age'];

    }
    $_SESSION["name"]     = $name;
    $_SESSION["username"] = $username;
	$_SESSION["gender"]     = $gender;
    $_SESSION["age"]     = $age;

	
    header("location:home.php");
	echo"Login Success";
} else
    header("location:$ref?w=Wrong Username or Password");


?>