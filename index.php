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
$_SESSION["user"] = 'Bob';
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
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="fundamentals.php">Fundamentals</a></li>
						<li><a href="tutorials.php">Tutorials</a></li>
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
					<img src="img/more.png" alt="more" style="width:200px;height:120px;"/> <br/><br/><br/>
					<ul align="left">
						<li><a href="https://www.w3.org/standards/semanticweb/">What is Semantic Web?</a></li>
						<li><a href="https://www.w3.org/RDF/">What is RDF?</a></li>
						<li><a href="https://www.w3.org/TR/turtle/">Turtle W3C Specification</a></li>
						<li><a href="https://jena.apache.org/tutorials/">Learn more about Apache Jena</a></li>
						<li><a href="http://dbpedia.org/sparql">Virtuoso - Public SPARQL Endpoint</a></li>
						<li><a href="http://dbpedia.org/snorql/">DBpedia SPARQL Explorer</a></li>
						<li><a href="http://www.visualdataweb.org/relfinder/relfinder.php">RelFinder Online Demo</a></li>
					</ul>
				</div>
				<div class="col-sm-8 text-left"> 
					<h1>Welcome to <font color="#2ECC71">:turtle:</font>Board!</h1>
					<img src="img/welcome.jpg" alt="welcome" style="width:950px;height:350px"/>
					<p align="justify"><br/>Turtle Board is an online tutorial framework for learning one of the most famous RDF serialization - Turtle. 
							Turtle is considered to be one of the most readable syntax for RDF. 
							We are going to help you learn Turtle by following different tutorials. 
							Learning Turtle hasn't been easier before. Try it now. Learn by doing. 
							<strong>Remember that the learning process is an experience. 
							Everything else is just information.</strong></p>
					<hr>
					<a href="fundamentals.php"><img style="width:200px;height:50px;" src="img/start.png" alt="startnow" /></a>
					<p align="left">Your path to master Turtle starts here.</p>
				</div>
				<div class="col-sm-2 sidenav" style="height:100vh;">
					<div class="well">
						<p><i><strong>"Data is a precious thing and will last longer than the systems themselves."</i></strong><br/>Tim Berners-Lee </p>
					</div>
					<div class="well">
						<p><i><strong>"Good software, like wine, takes time."</i></strong><br/>Joel Spolsky</p>
					</div>
					<div class="well">
						<p><i><strong>"Programming is usually taught by examples."</i></strong><br/>Niklaus Wirth</p>
					</div>
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			<p>Copyright &copy; 2017 <a style="color:#2ECC71;" href="https://www.uni-bonn.de/">University of Bonn</a> | Developed by <a style="color:#2ECC71;" target="_blank" rel="nofollow" href="about.php">Turtle Board Team</a></p>
		</footer>
	</body>
</html>