<!DOCTYPE html>
<html>
	<head>
		<?php $page = 'home'; include 'navbar.php';?>
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>Conrad's Home Page</title>
	</head>
	<body>
		<canvas id="canvas"></canvas>
		<script type="text/javascript" src="index.js"></script>
		<h1>Conrad's Home Page</h1>
		<div id="aboutMeBox" onmouseover="displayInfo()" onmouseout="retractInfo()">About Me...</div>
		<div id="aboutMeDisplay">
			I was born in Palm Springs, CA and raised in Dayton, OH. <br>I've been married for over two years to my wife Desma and we have a five month old daughter named Amelia.<br>Currently, I'm studying Computer Science, while my wife is studying to become a Physical Therapist.<br>My only interest, besides working with computers, is spending time with my family.<br>I'd say it doesn't matter what we do together, as long as we are together.
		</div>
		<div id="photosBox" onmouseover="displayPhotos()" onmouseout="retractPhotos()">Photos of Our Family</div>
		<div id ="photosDisplay">
			<img src="familyPicture1.jpg" alt="Family Picture">
			<img src="familyPicture2.jpg" alt="Amelia Rose">
			<img src="familyPicture3.jpg" alt="Wedding Day">
		</div>
	</body>
</html>