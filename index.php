<?php
// Start the session
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1)
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title>Rain World Fansite - Login</title>
		<link rel="icon" type="image/x-icon" href="https://static.miraheze.org/rainworldwiki/8/86/RW_Karma_5_icon.png">

		<!-- JAVASCRIPT -->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.cookie.js"></script>

		<script>
		</script>
		
	</head>
	
	<body style="background: url(https://static.miraheze.org/rainworldwiki/3/3d/RW_SB_region_art.png); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center; image-rendering: auto; image-rendering: crisp-edges;image-rendering: pixelated; background-color:black">

		<div id="wrapper">

  			<!-- HEADER -->
			<div id="header">
				<h1 style="color:white">Login</h1>
			</div>

			<div id="navigation">
				<a style="color:white"; href="home.php">Home</a>
				<a></a>
				<a style="color:white"; href="index.php">Login</a>
			</div>

			<!-- CONTENT -->
			<div id="content">
				<br>
				<form action="login.php" method="POST">
  				<label style="color:white"; for="email">Email Address:</label>
  				<br>
  				<input type="text" id="email" name="email"><br>
  				<label style="color:white"; for="pass">Password:</label><br>
  				<input type="text" id="pass" name="pass">
  				<br>
  				<?php
					if (isset($_SESSION["errorMessage"]))
					{
						echo($_SESSION["errorMessage"]);
					}
					$_SESSION["errorMessage"] = ""
				?>

  				<br>
  				<input type="submit" value="Login">
				</form>

			</div>

			<!-- FOOTER -->
			<div id="footer">
				<p style="color:white">Copyright &copy; Joshua Rhodes 2022</p>
			</div>
		
		</div>
 
	</body>

</html>