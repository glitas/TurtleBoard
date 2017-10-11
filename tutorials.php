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
// Session variables 
$_SESSION["score"] = 0;
$_SESSION["mistakes"] = 0;
$_SESSION["uhints"] = 0;
?>
<html lang="en">
	<head>
		<title>:turtle:Board</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap1.min.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<link rel="icon" type="image/x-icon" href="img/logo.png" />
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
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
					<h1><font color="#2ECC71">:turtle:</font>Board Tutorials</h1>
					<div align="center">
						<a href="beginners.php"><img style="width:200px;height:200px;" src="img/beginner.png" alt="beginners" /></a>
						<a href="intermediate.php"><img style="width:200px;height:200px;" src="img/intermediate.png" alt="intermediate" /></a>
						<a href="advanced.php"><img style="width:200px;height:200px;" src="img/advanced.png" alt="advanced" /></a>
						<p><i>(Click on the boxes above to start one of the tutorials.)</i></p>
					</div>
					<p align="justify"><br/> Our learning framework consists of three learning levels of the tutorials: <strong>beginners</strong>,<strong>intermediate</strong>
							and <strong>advanced</strong>.
							The three levels correspond to the difficulty level of the tutorials. If you are a beginner and you have never learned Turtle before, 
							then we would like to advise you to start first by learning the basics of Turtle by reading the fundamentals 
							<a href="fundamentals.php">here</a>.&nbsp;After that, you can start with the <strong>beginner</strong>'s level.<br/><br/>
							If you have already some background and basic knowledge about Turtle, then we advise you to start with our <strong>intermediate</strong> tutorial session.<br/><br/>
							If Turtle is nothing new for you and if you have already worked with Turtle, then we advise you to start with our <strong>advanced</strong> tutorial session.<br/><br/>
							<hr><p align="center"><strong><font color="#2ECC71">Remember that the learning process is an experience. Everything else is just information.</font></strong></p>
					</p>
					<hr>
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