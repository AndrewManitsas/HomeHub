<?php
	session_start();

	include 'database_config.php';

	$usr = $_POST['usr'];
	$pwd = $_POST['pwd'];
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$email = $_POST['email'];

	$sql = "INSERT INTO `users` (`user_id`, `username`, `password`, `name`, `surname`, `email`) VALUES (NULL, '$usr', '$pwd', '$name', '$surname', '$email')";

	$result = mysqli_query($connect, $sql);
	
	if ($result)
	{
		echo "New account created <br>";

		header("Location: index.php");
	}
?>