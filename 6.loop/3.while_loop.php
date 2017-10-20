<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="3.while_loop.php">
	FirstNum:<input type="number" name="num1"></br>
	SecondNum:<input type="number" name="num2"></br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>
<?php
	if (isset($_POST['submit'])) {
		

			/*While Loop */
			$initial= $_POST['num1'];
			$final = $_POST['num2'];
			while ( $initial <= $final) {
				echo $initial.'<br/>';
				$initial++;
			}
	
	}
	
?>

