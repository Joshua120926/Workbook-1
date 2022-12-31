<?php
// Start the session
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1)
?>
<!DOCTYPE html>
<HTML>
<head>
	<title>Rain World Fansite - Login</title>
</head>

<body>
	<h1>Login</h1>

<?php 

$DEFAULT_EMAIL   = "test@gmail.com";
$DEFAULT_PASSWORD = 'mypassword';

$email   = $_POST['email'];
$password = $_POST['pass'];

if (($email == $DEFAULT_EMAIL) && ($password == $DEFAULT_PASSWORD)) {
	$_SESSION["name"] = "Joshua Rhodes";
	$_SESSION["status"] = "loggedIn";
	header("Location: home.php");
	exit();
} else {
	$_SESSION["status"] = "loggedOut";
	$_SESSION["errorMessage"] = "Invalid username or password";
	header("Location: index.php");
	exit();
}