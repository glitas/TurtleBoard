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
						<li><a href="about.php">About</a></li>
						<li class="active"><a href="fundamentals.php">Fundamentals</a></li>
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
					<ul align="left">
						<li><a href="#intro">Introduction</a></li>
						<li><a href="#one">Basic Syntax</a></li>
						<li><a href="#two">Prefixes</a></li>
						<li><a href="#three">Same subject</a></li>
						<li><a href="#four">Same subject and predicate</a></li>
						<li><a href="#five">Redundance</a></li>
						<li><a href="#six">Blank nodes</a></li>
						<li><a href="#seven">Unlabeled blank nodes</a></li>
						<li><a href="#eight">Language tag</a></li>
						<li><a href="#nine">Datatypes</a></li>
						<li><a href="#ten">Naming</a></li>
						<li><a href="#eleven">Example (Script & Visual Graph)</a></li>
						<li><a href="#twelve">Range & Domain</a></li>
					</ul>
				</div>
				<div class="col-sm-8 text-left"> 
					<h1>Most Imporant Turtle Fundamentals (short guide)</h1>
					<div align="center"><img src="img/turtle1.png" alt="turtle" /></div><br/>
					<h4 id="intro"><font color="#2ECC71"><strong><u>INTRODUCTION</u></strong></font></h4>
					<p align="justify"><strong><i>Turtle (Terse RDF Triple Language)</i></strong> is a format for expressing data in the Resource Description Framework (RDF)
								  data model with a syntax similar to SPARQL. RDF, in turn, represents information using "triples", each of which consists of a 
								  subject, a predicate, and an object. Each of those items is expressed as a Web URI.
					</p><br/><br/>
					<h4 id="one"><font color="#2ECC71"><strong><u>BASIC SYNTAX</u></strong></font></h4>
					<p>
						<ul>
							<li>Triples are terminated with a full stop;</li>
							<li>URLs are encoded in angle brackets (< and >);</li>
							<li>Literals are enclosed by double quotes</li>
						</ul>
						<strong><u>Example:</u>
							&lt;http://example.com/thing&gt;&nbsp;&nbsp;&lt;http://example.com/relation&gt;&nbsp;&nbsp;“Some Text” .
						</strong>
					</p><br/><br/>
					<h4 id="two"><font color="#2ECC71"><strong><u>PREFIXES</u></strong></font></h4>
					<p>
						Use @PREFIX to shorten URLs.<br/><br/>
						<strong><u>Example:</u>
						The following prefix <u>@PREFIX ex:&lt;http://example.com&gt; .&nbsp;&nbsp;</u>enables us to write&nbsp;&nbsp;<u>ex:thing ex:relation “Some Text” .</u>
						</strong>
					</p><br/><br/>
					<h4 id="three"><font color="#2ECC71"><strong><u>SAME SUBJECT</u></strong></font></h4>
					<p>	Two or more triples can have same subject.<br/><br/>
						<strong><u>Example:</u>
							The following triples:<br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "Some Text" .<br/>
							ex:thing ex:otherRelation ex:otherThing .<br/><br/>
							can be written as:<br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "Some Text" ; <br/>
							&emsp;&emsp;&emsp;&emsp;&nbsp;ex:otherRelation ex:otherThing .
						</strong>
					</p><br/><br/>
					<h4 id="four"><font color="#2ECC71"><strong><u>SAME SUBJECT AND PREDICATE</u></strong></font></h4>
					<p> Two or more triples can have the same subjct and the same predicate.<br/><br/>
						<strong><u>Example:</u>
							These triples:<br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "Some Text" .<br/>
							ex:thing ex:relation ex:otherThing .<br/><br/>
							can be written as:<br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "Some Text" , <br/>
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ex:otherThing .
						</strong>
					</p><br/><br/>
					<h4 id="five"><font color="#2ECC71"><strong><u>REDUNDANCE</u></strong></font></h4>
					<p>
						<strong><u>Example:</u>
							These triples:<br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "Some Text" .<br/>
							ex:thing ex:relation "Some Text" .<br/><br/>
							have the same meaning as:<br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "Some Text" , <br/>
						</strong>
					</p><br/><br/>
					<h4 id="six"><font color="#2ECC71"><strong><u>BLANK NODES</u></strong></font></h4>
					<p>
						<strong><u>Example:</u>
							<br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							_:a ex:relation "Some Text" . <br/><br/>
						</strong>
							<ul>
								<li>'a' is the label - valid only within a single document;</li>
								<li>if above triple appeared in another document it would refer to different node;</li>
							</ul>
					</p><br/><br/>
					<h4 id="seven"><font color="#2ECC71"><strong><u>UNLABELED BLANK NODES</u></strong></font></h4>
					<p>
						<strong><u>Example:</u>
							These triples:<br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation _:a .<br/>
							_:a ex:property "foo" . <br/>
							_:a ex:property "bar“ . <br/><br/>
							can be written as:<br/><br/>
							ex:thing ex:relation [ <br/>
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ex:property "foo" ; <br/>
							&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ex:property "bar" ] . <br/>
						</strong>
					</p><br/><br/>
					<h4 id="eight"><font color="#2ECC71"><strong><u>LANGUAGE TAG</u></strong></font></h4>
					<p>	In RDF, literals can have a language tag.<br/><br/>
						<strong><u>Example:</u><br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "Hello"@en .<br/>
							ex:thing ex:relation "Bonjour"@fr .<br/><br/>
						</strong>
					</p><br/><br/>
					<h4 id="nine"><font color="#2ECC71"><strong><u>DATATYPES</u></strong></font></h4>
					<p>	In RDF, literals can have a datatype. However, they cannot have a datatype and a language tag at the same time.<br/><br/>
						<strong><u>Example 1:</u><br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "49"^^&lt;http://example.com/datatype&gt;&nbsp;&nbsp; .<br/></br>
							<u>Example 2:</u><br/><br/>
							@PREFIX ex:&lt;http://example.com&gt;&nbsp;&nbsp; .<br/>
							@PREFIX xsd:&lt;http://www.w3.org/2001/XMLSchema#&gt;&nbsp;&nbsp; .<br/>
							ex:thing ex:relation "Name of the relation"^^xsd:string&nbsp;&nbsp; .<br/></br>
						</strong>
					</p><br/><br/>
					<h4 id="ten"><font color="#2ECC71"><strong><u>NAMING</u></strong></font></h4>
					<p>	By convention properties are named using lower camel case notation.<br/>
						<strong><u>Example of property:</u>ex:hasBrother</strong><br/><br/>
						Classes are named using upper case camel notation.<br/><br/>
						<strong><u>Example of class:</u>ex:Person</strong><br/><br/>
						This naming concept is not universal. It is just a convention.
					</p><br/><br/>
					<h4 id="eleven"><font color="#2ECC71"><strong><u>EXAMPLE (SCRIPT & VISUAL GRAPH)</u></strong></font></h4>
					<p>
						<strong>
							<u>Example Script:</u><br/><br/>
								@PREFIX dc:&lt;http://purl.org/dc/elements/1.1/&gt;&nbsp;&nbsp; .<br/>
								@PREFIX foaf:&lt;http://xmlns.com/foaf/0.1/&gt;&nbsp;&nbsp; .<br/>
								&lt;http://talis.com/&gt; dc:title "Talis Information Ltd." ; <br/>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;dc:description "The home page of Talis" ; <br/>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;dc:publisher [ <br/>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;foaf:name "Talis" ] ; <br/>
								&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;dc:date "2005-08-01" . <br/><br/>
						</strong>
						<u>The example given above can be interpreted as:</u><br/> The resource denoted by the URI http://www.talis.com/ has a title "Talis Information Ltd",
						a description "The home page of Talis", was published by Talis on August 1st, 2005.<br/><br/>
						<strong>
							<u>Example Visual Graph:</u><br/><br/>
							<div align="center"><img src="img/graph.png" alt="turtle" style="width:500px;height:300px;"/></div><br/>
						</strong>
					</p><br/><br/>
					<h4 id="twelve"><font color="#2ECC71"><strong><u>RANGE & DOMAIN</u></strong></font></h4>
					<p>	Suppose we have this RDF schema:<br/><br/>
						<strong>
							@PREFIX rdf:&lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt;&nbsp;&nbsp; .<br/>
							@PREFIX rdfs:&lt;http://www.w3.org/2000/01/rdf-shema#&gt;&nbsp;&nbsp; .<br/>
							@PREFIX ex:&lt;http://example.com/schema#&gt;&nbsp;&nbsp; .<br/> 
							ex:Person a rdfs:Class . <br/>
							ex:spouse a rdfs:Property . <br/><br/>
						</strong>
						We can also declare similar ontology in the following way:<br/><br/>
						<strong>
							@PREFIX ex:&lt;http://example.com/schema#&gt;&nbsp;&nbsp; .<br/> 
							_:fred a ex:Person ; <br/>
							&emsp;&emsp;&emsp;ex:spouse _:wilma . <br/><br/>
						</strong>
						A query for all things with type ex:Person would return fred. <br/><br>
						If we add a <strong><u>RANGE</u></strong>, then we would define the same ontology in the following way: <br/><br/>
						<strong>
							@PREFIX rdf:&lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt;&nbsp;&nbsp; .<br/>
							@PREFIX rdfs:&lt;http://www.w3.org/2000/01/rdf-shema#&gt;&nbsp;&nbsp; .<br/>
							@PREFIX ex:&lt;http://example.com/schema#&gt;&nbsp;&nbsp; .<br/> 
							ex:Person a rdfs:Class . <br/>
							ex:spouse a rdfs:Property ; <br/>
							&emsp;&emsp;&emsp;&emsp;&emsp;ex:range ex:Person . <br/><br/>
						</strong>
						Now whenever we use the property ex:spouse we can infer that the value is an ex:Person. <br/><br/>
						A query against the data will now return wilma as well, indicating that wilma is also a person.<br/><br/>
						We can also simplify by adding a <strong><u>DOMAIN</u></strong> for the property. <br/><br/>
						<strong>
							@PREFIX rdf:&lt;http://www.w3.org/1999/02/22-rdf-syntax-ns#&gt;&nbsp;&nbsp; .<br/>
							@PREFIX rdfs:&lt;http://www.w3.org/2000/01/rdf-shema#&gt;&nbsp;&nbsp; .<br/>
							@PREFIX ex:&lt;http://example.com/schema#&gt;&nbsp;&nbsp; .<br/> 
							ex:Person a rdfs:Class . <br/>
							ex:spouse a rdfs:Property ; <br/>
							&emsp;&emsp;&emsp;&emsp;&emsp;ex:range ex:Person ; <br/>
							&emsp;&emsp;&emsp;&emsp;&emsp;ex:domain ex:Person . <br/><br/>
						</strong>
						This let us omit the type from our data. We can infer it instead. <br/><br/>
						<strong>
							@PREFIX ex:&lt;http://example.com/schema#&gt;&nbsp;&nbsp; .<br/> 
							_:fred ex:spouse ex:wilma . <br/><br/>
						</strong>
						From the triple given above, we can infer that fred is a Person.
					</p>
					<hr>
					For more details please visit:<a href="http://www.w3.org/TR/turtle"/>&nbsp;&nbsp;http://www.w3.org/TR/turtle</a><br/><br/><hr>
				</div>
				<div class="col-sm-2 sidenav" style="height:100vh;">
					<div class="well">
						<p align="justify">The simplest Turtle triple statement is a sequence of (subject, predicate, object) terms, 
										   separated by whitespace and terminated by '.' after each triple. 
						</p>
					</div>
					<div class="well">
						<p align="justify">Literals are written in quotation marks, and they are used to identify strings, dates, and numbers. 
										   Numbers can be written like other literals with lexical form and datatype. 
						</p>
					</div>
					<div class="well">
						<p align="justify">The names of prefixes should be defined on the beginning. 
										   Before writing the prefix URI, the '@' character followed by the keyword 'PREFIX' should be written.
						</p>
					</div>
					<div class="well">
						<p align="justify">As a delimiter for two triples that have the same subject use ';'. 
										   As a delimiter for two triples that have the same subject and same predicate use ','. 
						</p>
					</div>   
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			<p>Copyright &copy; 2017 <a style="color:#2ECC71;" href="https://www.uni-bonn.de/">University of Bonn</a> | Developed by <a style="color:#2ECC71;" target="_blank" rel="nofollow" href="about.php">Turtle Board Team</a></p>
		</footer>
	</body>
</html>