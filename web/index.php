<!DOCTYPE html>
<html>
	<head>
		<?php $page = 'home'; include 'navbar.php';?>
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>Conrad's Home Page</title>
	</head>
	<body>
		<h1>Conrad's Home Page</h1>
		<div id="aboutMeBox" onmouseover="displayInfo()">About Me...</div>
		<div id="aboutMeDisplay" onmouseout="retractInfo()">
			I was born in Palm Springs, CA and raised in Dayton, OH. I have a wife (Desma) and a five month old girl (Amelia). Currently, I'm studying Computer Science, while my wife is studying to become a Physical Therapist. My only interest, besides working with computers, is spending time with my family. I'd say it doesn't matter what we do together, as long as we are together.
		</div>
		<script src="index.js"></script>
	</body>
</html>