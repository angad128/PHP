
<?php
	if (isset($_POST['submit'])) {
		if (isset($_POST['choice'])) {
			/*switch case */
		
			$choice = $_POST['choice'];
			switch ($choice) {
				case 'Dell':
					echo 'Chosen Dell Laptop';
					break;
				case 'Lenovo':
					echo 'Chosen Lenovo Laptop';
					break;
				case 'Apple':
					echo 'Chosen Apple Laptop';
					break;
				case 'HTC':
					echo 'Chosen HTC Laptop';
					break;
				
				default:
					echo 'you have not selected any laptop';
					break;
			}
		}
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="2.switch.php" method="post">
	Select Laptop:<select name="choice">
		<option value="Dell">Dell</option>
		<option value="Apple">Apple</option>
		<option value="Lenovo">Lenovo</option>
		<option value="HTC">HTC</option>
	</select>
	<input type="submit" name="submit" value="submit">
</form>
</body>
</html>