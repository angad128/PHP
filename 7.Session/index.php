<?php
	//Start the session
	session_start();

	$_SESSION['name']='Alex';
	echo $_SESSION['name'];

?>