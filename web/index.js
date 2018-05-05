function displayInfo()
{
   document.getElementById("aboutMeDisplay").style.visibility = "visible";
}

function retractInfo()
{
   document.getElementById("aboutMeDisplay").style.visibility = "collapse";
}

function displayPhotos()
{
   document.getElementById("photosDisplay").style.visibility = "visible";
}

function retractPhotos()
{
   document.getElementById("photosDisplay").style.visibility = "collapse";
}

/**************************************************************
* Creating Bouncing Ball
***************************************************************/

// For convenience, set variable equal to canvas element
var canvas = document.getElementById("canvas");
// Define a 2d canvas
var ctx = canvas.getContext("2d");

var height = 50;
var counter = 0;

// Size the canvas
canvas.height = height;
canvas.width = window.innerWidth - 30;

// Circle x and y
var cX = 5;
var cY = 5;

// Velocity of circle
var velCX = 1;
var velCY = 1;

// Let's create our function we want to loop/animate
function update() {
     // Loop/Animate the given function
     requestAnimationFrame(update); 

     // Bounce ball off walls!
     if (cX > (canvas.width - 5)){
       velCX = -velCX;
     }
  
    if (cX < 5) {
      velCX = -velCX;
    }
  
    // Still bouncing off walls!
    if (cY > (height - 5) || cY < 5)
    {
      velCY = -velCY;
    }
  
	 cX += velCX;
	 cY += velCY;
  
    // Clear the canvas every frame
    //ctx.clearRect(0, 0, 600, 600);

    // Let's create a black ball
    ctx.beginPath();
    ctx.fillStyle = "black";
    ctx.arc(cX, cY, 5, 0, Math.PI * 2);
    ctx.fill();
	
	console.log(counter);
	
	if (counter == 2650)
	{
		ctx.clearRect(0, 0, canvas.width, canvas.width);
	
		// Circle x and y
		cX = 5;
		cY = 5;
	}
	
	counter++;
}

update();