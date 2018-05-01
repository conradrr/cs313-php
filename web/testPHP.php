<!DOCTYPE html>
<html>
<head><title>PHP Practice</title></head>
<body>
	<p>Test PHP</p>
	<?php
	for ($i = 1; $i <= 10; $i++)
		if ($i % 2 === 0)
			echo "<div id=div$i>DIV$i</div>"
		else
			echo "<font color=\"red\"><div id=div$i>DIV$i</div></font>"
	
	
	?>
</body>
</html>