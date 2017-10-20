<?php
	header('Content-Type: text/xml');
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?> ';

	echo '<response>';
		$food = $_GET['food'];
		$foodArray = array('Apple','Banana','Chaumin','Dunot' );
		if (in_array($food, $foodArray)) {
			echo 'We do have ' .$food .'. Please wait!!.Your order is being forwarded to kitchen.';
		}elseif(empty($food)){
			echo 'Enter the food you want to order';
		}else{
			echo 'Soor we dont sale ' .$food .'.';
		}
	echo '</response>';


?>