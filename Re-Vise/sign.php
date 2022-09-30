<?php
include_once 'dbConnection.php';
ob_start();
$name     = $_POST['name'];
$name     = ucwords(strtolower($name));
$gender   = $_POST['gender'];
$age     = $_POST['age'];
$username = $_POST['username'];
$password = $_POST['password'];
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

$q3 = mysqli_query($con, "INSERT INTO user VALUES  (NULL,'$name','$gender','$age' ,'$username' , '$password')");
if ($q3) {
    session_start();
    $_SESSION["username"] = $username;
    $_SESSION["name"]     = $name;
    
    header("location:home.php");
} else {
    header("location:index.php?q7=Username already exists. Please choose another&name=$name&username=$username&gender=$gender&age=$age");
}
ob_end_flush();
?>