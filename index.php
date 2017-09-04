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
        <title>HomeHub</title>
    </head>
    <body>

		<!-- Non logged in redirect -->
		<?php
			if ( !(isset($_SESSION['user_id'])) )
			{
				header("Location: login.php");
			}
		?>

		<div class="row">
			<div class="col-md-12">
				<h1 id="title-top">HomeHub</h1>
			</div>
		</div>

		<!-- Navbar -->
		<nav class="navbar navbar-inverse">
			<ul class="nav navbar-nav">
				<li class="active">
					<a href="index.php">Overview</a>
				</li>
				<li>
					<a href="appliances.php">Appliances</a>
				</li>
				<li>
					<a href="analytics.php">Analytics</a>
				</li>
				<li>
					<a href="profile.php">Profile</a>
				</li>
				<?php
					if (isset($_SESSION['user_id']))
					{
						if ($_SESSION['user_id'] == 777)
						{
							echo "<li><a href='controlpanel.php'>Control Panel</a></li>";
						}
					}
				?>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li>
					<a href="#">
						<?php
							if (isset($_SESSION['user_id']))
							{
								echo "Welcome " . $_SESSION['name'];
							}
							else
							{
								echo "You are not logged in.";
							}
						?>
					</a>
				</li>
				<li>
					<a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
				</li>
				<li>
					<a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a>
				</li>
				<li>
					<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
				</li>
			</ul>
		</nav>

		<!-- Panels -->
		<div class="row">
			<div class="col-md-6">
				<!-- Left panel -->
				<div class="panel panel-info">
					<div class="panel-heading">Panel 1</div>
					<div class="panel-body">Panel 1 Body</div>
				</div>
			</div>
			<div class="col-md-6">
				<!-- Right panel -->
				<div class="panel panel-info">
					<div class="panel-heading">Panel 2</div>
					<div class="panel-body">Panel 2 Body</div>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-info">
					<div class="panel-heading">Panel 3</div>
					<div class="panel-body">Panel 3 Body</div>
				</div>
			</div>
		</div>
        
        <p>
            HomeHub is a centralized control panel with analytics support for every smart network-connected home appliance.
            It gives the ablity to control and manage every connected appliance, from the washing machine to the central alarm
            with ease. Change.
        </p>
    </body>
</html>