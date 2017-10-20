<?php
	//collect and process data
	$name= 'angad' ;
	$email= 'angad@email.com';
	$message= 'Its Great to be here!!';

	$data = array(
		'name' => $name,
		'email' => $email,
		'message' => $message,
		);
	//print_r($data);
	$feilds_sql = '`' . implode('`, `', array_keys($data)) . '`';
	$values_sql= '\''. implode('\',\'',$data) .'\'';

	$sql = "
		INSERT INTO 'table' ($feilds_sql);
		VALUES($values_sql)
	";
	echo $sql;
?>