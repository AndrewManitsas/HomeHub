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
		<link href="css/main-style.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

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
		<div class="row">
			<div class="col-md-12">
				<h1 id="title-top">Login</h1>
			</div>
		</div>
		
		<nav class="navbar navbar-inverse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Home</a>
				</li>
			</ul>
		</nav>
		
		<div class="panel panel-info">
			<div class="panel-heading">Login Form</div>
			<div class="panel-body">

				<?php
					if (isset($_SESSION['failed_login']))
					{
						echo "Wrong Username of Password. Please try again.";

						session_destroy();
						session_start();
					}
				?>

				<form action="login_db.php" method="POST" class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-md-2" for="email">Username:</label>
						<div class="col-md-10">
							<input type="text" class="form-control" id="usr" name="usr" placeholder="Username">
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-md-2" for="pwd">Password:</label>
						<div class="col-md-10"> 
							<input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
						</div>
					</div>
					<div class="form-group"> 
						<div class="col-md-offset-2 col-md-10">
							<button type="submit" class="btn btn-default">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>