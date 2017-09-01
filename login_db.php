<?php
	session_start();

	include 'database_config.php';

	$usr = $_POST['usr'];
	$pwd = $_POST['pwd'];
	$sql = "SELECT * FROM users WHERE username = '$usr' AND password = '$pwd'";
	$result = mysqli_query($connect, $sql);

	if (mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_assoc($result))
		{
			echo "Matching account:" . "<br>";
			echo "user_id: " . $row["user_id"] . " --- Username: " . $row["username"] . " --- Password: " . $row["password"] . " --- Name: " . $row["name"] . " --- Surname: " . $row["surname"] . " --- E-Mail: " . $row["email"] . "<br>";
		
			$_SESSION['user_id'] = $row['user_id'];

			header("Location: index.php");
		}
	}
	else
	{
		echo "0 results" . "<br>";
		echo "No matching account";
	}
?>