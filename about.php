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
						<li class="active"><a href="about.php">About</a></li>
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
					<br/><br/><br/><br/>
					<div class="well">
						<h5 style="margin:0; padding:0;">online tutorial framework</h5>
						<img src="img/logo.png" alt="more" style="width:200px;height:130px;margin:0; padding:0;"/>
						<h1 style="margin:0; padding:0;"><font color="#2ECC71">:turtle:</font>Board</h1><br/>
					</div>
				</div>
				<div class="col-sm-8 text-left"> 
					<h1><font color="#2ECC71">:turtle:</font>Board Team</h1>
					<br/><br/>
					<div align="center">
						<img src="img/mentor.png" alt="more" style="width:200px;height:200px;"/>
						<img src="img/dot.png" alt="more" style="width:30px;height:30px;"/>
						<img src="img/gligor.jpg" alt="more" style="width:210px;height:200px;"/>
						<img src="img/dot.png" alt="more" style="width:30px;height:30px;"/>
						<img src="img/ludmila.jpg" alt="more" style="width:200px;height:200px;"/>
						<img src="img/dot.png" alt="more" style="width:30px;height:30px;"/>
						<img src="img/louai.jpg" alt="more" style="width:160px;height:200px;"/>
						<h3><strong><i>Niklas&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Gligor&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;&nbsp;&nbsp;&nbsp;Ludmila&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Louai</i></strong></h3>
					</div>
					<p align="justify"><br/>Turtle Board is an online tutorial framework for learning one of the most famous RDF serialization - Turtle. 
							This framework was developed by our team under the mentorship of Mr. Niklas Petersen as a part of a lab project
							at the University of Bonn. We hope that this frawework is going to help you in your learning process and we hope that Turtle serialization will 
							become a piece of cake for you.&nbsp;&nbsp;<strong>Welcome and good luck!</strong><br/><hr>
					</p>
				</div>
				<div class="col-sm-2 sidenav" style="height:100vh;">
					<div class="well"><img src="img/uni.png" alt="more" style="width:200px;height:90px;"/></div><br/><br/>
					<div class="well"><img src="img/informatik.png" alt="more" style="width:140px;height:130px;"/></div><br/><br/>
					<div class="well"><img src="img/eis.png" alt="more" style="width:140px;height:130px;"/></div><br/><br/>
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			<p>Copyright &copy; 2017 <a style="color:#2ECC71;" href="https://www.uni-bonn.de/">University of Bonn</a> | Developed by <a style="color:#2ECC71;" target="_blank" rel="nofollow" href="about.php">Turtle Board Team</a></p>
		</footer>
	</body>
</html>