<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="1.if_else_condition.php">
	FirstNum:<input type="number" name="num1"></br>
	SecondNum:<input type="number" name="num2"></br>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>

<?php
	if (isset($_POST['submit'])) {
		$num1= $_POST['num1'];
		$num2= $_POST['num2'];
		if ($num1>$num2) {
			echo "First number: " .$num1 ."is greater than Second number:" .$num2;
		}elseif ($num1 == $num2) {
			echo "First number: " .$num1 ."is equal to Second number:" .$num2;
		}else{
			echo "First number: " .$num1 ."is smaller than Second number:" .$num2;
		}
	}
	

?>