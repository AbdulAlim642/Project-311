<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Place Hotel-facilities</title>
    <?php require('Include/links.php'); ?>
    <style>
        .pop:hover{
            border-top-color:var(--teal) !important;
            transform: scale(1.03);
            transition: all 0.3s;
        }
    </style>

</head>

<body class="bg-light">
    <?php require('Include/Header.php'); ?>

   <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">Our Facilities</h2>
    <div class="h-line bg-dark" style="width: 100px; height: 2px; margin: 0 auto;"></div>
    <p class="text-center mt-3">
        Our hotel is designed to make your stay as comfortable and enjoyable as possible,
        offering a wide range of top-notch facilities. With a warm, welcoming atmosphere
        that feels just like home, we ensure your peace of mind with advanced security
        systems for your safety and convenience.
    </p>
</div>
 <!-- Our facilities-->
        <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font ">
            </h2>

        <div class="services-container pop">
            <div class="service-item pop">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 6c-1.1 0-1.99.89-1.99 1.99L17 9v10c0 1.1-.89 1.99-1.99 1.99H7c-1.1 0-1.99-.89-1.99-1.99V9c0-1.1-.89-1.99-1.99-1.99C3.89 7 3 7.89 3 9v10c0 2.21 1.79 4 3.99 4h12c2.21 0 3.99-1.79 3.99-4V9c0-1.1-.89-1.99-1.99-1.99zM12 2h-1V1h2v1h-1z">
                    </path>
                </svg>
                <h3>Room Service</h3>
                <p>Enjoy food delivered to your room anytime.</p>
            </div>
            <div class="service-item pop">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M20 18v-8h-6v8h-8v-8h-6v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm0-12h-16v6h16v-6z"></path>
                </svg>
                <h3>Free Wi-Fi</h3>
                <p>Stay connected with high-speed internet.</p>
            </div>
            <div class="service-item pop ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M3 4v16h18V4H3zm2 14V6h14v12H5z"></path>
                </svg>
                <h3>Swimming Pool</h3>
                <p>Relax and swim in our crystal-clear pool.</p>
            </div>
            <div class="service-item pop ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path d="M11 18h2v-8h-2zm0-10h2V3h-2zm1 12c-.55 0-1 .45-1 1s.45 1 1 1s1-.45 1-1s-.45-1-1-1z"></path>
                </svg>
                <h3>Gym</h3>
                <p>Keep fit with our fully equipped gym.</p>
            </div>
            <div class="service-item pop ">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z">
                    </path>
                </svg>
                <h3>Security</h3>
                <p>24/7 security for your safety and peace of mind.</p>
            </div>
            <div class="service-item pop">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path
                        d="M19 5H5c-1.1 0-1.99.89-1.99 1.99L3 19c0 1.1.89 1.99 1.99 1.99h14c1.1 0 1.99-.89 1.99-1.99V6c0-1.1-.89-1.99-1.99-1.99zM12 16H8v-2h4v2zm0-4H8v-2h4v2zm4 4h-2v-2h2v2zm0-4h-2v-2h2v2z">
                    </path>
                </svg>
                <h3>Housekeeping</h3>
                <p>Our team ensures your room stays clean and tidy.</p>
            </div>
        </div>
        <!-- Our facilities End -->

    <!-- Footer start -->
    <?php require('Include/Footer.php'); ?>
    <!-- Footer end -->
<!--our facility system-->>
        <style>
            body {
                font-family: Arial, sans-serif;
                background-color: #f4f4f4;
                margin: 0;
                padding: 0;
            }

            .services-container {
                display: flex;
                flex-wrap: wrap;
                justify-content: space-around;
                padding: 40px;
                gap: 20px;
            }

            .service-item {
                background-color: #fff;
                border: 1px solid #ddd;
                padding: 20px;
                border-radius: 8px;
                width: 200px;
                text-align: center;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .service-item svg {
                width: 50px;
                height: 50px;
                fill: #4CAF50;
                margin-bottom: 10px;
            }

            .service-item h3 {
                font-size: 18px;
                color: #333;
                margin: 0;
            }

            .service-item p {
                font-size: 14px;
                color: #777;
            }
        </style>
        <!--Facility end-->

</body>

</html>