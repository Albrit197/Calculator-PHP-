<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Calculator-PHP-/style.css">
    <title>Multiplication Table</title>
	</head>
<body>
	<div style="background-color: D6EBFF;">
		<h3>Multiplication Table</h3>
		<hr style="border-top:1px dotted #ccc;"/>
 
		<form method="POST" action="">
			<div>
				<label>Enter a number:</label>
                <input class="color" type="number" min="1" max="15" name="digit" required="required"/>
				<button class="color" name="calculate">Calculate</button>
			</div>
		</form>
		<br /><br />
		<?php include 'calculate.php'?>
	</div>
</body>
</html>