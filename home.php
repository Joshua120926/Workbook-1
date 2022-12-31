<?php
// Start the session
session_start();
error_reporting(E_ALL);
ini_set("display_errors", 1)
?>

<?php
if (isset($_SESSION["status"])){
	if ($_SESSION["status"] == "loggedIn") {
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
		<title> Rain World Fansite - Home </title>
		<link rel="icon" type="image/x-icon" href="https://static.miraheze.org/rainworldwiki/8/86/RW_Karma_5_icon.png">

		<!-- JAVASCRIPT -->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery.cookie.js"></script>

		<script>
		</script>
		
	</head>
	
	<body style="background: url(https://static.miraheze.org/rainworldwiki/b/bc/RW_SH_region_art.png); background-repeat: no-repeat; background-attachment: fixed; background-size: cover; background-position: center; image-rendering: auto; image-rendering: crisp-edges;image-rendering: pixelated; background-color:black">

		<div id="wrapper">
  			
  			<!-- HEADER -->
			<div id="header">
				<h1 style="color:white">Home</h1>
			</div>

			<div id="navigation">
				<a style="color:white"; href="home.php">Home</a>
				<a></a>
				<a style="color:white"; href="index.php">Login</a>
			</div>

			<!-- CONTENT -->
			<div id="content">
				<br><p style="color:white">Rain World is a 2017 survival platform game with a simulated ecosystem developed by Videocult and published by Adult Swim Games for PlayStation 4 and Microsoft Windows in March 2017, and for Nintendo Switch in late 2018. Players assume control of the "slugcat", an elongated felid-like creature, and are tasked with searching for the creature's relatives in a derelict and hostile world.<br>
				The slugcat uses debris as weapons to escape enemies, forage for food, and reach safe hibernation rooms before a deadly torrential rain arrives. The player is given little explicit guidance on how to survive, which was the intention of the developers, who wanted players to feel like a rat living on subway tracks, in which they learn to survive in an environment without grasping its higher-level function.</p>
				<p style="color:white">Slugcat eating food</p>
				<img src="https://static.miraheze.org/rainworldwiki/3/37/Survivor_eat.gif" alt="Slugcat eating food"><br>
				<p style="color:white">Slugcat 'The Survivor' near some explosive spears</p>
				<img src="https://static.miraheze.org/rainworldwiki/0/0b/Slugcat_%282%29.jpg" alt="Slugcat 'The Survivor' near some explosive spears"><br>
				<p style="color:white">Slugcat 'The Monk' near a dead Lantern Mouse</p>
				<img src="https://static.miraheze.org/rainworldwiki/3/3b/Monk2.jpg" alt="Slugcat 'The Monk' near a dead Lantern Mouse"><br>
				<p style="color:white">Slugcat 'The Hunter' eating a blue lizard</p>
				<img src="https://static.miraheze.org/rainworldwiki/d/d0/Huntereatingblue.gif" alt="Slugcat 'The Hunter' eating a blue lizard"><br>
			</div>
			<!-- FOOTER -->
			<div id="footer">
				<p style="color:white">Copyright &copy; Joshua Rhodes 2022</p>
			</div>
		
		</div>
 
	</body>

</html>



<?php
	} else {
		$_SESSION["errorMessage"] = "You are not logged in.";
		header("Location: index.php");
	}
} else {
	$_SESSION["status"] = "LoggedOut";
}

?>