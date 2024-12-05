<?php
// Database connection
$host = 'localhost';
$username = 'root'; // Use your database username
$password = ''; // Use your database password
$dbname = 'hotel_db';

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$messageSent = false; // Flag for message status

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Validate form inputs (basic example)
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($message)) {
        // SQL query to insert form data
        $sql = "INSERT INTO contact_form (name, phone, email, message) VALUES (?, ?, ?, ?)";

        // Prepare statement
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("ssss", $name, $phone, $email, $message);

            // Execute statement
            if ($stmt->execute()) {
                $messageSent = true; // Message successfully sent
            } else {
                $error = "Error: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        }
    } else {
        $error = "All fields are required.";
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Place Hotel - Contact Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-7VIVo5E1ZyWc+9OpX+ymboUeNLoNyH/+tyNHRtzf8z1SHfNJIMXx9RL0NMDyfbE2fRqjoPpY6q/MgtFruWGzg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php require('Include/links.php'); ?>
</head>

<body class="bg-light">
    <?php
    session_start(); // Ensure session is started at the top of the page
    ?>
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
 

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Contact Us</h2>
        <div class="h-line bg-dark" style="width: 100px; height: 2px; margin: 0 auto;"></div>
        <p class="text-center mt-3">
            We’d love to hear from you! Whether you have questions, special requests, or need assistance, our team is
            here to ensure your stay is perfect. Feel free to reach out anytime – we’re dedicated to making your stay as
            comfortable and enjoyable as possible!
        </p>
    </div>

    <div class="container">
        <div class="row">
            <!-- Column for Map -->
            <div class="col-md-6">
                <h2>Find Us</h2>
                <div class="map">
                    <iframe class="w-100 rounded" height="330"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24997.561363915174!2d91.99152343594234!3d21.43940711342013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc868716d4925%3A0xcd3ada60adda3a3b!2sCox&#39;s%20Bazar%20Beach!5e0!3m2!1sen!2sbd!4v1732112833884!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="contact-info">
                    <h3>Contact Information</h3>
                    <p><i class="fas fa-phone"></i> Phone: 017682299233</p>
                    <p><i class="fas fa-envelope"></i> Email: info.dreamplacehotel@gmail.com</p>
                    <p><i class="fas fa-map-marker-alt"></i> Address: Cox's Bazar, Bangladesh</p>
                    <p><i class="fab fa-facebook"></i> <a href="#">Facebook</a></p>
                    <p><i class="fab fa-twitter"></i> <a href="#">Twitter</a></p>
                    <p><i class="fab fa-instagram"></i> <a href="#">Instagram</a></p>
                </div>
            </div>

            <!-- Column for Contact Form -->
            <div class="col-md-6">
                <h2>Send us a message</h2>
                <?php if ($messageSent): ?>
                    <div class="alert alert-success">Your message has been sent successfully!</div>
                <?php elseif (isset($error)): ?>
                    <div class="alert alert-danger"><?php echo $error; ?></div>
                <?php endif; ?>
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Send</button>
                </form>
            </div>
        </div>
    </div>

    <?php require('Include/Footer.php'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>