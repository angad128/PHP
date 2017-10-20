<?php
	//The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened. The following example also generates a message if the fopen() function is unable to open the specified file:
	$myfile = fopen("textfile.txt","r") or die("File not Found!!");

	/*
	The first parameter of fread() contains the name of the file to read from and the second parameter specifies the maximum number of bytes to read(in ourcase total file).
	echo fread($myfile, filesize("textfile.txt"));
	*/

	/*
	The fgets() function is used to read a single line from a file.
	echo fgets($myfile);
	*/

	/*
	The feof() function checks if the "end-of-file" (EOF) has been reached.The feof() function is useful for looping through data of unknown length.
	while (!feof($myfile)) {
		echo fgets($myfile)."<br>";
	}
	*/
	/*The fgetc() function is used to read a single character from a file.
	
	while(!feof($myfile)){
		echo fgetc($myfile);
	}
	*/

	
	//The fclose() function is used to close an open file.he fclose() requires the name of the file (or a variable that holds the filename) we want to close.
	fclose($myfile);

?>