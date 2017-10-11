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
$tut = $_SESSION["tutorial"];
$mis = $_SESSION["mistakes"];
$hin = $_SESSION["uhints"];
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
		<script type="text/javascript">var tutname = "<?= $tut ?>"; var nmist = <?php echo $mis; ?>; var nhints = <?php echo $hin; ?>;</script>
		<script src="js/functions.js"></script>
		<script data-main="turtle-editor" src="js/lib/require.js" defer></script>
		<!--<script type="text/javascript" src="jquery-2.2.4.js"></script>-->
		<style>
			table {
					border-collapse: collapse;
					width: 100%;
					font-size:100%;
					text-align:center;
					margin-right:45px;
				  }

			th, td {
					padding: 8px;
				   }
			td {	
					background-color: #f2f2f2;
					font-weight: bold;
				}
			
			th {
					background-color: #4CAF50;
					color: white;
				}
	</style>
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
				<div class="col-sm-2 sidenav" style="background-image:url(img/guidelines1.jpg);height:100vh;">
					<div class="well">
						<img src="img/hints.png" alt="hints" style="width:180px;height:180px;" />
						<p><strong><font size="3" color="#2ECC71">Here are some hints:</font></strong></p>
					</div>
					<div class="well" style="background-image:url(img/guidelines.jpg);">
						<div id = "hico" style="visibility:hidden;">
							<img src='img/hints.ico' alt='hints' style='width:50px;height:50px;'/>
						</div>
						<p id="hint"></p>
					</div>
				</div>
				<div style="position:relative;overflow:hidden;" class="col-sm-8 text-left"> 
					<h1><font color="#2ECC71">:turtle:</font>Board Tutorial</h1>
					<div align="center" style="background-image:url(img/guidelines.jpg);">
						<p id="guide">
							<font size='6'><strong><br/>
							Welcome to this tutorial. Here, you will get the guidelines with examples and tasks. Click the NEXT button to begin!
							<br/><br/></strong></font>
						</p>
						<p id="ex">
						</p>
					</div>
					<div align="center" style="background-color:#ff6666;color:white;">
						<p id="task">
						</p>
					</div>
					<div style="position:relative;float:right;">
						<div class="well" style="background-image:url(img/guidelines.jpg);margin: 0;padding: 0;">
							<p id="steps" style="margin-left:110px;"></p>
						</div>
						<br/>
						<table id="stable">
							<tr ><th colspan="2" style="text-align:center;background-color:#ff6666;"><u>SCORES</u></th></tr>
							<tr>
								<th>User:</th>
								<td><?php echo $_SESSION['user'];?></td>
							</tr>
							<tr>
								<th>Level:</th>
								<td><?php echo $_SESSION['tutorial'];?></td>
							</tr>
							<tr>
								<th>Used hints:</th>
								<td id="hscore">X</td>
							</tr>
							<tr>
								<th>Mistakes:</th>
								<td id="mistakes">X</td>
							</tr>
							<tr>
								<th>Timer:</th>
								<td id = "time">X</td>
							</tr>
						</table>
						<br/>
						<img style="width:100px;height:50px;margin-left:70px;" onclick="score()" src="img/finish.png" alt="finish" /><br/>
						<div class="well"><p style="margin-left:40px;" id="points"></p></div>
						<!--<a href="#" onclick="feedback()"><img style="width:130px;height:60px;margin-left:60px;" src="img/feedback.png" alt="feedback" /></a><br/>-->
					</div>
					<div id="network-popUp">
						<span id="operation">node</span>
						<br>
						<p style="float: left; margin-top: 18px;">label</p>
						<input id="label" title='Tip: In order to add a literal, include the text in quotes, e.g. "new"' value="new value" style="margin-bottom: 15px; margin-top: 15px;" />
						<input type="button" value="save" id="saveButton" />
						<input type="button" value="cancel" id="cancelButton" />
					</div>
					<div id="dialog" style="display:none">
						<p>It is possible that some nodes will remain disconnected from the graph after deletion. Remove them too?</p>
					</div>
					<div id="back-div" style="display:none">
						<button type="button" id="unsplit-button" class="button-style">Back</button>
					</div>
					<div id="tabs" class="col-md-9" style="visibility:hidden;position:relative;float:left;">
						<ul id="tabs-list">
							<li><a href="#left-component">Graphical View</a></li>
							<li><a href="#right-component">Code View</a></li>
							<!--<button type="button" id="split-button" class="button-style">Split view</button>
							<input type="checkbox" id="freeze" class="menu-checkbox" style="margin-top:8px">
							<label class="menu-label" title="Disable the physics of the network">Freeze</label>
							<input type="checkbox" id="hide-nodes" checked="checked" class="menu-checkbox" style="margin-top:8px">
							<label class="menu-label" title="Hide nodes from the RDF, RDFS and OWL vocabularies">Hide defaults</label>
							<button type="button" id="freeze" class="button-style">Toggle freeze</button>
							<button type="button" id="hide-nodes" class="button-style">Toggle defaults</button>-->
							<button type="button" id="clear-button" class="button-style">Clear Editor</button> 
							<button type="button" id="check-button" class="button-style">Check Your Solution</button> 
							<button type="button" id="solution-button" class="button-style">Get Final Solution</button> 
							<button type="button" id="next-button" class="button-style">Next Step</button> 
							<button type="button" id="hint-button" class="button-style">Get Hint</button> 
							<input type="image" id="decluster" src="img/minus.png" class="clustering-button" style="margin-right: 20px" />
							<input type="image" id="cluster" src="img/plus.png" class="clustering-button" style="margin-right: 10px" />
							<label class="menu-label">Clustering</label>
						</ul>
						<div id="left-component" class="split-pane-component"></div>
						<div class="split-pane-divider" id="divider" style="visibility:hidden"></div>
						<div id="right-component" class="split-pane-component">
							<div class="form-group">
								<label for="input-contents">Content editor: <span class="current-filename"></span></label>
								<textarea id="input-contents" rows="24" wrap="hard">
								</textarea>
							</div>
							<div id="syntax-check">
								<p id="syntax-check-failed" style="display: none">
									<img src="img/red_orb.png" alt="A red orb." class="status-icon">
									<span class="status">Syntax check failed.</span>
								</p>
								<p id="syntax-check-working" style="display: none">
									<img src="img/yellow_orb.png" alt="A yellow orb." class="status-icon">
									<span class="status">Syntax checker working.</span>
								</p>
								<p id="syntax-check-pending">
									<img src="img/yellow_orb.png" alt="A yellow orb." class="status-icon">
									<span class="status">Syntax check pending...</span>
								</p>
								<p id="syntax-check-off" style="display: none">
									<img src="img/yellow_orb.png" alt="A yellow orb." class="status-icon">
									<span class="status">Syntax checking is disabled. Click to enable.</span>
								</p>
								<p id="syntax-check-passed" style="display: none">
									<img src="img/green_orb.png" alt="A green orb." class="status-icon">
									<span class="status">Syntax check passed.</span>
								</p>
							</div>
						<!--
						<div class="form-group">
							<label for="input-message">Commit message</label>
							<input type="text" class="form-control" id="input-message" value="Turtle file edited, just for testing the editor.">
						</div>
						-->
						</div>
					<!-- /.col-md-9 -->
					</div>
				</div>
				<div class="col-sm-2 sidenav" style="background-image:url(img/guidelines1.jpg);height:100vh;">
					<div class="well">
						<img src="img/answer.jpg" alt="hints" style="width:160px;height:140px;" />
						<p><strong><font size="3" color="#2ECC71">Your answer is:</font></strong></p>
					</div>
					<div class="well" style="background-image:url(img/guidelines.jpg);">
						<p id="answer"></p>
						<p id="sanswer"></p>
						<p id="panswer"></p>
						<p id="oanswer"></p>
					</div>					
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			<p>Copyright &copy; 2017 <a style="color:#2ECC71;" href="https://www.uni-bonn.de/">University of Bonn</a> | Developed by <a style="color:#2ECC71;" target="_blank" rel="nofollow" href="about.php">Turtle Board Team</a></p>
		</footer>
	</body>
</html>