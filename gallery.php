<?php
$conn = new mysqli("localhost", "root", "", "hotel_db");

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} else {
	echo "Connected successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dream Place Hotel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php require('Include/links.php'); ?>

    <style>
      /* Gallery container with spacing */
.gallery-container {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr)); /* Create columns of flexible sizes */
    gap: 20px; /* Space between images */
    justify-items: center; /* Center images */
}

/* Gallery item styling */
.gallery-item {
    position: relative; /* For any additional positioning or effects */
    overflow: hidden; /* Hide overflow content to maintain the aspect ratio */
    border-radius: 8px; /* Rounded corners for the container */
}

/* Image styling */
.gallery-item img {
    width: 100%; /* Make sure the image width fills the container */
    height: 200px; /* Fix the height of all images */
    object-fit: cover; /* Ensure the image covers the area without distorting */
    border-radius: 8px; /* Rounded corners for the image */
    box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1); /* Add shadow for a cleaner look */
}

/* Header and other text styling */
h3 {
    text-align: center;
    font-size: 2em;
    color: #333;
    margin-bottom: 30px;
}

    </style>
</head>

<body>
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
 

    <div class="container" style="margin-left: 0;">
        <div class="panel panel-default">
            <div class="panel-body">
                <strong>
                    <h3>Gallery</h3>
                </strong>
                <br />
                <!-- Gallery container using grid layout -->
                <div class="gallery-container">
                    <?php
                    // Fetch images from the database
                    $sql = "SELECT * FROM gallery_images";
                    $result = mysqli_query($conn, $sql);
                    
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            // Display each image in the gallery
                            echo '<div class="gallery-item">';
                            echo '<img src="' . $row['image_path'] . '" alt="' . $row['alt_text'] . '" />';
                            echo '</div>';
                        }
                    } else {
                        echo "No images found!";
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer start -->
    <?php require_once('Include/Footer.php'); ?>
    <!-- Footer end -->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
</body>

</html>
