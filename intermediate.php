<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <!–– Course: Lab Enterprise Information Systems
	  Subject: Lab Project
	  Topic: TurtleBoard - Online Tutorial Framework for learning Turtle Serialization
	  Team: Gligor Tasev, Ludmila Casautan, Louai Haddad
	  Mentor: Niklas Petersen
 ––>
<?php
// Start the session
session_start();
// Session variable			
$_SESSION["tutorial"] = 'intermediate';
?>
<html lang="en">
	<head>
	  	<title>:turtle:Board</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap1.min.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<!--<link href="css/bootstrap.min.css" rel="stylesheet">-->
		<link href="css/codemirror.css" rel="stylesheet">
		<link href="css/show-hint.css" rel="stylesheet">
		<link href="css/jquery-ui.min.css" rel="stylesheet">
		<link href="css/vis.css" rel="stylesheet">
		<link href="css/split-pane.css" rel="stylesheet">
		<link href="css/main.css" rel="stylesheet">
		<link rel="icon" type="image/x-icon" href="img/logo.png" />
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/config.js" defer></script>
		<!--<script data-main="turtle-editor" src="js/lib/require.js" defer></script>-->
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>                        
					</button>
					<a class="navbar-brand" href="#"><font color="#2ECC71">:turtle:</font>Board</a>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
					<ul class="nav navbar-nav">
						<li><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="fundamentals.php">Fundamentals</a></li>
						<li class="active"><a href="tutorials.php">Tutorials</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><img src="img/logo.png" alt=":turtle:Board" style="margin-right:80px;margin-top:5px;width:80px;height:40px"/></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid text-center">    
			<div class="row content">
				<div class="col-sm-2 sidenav" style="height:100vh;">
				</div>
				<div class="col-sm-8 text-left"> 
					<h1><font color="#2ECC71">:turtle:</font>Board Beginner's Tutorial</h1>
					<div align="center" style="background-image:url(img/guidelines.jpg);">
							<img src="img/intermediate1.png" alt="beginners" style="width:200px;height:160px;" />
							<strong><br/>
							Welcome to the <font color="#2ECC71">:turtle:</font>Board intermediate tutorial.<br/><br/>
							This tutorial is specially constructed for new learners that have used Turtle before.
							The tutorial is composed of different steps. In each step, you as a learner will be guided. 
							You will have a chance to practically write some basic Turtle code. 
							You will have a chance to use help when needed by clicking on the GET HINT button. You have one hint for each step. Your answer will be checked. 
							At the end of the tutorial you will be able to see your score board. <br/><br/>
							Before starting this tutorial make sure that you have read the 
							<a href="fundamentals.php" style="color:#2ECC71;">Turtle Fundamentals</a>.<br/><br/>
							We wish you good luck! 									
							<hr></strong>
					</div>
					<a href="tutorials_first.php"><img style="width:200px;height:50px;" src="img/start.png" alt="startnow" /></a>
				</div>
				<div class="col-sm-2 sidenav" style="height:100vh;">
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			<p>Copyright &copy; 2017 <a style="color:#2ECC71;" href="https://www.uni-bonn.de/">University of Bonn</a> | Developed by <a style="color:#2ECC71;" target="_blank" rel="nofollow" href="about.php">Turtle Board Team</a></p>
		</footer>
	</body>
</html>