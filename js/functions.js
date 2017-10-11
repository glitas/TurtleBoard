// tutorial name
var tn = tutname.toString();
 
// timer
var i=0;
var tt;

// timer start function 
function timer()
{
    document.getElementById('time').innerHTML = (i+1);
    tt =  setTimeout('timer()', 1000); //this will make loop this function for every one second
    i++;
};

// timer finish function 
function timer_out()
{
	clearTimeout(tt);
    document.getElementById('time').innerHTML = i;
};

// score and feedback function
function score()
{
	clearTimeout(tt);
    document.getElementById('time').innerHTML = i;
	var totalpoints;
	totalpoints = nhints + nmist + i; 
	console.log(nhints);
	document.getElementById('points').innerHTML = "<strong><font size='4.5'><u>Total score:</u> " + totalpoints + "</font></strong>";
	
	if(totalpoints<50)
		alert("Bravo! You can now do the next tutorial.");
	else if (totalpoints<80)
		alert("You passed this tutorial with good results. Read the Turtle Fundamentals once again and choose another tutorial.");
	else
		alert("You can score better. Do the same tutorial once again.");
};
