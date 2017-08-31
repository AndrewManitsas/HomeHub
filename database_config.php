<?php
	$server = "localhost";
	$username = "homehub_acc";
	$password = "homehubdemo";
	$db_name = "homehub_db";

	$connect = mysqli_connect($server, $username, $password, $db_name);

	if (!$connect)
	{
		die("Connection Failed: " . mysqli_connect_error());
	}
	else
	{
		//echo "Successfull Connection<br>";
	}
?>