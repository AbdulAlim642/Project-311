<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Place Hotel-Rooms</title>
    <?php require('Include/links.php'); ?>
    <style>
        .room-card {
            display: flex;
            align-items: flex-start;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s;
        }

        .room-card:hover {
            transform: scale(1.02);
        }

        .room-card img {
            width: 40%;
            object-fit: cover;
        }

        .room-card-body {
            padding: 16px;
            flex: 1;
        }

        .room-card-title {
            font-size: 20px;
            font-weight: bold;
        }

        .room-card-price {
            font-size: 18px;
            color: var(--teal);
        }

        .steps {
            margin-top: 15px;
        }

        .steps .step {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .steps .step .icon {
            width: 30px;
            height: 30px;
            background: var(--teal);
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 50%;
            margin-right: 10px;
            font-weight: bold;
        }

        .steps .step p {
            margin: 0;
            font-size: 14px;
        }
    </style>
</head>

<body class="bg-light">
    <?php require('Include/Header.php'); ?>

    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">Our Rooms</h2>
        <div class="h-line bg-dark" style="width: 100px; height: 2px; margin: 0 auto;"></div>
    </div>

    <div class="container">
        <div class="row">
            <!-- Left Side: Filters -->
            <div class="col-lg-3">
                <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                    <div class="container-fluid flex-lg-column align-items-stretch">
                        <h4 class="mt-2">Filters</h4>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#filters"
                            aria-controls="filters" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="filters">
                            <div class="border bg-light p-3 rounded mb-3">
                                <h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
                                <div class="mb-3">
                                    <label for="checkInDate" class="form-label"
                                        style="font-weight: 500;">Check-In</label>
                                    <input type="date" class="form-control shadow-none" id="checkInDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="checkOutDate" class="form-label"
                                        style="font-weight: 500;">Check-Out</label>
                                    <input type="date" class="form-control shadow-none" id="checkOutDate" required>
                                </div>
                                <div class="mb-3">
                                    <label for="roomCount" class="form-label" style="font-weight: 500;">Rooms</label>
                                    <select class="form-select shadow-none" id="roomCount" required>
                                        <option value="1">1 Room</option>
                                        <option value="2">2 Rooms</option>
                                        <option value="3">3 Rooms</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="guestCount" class="form-label" style="font-weight: 500;">Guests</label>
                                    <select class="form-select shadow-none" id="guestCount" required>
                                        <option value="1">1 Guest</option>
                                        <option value="2">2 Guests</option>
                                        <option value="3">3 Guests</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary w-100 shadow-none">Apply Filters</button>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <!-- Right Side: Room Cards -->
            <div class="col-lg-9">
                <div class="room-card">
                    <img src="https://via.placeholder.com/300x200" alt="Room Image">
                    <div class="room-card-body">
                        <h5 class="room-card-title">Deluxe Room</h5>
                        <p>Enjoy a luxurious stay with premium amenities and a stunning view.</p>
                        <p class="room-card-price">$120/night</p>
                        <button class="btn btn-primary shadow-none">Book Now</button>
                        <div class="steps">
                            <div class="step">
                                <div class="icon">1</div>
                                <p>Select check-in and check-out dates.</p>
                            </div>
                            <div class="step">
                                <div class="icon">2</div>
                                <p>Choose the number of rooms and guests.</p>
                            </div>
                            <div class="step">
                                <div class="icon">3</div>
                                <p>Click "Book Now" to reserve your stay.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-card">
                    <img src="https://via.placeholder.com/300x200" alt="Room Image">
                    <div class="room-card-body">
                        <h5 class="room-card-title">Suite</h5>
                        <p>Spacious suite with separate living area and top-notch facilities.</p>
                        <p class="room-card-price">$200/night</p>
                        <button class="btn btn-primary shadow-none">Book Now</button>
                        <div class="steps">
                            <div class="step">
                                <div class="icon">1</div>
                                <p>Select check-in and check-out dates.</p>
                            </div>
                            <div class="step">
                                <div class="icon">2</div>
                                <p>Choose the number of rooms and guests.</p>
                            </div>
                            <div class="step">
                                <div class="icon">3</div>
                                <p>Click "Book Now" to reserve your stay.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="room-card">
                    <img src="https://via.placeholder.com/300x200" alt="Room Image">
                    <div class="room-card-body">
                        <h5 class="room-card-title">Standard Room</h5>
                        <p>Cozy and comfortable, perfect for solo travelers or couples.</p>
                        <p class="room-card-price">$80/night</p>
                        <button class="btn btn-primary shadow-none">Book Now</button>
                        <div class="steps">
                            <div class="step">
                                <div class="icon">1</div>
                                <p>Select check-in and check-out dates.</p>
                            </div>
                            <div class="step">
                                <div class="icon">2</div>
                                <p>Choose the number of rooms and guests.</p>
                            </div>
                            <div class="step">
                                <div class="icon">3</div>
                                <p>Click "Book Now" to reserve your stay.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer start -->
    <?php require('Include/Footer.php'); ?>
    <!-- Footer end -->
</body>

</html>