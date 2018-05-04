<!DOCTYPE html>
<html>
	<head>
		<?php $page = 'home'; include 'navbar.php';?>
		<link rel="stylesheet" type="text/css" href="index.css">
		<title>Conrad's Home Page</title>
	</head>
	<body>
		<script type="text/javascript" src="index.js"></script>
		<h1>Conrad's Home Page</h1>
		<div id="aboutMeBox" onmouseover="displayInfo()" onmouseout="retractInfo()">About Me...</div>
		<div id="aboutMeDisplay">
			I was born in Palm Springs, CA and raised in Dayton, OH. <br>I have a wife (Desma) and a five month old girl (Amelia).<br>Currently, I'm studying Computer Science, while my wife is studying to become a Physical Therapist.<br>My only interest, besides working with computers, is spending time with my family.<br>I'd say it doesn't matter what we do together, as long as we are together.
		</div>
	</body>
</html>