function displayInfo()
{
	document.getElementsByID("aboutMeBox").style.visibility = hidden;
   document.getElementsByID("aboutMeDisplay").style.visibility = visible;
}

function retractInfo()
{
   document.getElementsByID("aboutMeBox").style.visibility = visible;
   document.getElementsByID("aboutMeDisplay").style.visibility = hidden;
}