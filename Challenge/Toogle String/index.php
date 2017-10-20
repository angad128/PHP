<?php 
	$S = "abcdE";
	//$uWord = array();
	//$lWord = array();
	for($i = 0; $i<strlen($S);$i++){
		if(strtoupper($S[$i]) != $S[$i]) {
			//get all lowercase string 
			//print_r($S[$i]);
			print_r(strtoupper($S[$i]));

			//array_push($uWord,strtoupper($S[$i]));
			//print_r($uWord);

		}else{
			//get all lowercase string
			print_r(strtolower($S[$i]));
			//array_push($lWord,strtolower($S[$i]));
			//print_r($lWord);
		}
		//$finalArray = array_merge($uWord,$lWord);
		//print_r($finalArray);
	}
?>