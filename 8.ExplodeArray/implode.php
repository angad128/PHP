<?php
	$names = array('Alex', 'Billy', 'Crish');
	//print_r($names);

	
	/*
	$names_str = null;
	foreach ($names as $key=>$name ) {
		
		$names_str .=$name;
		if($key != (count($names) -1)){
			$names_str .= ',,,';
		}
		
	}
	echo $names_str;
	*/
	echo implode(',,,',$names);

?>