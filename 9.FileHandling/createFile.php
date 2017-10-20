<?php
	$mynewfile = fopen("testfile.txt", "w") or die("Unable to create a new file testfile.txt");

	//The fwrite() function is used to write to a file.
	$txt = "My Input String in File.\n";
	fwrite($mynewfile, $txt);
	$txt = "My Input String in File.\n";
	fwrite($mynewfile, $txt);
	$txt = "Hello.\n";
	fwrite($mynewfile, $txt);
	
	fclose($mynewfile);


?>