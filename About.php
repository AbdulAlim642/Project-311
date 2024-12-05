
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Place Hotel - About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
     <link rel="stylesheet" href="css/footer.css">
     <style>
        /* Modal Centering */
.modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 100%;
    max-width: 400px;
    z-index: 1050;
    padding: 0;
    overflow: hidden;
    /* Prevents overflow for long forms */
}

.modal-dialog {
    margin: 0;
    width: 100%;
    max-width: 400px;
}

.modal-content {
    padding: 20px;
    border-radius: 10px;
    background-color: white;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

/* Modal Header Styling */
.modal-header {
    border-bottom: 1px solid #ddd;
    padding-bottom: 15px;
}

.modal-title {
    font-weight: bold;
    font-size: 1.25rem;
    color: #333;
}

/* Modal Form Body Styling */
.modal-body {
    padding: 20px;
}

.modal-body label {
    font-weight: 500;
    margin-bottom: 10px;
    color: #555;
    display: block;
}

/* Input fields styling */
.modal-body input,
.modal-body .custom-file-input {
    border: 1px solid #ddd;
    border-radius: 5px;
    padding: 10px;
    width: 100%;
    margin-bottom: 15px;
    box-sizing: border-box;
    font-size: 1rem;
}

.modal-body input:focus {
    outline: none;
    border-color: #1E90FF;
    box-shadow: 0 0 5px rgba(30, 144, 255, 0.5);
}

/* File input button */
.custom-file-input {
    position: relative;
    display: inline-block;
}

.custom-file-input::before {
    content: 'Choose a file';
    display: inline-block;
    background-color: #1E90FF;
    color: white;
    padding: 8px 16px;
    border-radius: 5px;
    cursor: pointer;
    margin-right: 10px;
    border: none;
}

.custom-file-input input[type="file"] {
    opacity: 0;
    position: absolute;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    cursor: pointer;
}

/* Modal Footer Styling */
.modal-footer {
    border-top: 1px solid #ddd;
    padding-top: 10px;
}

.modal-footer button {
    background-color: #1E90FF;
    border: none;
    padding: 10px 20px;
    color: white;
    border-radius: 5px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.modal-footer button:hover {
    background-color: #155a8a;
}

/* Button and Input Adjustments for Smaller Screens */
@media (max-width: 768px) {
    .modal {
        width: 90%;
        max-width: 90%;
    }

    .btn-primary,
    .modal-footer button {
        font-size: 0.875rem;
        padding: 8px 16px;
    }
}

/* Ensure sufficient z-index for modal and backdrop */
.modal-backdrop {
    z-index: 1040;
}
     </style>
  <style>
    /* Global Styles */
body {
    font-family: 'Poppins', Arial, sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    background-color: #f0f0f5;
    color: #333;
}

h2, h3 {
    font-family: 'Poppins', sans-serif;
    font-weight: bold;
}

.container {
    max-width: 1200px;
    margin: 20px auto;
    padding: 40px;
    background: #ffffff;
    border-radius: 15px;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.about-section {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 30px;
    margin-bottom: 40px;
}

.about-section img {
    width: 250px;
    height: 180px;
    border-radius: 12px;
    object-fit: cover;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
}

.about-details {
    flex: 1;
}

.about-details h2 {
    font-size: 28px;
    color: #2c3e50;
}

.about-details p {
    font-size: 18px;
    line-height: 1.6;
    color: #7f8c8d;
    margin-top: 15px;
}

.stats-section {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

.card {
    flex: 1;
    padding: 30px;
    background: #3498db;
    color: white;
    text-align: center;
    border-radius: 12px;
    box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
}

.card h3 {
    margin: 0;
    font-size: 22px;
}

.card p {
    margin: 10px 0 0;
    font-size: 28px;
    font-weight: bold;
}

.swiper-slide {
    display: flex;
    justify-content: center;
}

.card.col-10 {
    border: 1px solid #ddd;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 8px 12px rgba(0, 0, 0, 0.1);
    transition: box-shadow 0.3s;
}

.card.col-10:hover {
    box-shadow: 0 12px 18px rgba(0, 0, 0, 0.2);
}

.card img {
    width: 100%;
    height: 250px;
    object-fit: cover;
}

.card-body {
    padding: 20px;
}

.card-title {
    font-size: 20px;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
}

.card-text {
    font-size: 16px;
    color: #777;
}

.swiper-button-next, .swiper-button-prev {
    color: #333;
    font-weight: bold;
    opacity: 0.7;
    transition: opacity 0.3s;
}

.swiper-button-next:hover, .swiper-button-prev:hover {
    opacity: 1;
}

/* Footer Styling */
footer {
    background-color: #2c3e50;
    padding: 20px 0;
    text-align: center;
    color: white;
}

footer p {
    margin: 0;
    font-size: 14px;
}

  </style>
</head>

<body class="bg-light">
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
    <?php
    $host = 'localhost';
    $user = 'root';  // Replace with your database user
    $password = '';  // Replace with your database password
    $dbname = 'hotel_db';

    // Create connection
    $conn = new mysqli($host, $user, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>

    <!-- About Us Section -->
    <?php
    $result = $conn->query("SELECT * FROM about_us WHERE id = 1");
    $about = $result->fetch_assoc();
    ?>
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center"><?= $about['title']; ?></h2>
        <div class="h-line bg-dark" style="width: 100px; height: 2px; margin: 0 auto;"></div>
        <p class="text-center mt-3">
            <?= $about['description']; ?>
        </p>
    </div>

    <!-- Statistics Section -->
    <div class="container">
        <?php
        $stats_result = $conn->query("SELECT * FROM statistics");
        ?>
        <div class="stats-section">
            <?php while ($stat = $stats_result->fetch_assoc()) { ?>
                <div class="card">
                    <h3><?= $stat['name']; ?></h3>
                    <p><?= $stat['value']; ?></p>
                </div>
            <?php } ?>
        </div>
    </div>

    <!-- Our Family Helping Team Section -->
    <div class="container mt-5">
        <h2 class="fw-bold h-font text-center">Our Family Helping Team</h2>
        <div class="container px-4">
            <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <?php
                    $team_result = $conn->query("SELECT * FROM team");
                    while ($team_member = $team_result->fetch_assoc()) { ?>
                        <div class="swiper-slide">
                            <div class="card col-10 mx-auto">
                                <img src="<?= $team_member['image']; ?>" class="card-img-top" alt="Team Member Photo">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $team_member['name']; ?></h5>
                                    <p class="card-text"><?= $team_member['role']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <!-- Swiper navigation -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>

    <!-- Include Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.mySwiper', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1024: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
            }
        });
    </script>

    <!-- Footer -->
    <?php require('Include/Footer.php'); ?>
</body>

</html>