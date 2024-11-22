<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Place Hotel-About</title>
    <?php require('Include/links.php'); ?>


</head>

<body class="bg-light">
    <?php require('Include/Header.php'); ?>
   <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">About Us</h2>
    <div class="h-line bg-dark" style="width: 100px; height: 2px; margin: 0 auto;"></div>
    <p class="text-center mt-3">
        Our hotel is designed to make your stay as comfortable and enjoyable as possible,
        offering a wide range of top-notch facilities. With a warm, welcoming atmosphere
        that feels just like home, we ensure your peace of mind with advanced security
        systems for your safety and convenience.
    </p>
</div>

  <div class="container">
    <!-- About Section -->
    <div class="about-section">
        <img src="hotel-image.jpg" alt="Hotel Image">
        <div class="about-details">
            <h2>Dream Place Hotel </h2>
            <p>Welcome to Dream Place Hotel , where luxury meets comfort. Located in the heart of the city, our hotel offers top-notch amenities and exceptional services for a memorable stay.</p>
        </div>
    </div>
    <div class="about-section">
        <img src="hotel-image.jpg" alt="Hotel Image">
        <div class="about-details">
            <h2>Ownwer of the Dream Place Hotel </h2>
            <p>Welcome to Dream Place Hotel ,I am the Ownwer of this hotel.Any kind of issue please inform me as soon as possible.Here my email:ownerofdreamplacehotel@gmail.com</p>
        </div>
    </div>

    <!-- Statistics Section -->
    <div class="stats-section">
        <div class="card">
            <h3>Total Rooms</h3>
            <p>120</p>
        </div>
        <div class="card">
            <h3>Total Customers</h3>
            <p>4500+</p>
        </div>
        <div class="card">
            <h3>Total Reviews</h3>
            <p>800+</p>
        </div>
        <div class="card">
            <h3>Total Staff</h3>
            <p>85+</p>
        </div>
    </div>
</div>
<
<div class="container mt-5">
h2 class="fw-bold h-font text-center">Our family Helping Team</h2>
<div class="container px-4">
    <!--Swiper slide korte hobe-->
    

</div>


</div>



    <!-- Footer start -->
    <?php require('Include/Footer.php'); ?>
    <!-- Footer end -->
      <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .about-section, .stats-section {
            margin-bottom: 20px;
        }
        .about-section {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        .about-section img {
            width: 200px;
            height: 150px;
            border-radius: 10px;
            object-fit: cover;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .about-details {
            flex: 1;
        }
        .about-details h2 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
        .about-details p {
            margin: 10px 0;
            font-size: 16px;
            color: #555;
        }
        .stats-section {
            display: flex;
            justify-content: space-between;
            gap: 20px;
        }
        .card {
            flex: 1;
            padding: 20px;
            background: #007bff;
            color: white;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin: 0;
            font-size: 20px;
        }
        .card p {
            margin: 5px 0 0;
            font-size: 24px;
            font-weight: bold;
        }
    </style>


</body>

</html>