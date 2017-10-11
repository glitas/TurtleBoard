
  var t = tutname.toString();
  
//Board - Function for retrieving the guidelines
var filePath = "guidelines/"+ t + "1.txt";
xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET",filePath,false);
xmlhttp.send(null);
var fileContent = xmlhttp.responseText;
var fileArray = fileContent.split('\n');
var a = 0; 


function next() {
    var helper = fileArray.length > 1 ? fileArray.shift() : fileArray[0]; 
	document.getElementById("guide").innerHTML =  "<font size='4'><strong><br/>" + helper + "<br/></strong></font>";

};

// Board - Function for retrieving the hints
var filePath1 = "hints/" + t + "1.txt";
xmlhttp1 = new XMLHttpRequest();
xmlhttp1.open("GET",filePath1,false);
xmlhttp1.send(null);
var fileContent1 = xmlhttp1.responseText;
var fileArray1 = fileContent1.split('\n');

function hint() {
	a = a +1;
	var helper1 = fileArray1.length > 1 ? fileArray1.shift() : fileArray1[0]; 
	document.getElementById("help").innerHTML = "<strong><font size='3'>" + helper1 + "</font></strong>";
	document.getElementById("score").innerHTML =  "<font size='3'><strong>Session score:  " + a + "<br/></strong></font>";

};

// Board - timer
var i=0;

function timer()
{
    //document.getElementById('time').innerHTML = "<strong><font size='3'>Taken time: " + (i+1) + "</strong></font>";
    setTimeout('timer()', 1000); //this will make loop this function for every one second
    i++;
};

function score()
{
	var j = a * i;
	document.getElementById('points').innerHTML = "<strong><font size='3'>Total score: " + j + "</font></strong>";
	clearTimeout(setTimeout('timer()', 1000));
	document.getElementById('time').innerHTML = "";
	window.onload = null;
	window.clearTimeout(timer());

};

