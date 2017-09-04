<?php
	session_start();
?>

<html>
	<head>
		<!-- Meta Tag -->
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Bootstrap / CSS / Fonts -->
		<link rel="stylesheet" href="css/login-register.css">
		<link rel="stylesheet" href="css/bttn.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="js/index.js"></script>

		<!-- SEO
		<meta name="description" content="">
		<meta name="url" content="">
		<meta name="copyright" content="">
		<meta name="robots" content="index,follow">
		<meta name="keywords" content=""> -->

		<!-- Google Analytics Tracking Code -->
		<!-- *** Code *** -->

		<!-- Favicon -->
		<link rel="shortcut icon" href="images/favicon/favicon.ico">
		<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
		<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#5bbad5">

		<!-- Title -->
		<title>HomeHub - Login</title>
	</head>
	<body>
		<div class="wrapper">
			<div class="container">
				<h1>HomeHub User Login</h1>
				<div class="row">
					<img src="images/logos/main-logo.png" alt="Logo" >
				</div> <!-- row -->
				<div class="row" style="margin-top: 5px">
					<!-- > <h3>No user found</h3> -->
				</div> <!-- row -->
				<div class="row">
					<form action="login_db.php" method="POST" class="form-horizontal">
						<div class="form-group">
							<input type="text" class="form-control" id="usr" name="usr" placeholder="Username">
						</div>
						<div class="form-group">
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
						<div class="form-group" style="margin-top: 3px">
							<button type="reset" class="btn btn-default">Reset</button>
						</div>
					</form>
				</div> <!-- row  -->
				<div class="row" style="margin-top: 0px", "margin-bottom: 10px">
					<button class="bttn-unite bttn-md bttn-success" style="margin-top: 10px" onclick="window.location.href='index.php'">Home</button>
					<p style="margin-top: 10px"> Copyright © HomeHub Project 2017 </p>
				</div> <!-- row  -->
			</div> <!-- container -->
		</div> <!-- wrapper -->
	</body>
</html>