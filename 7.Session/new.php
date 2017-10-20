<?php
	session_start();
	echo $_SESSION['name'];

	//unset(); destroy paticular session
	//unset($_SESSION['name']);

	//session_destroy() destroys all value in session
	session_destroy();

?>