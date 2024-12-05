<?php require('Include/connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Place Hotel - Rooms</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #007bff;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .main-container {
            display: flex;
            flex-direction: column;
            height: 100vh;
        }

        .middle-section {
            flex: 1;
            display: flex;
            overflow: hidden;
            /* Prevents unwanted scrolling for other sections */
            padding: 20px;
        }

        .check-availability {
            flex: 35%;
            padding: 20px;
            background-color: #f0f0f0;
            border-radius: 8px;
            margin-right: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .room-cards {
            flex: 65%;
            overflow-y: auto;
            /* Enables scrolling for room cards */
            padding: 10px;
            max-height: 100%;
            /* Restricts height within viewport */
        }

        .room-card {
            display: flex;
            height: 200px;
            /* Fixed height for cards */
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            background: #fff;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .room-card:hover {
            transform: scale(1.02);
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.15);
        }

        .room-card-img {
            flex: 35%;
            overflow: hidden;
        }

        .room-card-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .room-card-body {
            flex: 65%;
            padding: 15px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .room-card-title {
            font-size: 1.3rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 10px;
        }

        .room-card-price {
            font-size: 1.1rem;
            color: #007bff;
            margin-bottom: 15px;
        }

        .btn-book-now {
            font-size: 0.9rem;
            padding: 8px 12px;
            align-self: start;
        }

        .footer {
            background-color: #007bff;
            color: white;
            text-align: center;
            padding: 15px 0;
        }
    </style>
</head>

<body>
    <!-- Header Section -->
    <header class="header">
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
    </header>

    <!-- Main Container -->
    <div class="main-container">
        <div class="middle-section">
            <!-- Check Availability Section -->
            <div class="check-availability">
                <h3>Check Availability</h3>
                <form method="GET" action="search_rooms.php">
                    <div class="mb-3">
                        <label for="checkin" class="form-label">Check-in Date</label>
                        <input type="date" class="form-control" id="checkin" name="checkin" required>
                    </div>
                    <div class="mb-3">
                        <label for="checkout" class="form-label">Check-out Date</label>
                        <input type="date" class="form-control" id="checkout" name="checkout" required>
                    </div>
                    <div class="mb-3">
                        <label for="guests" class="form-label">Guests</label>
                        <input type="number" class="form-control" id="guests" name="guests" min="1" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Search Rooms</button>
                </form>
            </div>

            <!-- Room Cards Section -->
            <div class="room-cards">
                <div class="row">
                    <?php
                    $result = $conn->query("SELECT * FROM room");
                    while ($room = $result->fetch_assoc()) {
                        echo "
                        <div class='col-12'>
                            <div class='room-card'>
                                <div class='room-card-img'>
                                    <img src='Images/photo/{$room['photo']}' alt='{$room['room_type']}'>
                                </div>
                                <div class='room-card-body'>
                                    <h5 class='room-card-title'>{$room['room_type']}</h5>
                                    <p class='room-card-price'>\${$room['price']}/night</p>
                                    <button class='btn btn-primary btn-book-now' 
                                            data-room-id='{$room['room_id']}' 
                                            data-room-price='{$room['price']}'>
                                        Book Now
                                    </button>
                                </div>
                            </div>
                        </div>";
                    }
                    ?>
                </div>
            </div>
        </div>

        <!-- Footer Section -->
        <footer class="footer">
            <p>&copy; 2024 Dream Place Hotel. All Rights Reserved.</p>
        </footer>
    </div>

    <!-- Booking Modal -->
    <div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form id="bookingForm" method="POST" action="book_room.php">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="bookingModalLabel">Book Room</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <input type="hidden" name="room_id" id="room_id">
                        <input type="hidden" name="room_price" id="room_price">
                        <div class="mb-3">
                            <label for="firstname" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="firstname" name="firstname" required>
                        </div>
                        <div class="mb-3">
                            <label for="middlename" class="form-label">Middle Name</label>
                            <input type="text" class="form-control" id="middlename" name="middlename">
                        </div>
                        <div class="mb-3">
                            <label for="lastname" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lastname" name="lastname" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="mb-3">
                            <label for="contactno" class="form-label">Contact Number</label>
                            <input type="text" class="form-control" id="contactno" name="contactno" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.querySelectorAll('.btn-book-now').forEach(button => {
            button.addEventListener('click', () => {
                const roomId = button.dataset.roomId;
                const roomPrice = button.dataset.roomPrice;

                document.getElementById('room_id').value = roomId;
                document.getElementById('room_price').value = roomPrice;

                const bookingModal = new bootstrap.Modal(document.getElementById('bookingModal'));
                bookingModal.show();
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>