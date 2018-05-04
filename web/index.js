function displayInfo()
{
	document.getElementByID("aboutMeBox").style.visibility = hidden;
   document.getElementByID("aboutMeDisplay").style.visibility = visible;
}

function retractInfo()
{
   document.getElementByID("aboutMeBox").style.visibility = visible;
   document.getElementByID("aboutMeDisplay").style.visibility = hidden;
}