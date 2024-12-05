<!DOCTYPE html>
<?php
require_once 'validate.php';
require 'name.php';
?>
<html lang="en">

<head>
	<title>Dream Place Hotel</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css " />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
	<nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">Dream Place Hotel</a>
			</div>
			<ul class="nav navbar-nav pull-right ">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?php echo $name; ?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<ul class="nav nav-pills">
			<li class="active"><a href="home.php">Home</a></li>
			<li><a href="account.php">Accounts</a></li>
			<li><a href="booking.php">Booking</a></li>
			<li><a href="room.php">Room</a></li>
			<li><a href="Users.php">Users</a></li>
			<li><a href="dine.php">Dine and Lounge</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="contact.php">Contact us</a></li>
			<li><a href="about.php">About us</a></li>
			
		</ul>
	</div>
	<br />
	<div class="container-fluid">
		<div class="panel panel-default">
			<div class="panel-body">
				<center><img src="img/WhatsApp.5.jpeg" width="1500px" heigh="600" /></center>
			</div>
		</div>
	</div>
	<br />
	<br />
	<!-- Footer start -->

</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>

</html>