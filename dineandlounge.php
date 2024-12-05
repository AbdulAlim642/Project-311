<!DOCTYPE html>
<html lang="en">

<head>
	<title>Dream Place Hotel</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<?php require_once('Include/links.php'); ?>
</head>

<body bg-light>
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Dream Place Hotel</a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active fs-5" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="rooms.php">Rooms</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="dineandlounge.php">Dine and Lounge</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="gallery.php">Gallery</a></li>
                <li class="nav-item"><a class="nav-link fs-5" href="Facilities.php">Facilities</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        More details...
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="ContactUs.php">Contact Us</a></li>
                        <li><a class="dropdown-item" href="About.php">About us</a></li>
                        <li><a class="dropdown-item" href="rulesandregulation.php">Rules and Regulation</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Login/Logout button -->
            <div class="d-flex">
                <?php if (isset($_SESSION['user_id'])): ?>
                    <span class="navbar-text me-3">Welcome, <?= htmlspecialchars($_SESSION['user_name']); ?>!</span>
                    <a href="User_logout.php" class="btn btn-danger shadow-none">Logout</a>
                <?php else: ?>
                    <a href="User_type.php" class="btn btn-primary shadow-none me-2">Login</a>
                    <a href="User_Registration.php" class="btn btn-primary shadow-none">Sign up</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</nav>
<!-- End of Navbar -->
 


	<div style="margin-left:0;" class="container">
		<div class="panel panel-default">
			<div class="panel-body">
				<strong>
					<h3>Dine And Lounge Items</h3>
				</strong>
				<br />
				<br />

				<?php
				// Database connection
				$conn = new mysqli('localhost', 'root', '', 'hotel_db');

				// Check connection
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}

				// Fetch images from the dine_lounge table
				$sql = "SELECT image_path FROM dine_lounge";
				$result = $conn->query($sql);

				// Check if there are results
				if ($result->num_rows > 0) {
					// Output each row
					while ($row = $result->fetch_assoc()) {
						echo '<div style="float:left; width:250px; height:250px; margin-left:20px;">
                                <img src="' . $row['image_path'] . '" width="250" height="250" />
                              </div>';
					}
				} else {
					echo "No images found.";
				}

				// Close connection
				$conn->close();
				?>

				<br style="clear:both;" />
				<br />
			</div>
		</div>
	</div>
	<br>
	<br>
	<br>

	<!-- Header Section -->
	<div class="header-section" style="text-align:center; padding:20px; background-color:#f8f9fa;">
		<h2>Welcome to Dream Place Hotel</h2>
		<p>Experience the best in dining and lounging in a luxurious setting. Enjoy a variety of cuisines and relaxing
			ambiance at our world-class hotel.</p>
	</div>
	<br>
	<br>
	<br>

	<!-- Footer start -->
	<?php require('Include/Footer.php'); ?>
	<!-- Footer end -->
</body>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.js"></script>

</html>