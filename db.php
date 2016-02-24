#!usr/bin/php
<?php

	$db = new mysqli("localhost","root","herecomesthesnow45","it202");

	if ($db->connect_errno > 0)
	{
		echo __file__.__line__." ERROR: ".$db->connect_error.PHP_EOL;
		exit(-1);
	}
	echo "Connected to database".PHP_EOL;

	$query = "select * from mojave";
	$results = $db->query($query);
	print_r($results);

	$sql = "CREATE TABLE MyGuests (
		id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
		firstname VARCHAR(30) NOT NULL,
		lastname VARCHAR(30) NOT NULL,
		email VARCHAR(50),
		reg_date TIMESTAMP
	)";

	if ($conn->query($sql) === TRUE) {
		echo "Table MyGuests created successfully";
	} else {
		echo "Error creating table: " . $conn->error;
	}
	$db->close();

?>
