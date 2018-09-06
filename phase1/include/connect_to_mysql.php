<?php
	$db_host = "localhost";
	$conn = mysqli_connect($db_host, $db_username, $db_pass, $db_name);

	if (!$conn) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
	mysqli_query($conn, "SET NAMES utf8"); // For rows containing chinese characters
	mysqli_query($conn, 'SET character_set_results=utf8'); // For rows containing chinese characters
?>
