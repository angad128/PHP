<?php
	$likes = 'eating,drinking,the gym,nothing';
	$like = explode(',' , $likes);
	//print_r($like);

	foreach ($like as $key => $value) {
		echo '<a href="#">',ucfirst($value), '</a>' .' at position ' , $key . '<br>';
	}


	
	$likes = 'eating drinking thegym nothing';
	$like = explode(' ' , $likes);
	//print_r($like);

	foreach ($like as $key => $value) {
		echo '<a href="#">',ucfirst($value), '</a>' .' at position ' , $key . '<br>';
	}
?>