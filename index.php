<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Place Hotel</title>
    <?php require_once('Include/links.php'); ?>

    <style>
        .availability-form {
            margin-top: -50px;
            z-index: 2;
            position: relative;

        }

        @media screen and (max-width:575px) {
            .availability-form {
                margin-top: -50px;
                z-index: 2;
                position: relative;
            }


        }
    </style>
</head>

<body class bg-light>
    <?php require_once('Include/Header.php'); ?>
    <!-- Carousel Start -->
    <div class="container-fluid">
        <!-- Swiper -->
        <div class="swiper swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="Images/Caroseul/WhatsApp2.jpeg" alt="picture1">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Caroseul/WhatsApp1.jpeg" alt="picture2">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Caroseul/Whatapps3.jpeg" alt="picture3">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Caroseul/WhatsApp Image.4.jpeg" alt="picture4">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Caroseul/WhatsApp.5.jpeg" alt="picture5">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Caroseul/WhatsApp6.jpeg" alt="picture6">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Caroseul/WhatsApp7.jpeg" alt="picture7">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Caroseul/WhatsApp8.jpeg" alt="picture8">
                </div>
                <div class="swiper-slide">
                    <img src="Images/Caroseul/whatapp9.jpeg" alt="picture9">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- Swiper Styles -->
    <style>
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100vh;
            /* Full height */
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            background-position: center;
            background-size: cover;
            height: 100%;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Makes the image cover the entire slide */
        }

        /* Optional: Add custom arrow styles if needed */
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
        }

        .swiper-pagination-bullet {
            background-color: #fff;
            /* Optional: customize the pagination bullet color */
        }
    </style>

    <!-- Swiper JS Initialization -->
    <script>
        var swiper = new Swiper(".swiper-container", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            spaceBetween: 30, /* Adjust space between slides */
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            loop: true, /* Enables continuous sliding */
            pagination: {
                el: ".swiper-pagination",
                clickable: true, /* Makes pagination bullets clickable */
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 2500, /* Slide transition delay */
                disableOnInteraction: false, /* Keeps autoplay after interactions */
            },
        });
    </script>
    <!-- Carousel End -->

    <!-- Check availability -->
    <div class="container availability-form">
        <div class="row">
            <div class="col-lg-12 bg-white shadow p-4 rounded">
                <h5 class="text-center mb-4">Check Booking Availability</h5>
                <form>
                    <div class="row g-3 align-items-end"> <!-- Align all inputs to the bottom for consistency -->
                        <div class="col-lg-3">
                            <label for="checkInDate" class="form-label" style="font-weight:500;">Check-In</label>
                            <input type="date" class="form-control shadow-none" id="checkInDate" required>
                        </div>
                        <div class="col-lg-3">
                            <label for="checkOutDate" class="form-label" style="font-weight:500;">Check-Out</label>
                            <input type="date" class="form-control shadow-none" id="checkOutDate" required>
                        </div>
                        <div class="col-lg-2">
                            <label for="adults" class="form-label" style="font-weight:500;">Adults</label>
                            <select class="form-select shadow-none" id="adults" required>
                                <option value="" disabled selected>Select adults</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <label for="children" class="form-label" style="font-weight:500;">Children</label>
                            <select class="form-select shadow-none" id="children">
                                <option value="" disabled selected>Select children</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-lg-2">
                            <button type="submit" class="btn btn-primary shadow-none custom-bg w-100">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Check availability end -->

    <!-- Room Card System -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Rooms</h2>
    <div class="container">
        <div class="row g-4 justify-content-center">
            <!-- Room 1 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card shadow bg-white rounded" style="max-width: 300px; margin: auto;">
                    <img src="placeholder1.jpg" alt="Image of Double Room" class="card-img-top"
                        style="height: 180px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Double Room</h6>
                        <p class="card-text small">A comfortable room with modern amenities for two guests.</p>
                        <div class="mb-2">
                            <span class="badge bg-primary">Air Conditioning</span>
                            <span class="badge bg-success">Mini Fridge</span>
                            <span class="badge bg-info">High-Speed Wi-Fi</span>
                            <span class="badge bg-secondary">Room Service</span>
                        </div>
                        <!-- Rating -->
                        <div class="my-2">
                            <span class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i> 4.0/5
                            </span>
                        </div>
                        <p class="card-text fw-bold">Price: $150</p>
                        <button type="button" class="btn btn-primary btn-sm shadow-none custom-bg w-100">Book
                            Now</button>
                    </div>
                </div>
            </div>
            <!-- Room 2 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card shadow bg-white rounded" style="max-width: 300px; margin: auto;">
                    <img src="placeholder2.jpg" alt="Image of Deluxe Room" class="card-img-top"
                        style="height: 180px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Deluxe Room</h6>
                        <p class="card-text small">A spacious room with luxurious furnishings and additional
                            amenities.</p>
                        <div class="mb-2">
                            <span class="badge bg-primary">Air Conditioning</span>
                            <span class="badge bg-success">Mini Fridge</span>
                            <span class="badge bg-warning">Smart TV</span>
                            <span class="badge bg-danger">Coffee Maker</span>
                            <span class="badge bg-info">High-Speed Wi-Fi</span>
                        </div>
                        <!-- Rating -->
                        <div class="my-2">
                            <span class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star"></i>
                                <i class="bi bi-star"></i> 3.5/5
                            </span>
                        </div>
                        <p class="card-text fw-bold">Price: $200</p>
                        <button type="button" class="btn btn-primary btn-sm shadow-none custom-bg w-100">Book
                            Now</button>
                    </div>
                </div>
            </div>
            <!-- Room 3 -->
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="card shadow bg-white rounded" style="max-width: 300px; margin: auto;">
                    <img src="placeholder3.jpg" alt="Image of Family Suite" class="card-img-top"
                        style="height: 180px; object-fit: cover;">
                    <div class="card-body text-center">
                        <h6 class="card-title fw-bold">Family Suite</h6>
                        <p class="card-text small">Ideal for families, offering ample space and comfort.</p>
                        <div class="mb-2">
                            <span class="badge bg-primary">Air Conditioning</span>
                            <span class="badge bg-success">Refrigerator</span>
                            <span class="badge bg-dark">Kitchenette</span>
                            <span class="badge bg-warning">Smart TV</span>
                            <span class="badge bg-info">High-Speed Wi-Fi</span>
                            <span class="badge bg-secondary">Room Service</span>
                        </div>
                        <!-- Rating -->
                        <div class="my-2">
                            <span class="text-warning">
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i>
                                <i class="bi bi-star-fill"></i> 5.0/5
                            </span>
                        </div>
                        <p class="card-text fw-bold">Price: $300</p>
                        <button type="button" class="btn btn-primary btn-sm shadow-none custom-bg w-100">Book
                            Now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Room Card System End -->
    <!-- Our facilities-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our facilities and services</h2>

    <div class="services-container">
        <div class="service-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M19 6c-1.1 0-1.99.89-1.99 1.99L17 9v10c0 1.1-.89 1.99-1.99 1.99H7c-1.1 0-1.99-.89-1.99-1.99V9c0-1.1-.89-1.99-1.99-1.99C3.89 7 3 7.89 3 9v10c0 2.21 1.79 4 3.99 4h12c2.21 0 3.99-1.79 3.99-4V9c0-1.1-.89-1.99-1.99-1.99zM12 2h-1V1h2v1h-1z">
                </path>
            </svg>
            <h3>Room Service</h3>
            <p>Enjoy food delivered to your room anytime.</p>
        </div>
        <div class="service-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M20 18v-8h-6v8h-8v-8h-6v8c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2zm0-12h-16v6h16v-6z"></path>
            </svg>
            <h3>Free Wi-Fi</h3>
            <p>Stay connected with high-speed internet.</p>
        </div>
        <div class="service-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M3 4v16h18V4H3zm2 14V6h14v12H5z"></path>
            </svg>
            <h3>Swimming Pool</h3>
            <p>Relax and swim in our crystal-clear pool.</p>
        </div>
        <div class="service-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M11 18h2v-8h-2zm0-10h2V3h-2zm1 12c-.55 0-1 .45-1 1s.45 1 1 1s1-.45 1-1s-.45-1-1-1z"></path>
            </svg>
            <h3>Gym</h3>
            <p>Keep fit with our fully equipped gym.</p>
        </div>
        <div class="service-item">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path
                    d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8s8 3.59 8 8s-3.59 8-8 8zm-1-13h2v6h-2zm0 8h2v2h-2z">
                </path>
            </svg>
            <h3>Security</h3>
            <p>24/7 security for your safety and peace of mind.</p>
        </div>
        <div class="service-item">
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
    <!-- Testimonials -->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Our Customers Reviews</h2>

    <!-- Swiper Container -->
    <div class="swiper-container testimonial-container">
        <div class="swiper-wrapper">
            <!-- Testimonial 1 -->
            <div class="swiper-slide testimonial-item">
                <p>
                    "The hotel was very clean and the staff were very friendly. The breakfast was delicious and the
                    location was perfect for our needs."
                </p>
                <img src="https://picsum.photos/200/300" alt="Testimonial Image">
                <h3>John Doe</h3>
            </div>
            <!-- Testimonial 2 -->
            <div class="swiper-slide testimonial-item">
                <p>
                    "Our stay was wonderful! The amenities were top-notch, and we felt very comfortable. Highly
                    recommended!"
                </p>
                <img src="https://picsum.photos/200/300" alt="Testimonial Image">
                <h3>Jane Smith</h3>
            </div>
            <!-- Testimonial 3 -->
            <div class="swiper-slide testimonial-item">
                <p>
                    "Excellent experience! Friendly staff, great service, and a perfect location for exploring the
                    city. Will definitely come back!"
                </p>
                <img src="https://picsum.photos/200/300" alt="Testimonial Image">
                <h3>Michael Johnson</h3>
            </div>
            <!-- Add more testimonials as needed -->
        </div>

        <!-- Swiper Pagination (optional) -->
        <div class="swiper-pagination"></div>

        <!-- Swiper Navigation (optional) -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
    <!-- Testimonials End -->
    <!--Reach us-->
    <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">Find-Out us</h2>
    <div class="row">
        <div class="col-md-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
            <iframe class="w-100 rounded" height="330"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24997.561363915174!2d91.99152343594234!3d21.43940711342013!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adc868716d4925%3A0xcd3ada60adda3a3b!2sCox&#39;s%20Bazar%20Beach!5e0!3m2!1sen!2sbd!4v1732112833884!5m2!1sen!2sbd"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="col-md-4 col-md-4 ">
            <div class="bg-white p-4 rounded mb-4">
                <h5>Call us</h5>
                <a href="mob:013065373298" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-telephone me-2"></i> 013065373298
                </a>
                <h5>Mail us</h5>
                <a href="mailto:info.servicehotel@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
                    <i class="bi bi-envelope me-2"></i> info.servicehotel@gmail.com
                </a>
            </div>
            <!--social link-->>
            <div class="col-md-4 col-md-4 ">
                <div class="bg-white p-4 rounded mb-3">
                    <h5>Follow-us</h5>
                    <span> <a href="#" class="d-inline-block mb-4 ">
                            <i class="bi bi-facebook me-2"></i> Facebook
                        </a>
                    </span>
                    <span> <a href="#" class="d-inline-block mb-3 ">
                            <i class="bi bi-instagram me-2"></i> Instagram
                        </a>
                    </span>
                    <span>
                        <a href="#" class="d-inline-block mb-3 ">
                            <i class="bi bi-twitter me-2"></i> Twitter
                        </a>
                    </span>
                </div>
            </div>
        </div>

    </div>
    <!--social link-->
    </div>
    <!--reach us finish-->
    <!--footer start-->
    <?php require('Include/Footer.php'); ?>
    <!--footer end-->

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Include Swiper.js library -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Swiper Styles -->

    <style>
        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 100%;
            height: 100vh;
            /* Full height */
        }

        .swiper-slide {
            display: flex;
            justify-content: center;
            align-items: center;
            background-position: center;
            background-size: cover;
            height: 100;
        }

        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Makes the image cover the entire slide */
        }

        /* Optional: Add custom arrow styles if needed */
        .swiper-button-next,
        .swiper-button-prev {
            color: #fff;
        }

        .swiper-pagination-bullet {
            background-color: #fff;
            /* Optional: customize the pagination bullet color */
        }
    </style>

    <!-- Swiper JS Initialization -->
    <script>
        var swiper = new Swiper(".swiper-container", {
      effect: "coverflow",
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            spaceBetween: 30, /* Adjust space between slides */
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 200,
                modifier: 1,
                slideShadows: true,
            },
            loop: true, /* Enables continuous sliding */
            pagination: {
                el: ".swiper-pagination",
                clickable: true, /* Makes pagination bullets clickable */
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 2500, /* Slide transition delay */
                disableOnInteraction: false, /* Keeps autoplay after interactions */
            },
        });
    </script>
    <!-- Carousel End -->

    <!--badge edition-->
    <style>
        .badge {
            margin: 3px;
            font-size: 0.75rem;
        }

        .bi {
            font-size: 1.2rem;
        }

        .text-warning {
            font-size: 1rem;
        }
    </style>
    <!--fs-->
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
    <!--coustomer review-->
    <style>
        .testimonial-item {
            text-align: center;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .testimonial-item img {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            margin-top: 10px;
        }

        .testimonial-item h3 {
            margin-top: 15px;
            font-weight: bold;
        }

        .swiper-container {
            padding: 40px 0;
        }

        .swiper-pagination-bullet {
            background-color: #007bff;
        }
    </style>
    <!--coustomer review end-->
    <!--Testimonal java environment-->
    <script>
        // Initialize Swiper
        const swiper = new Swiper('.swiper-container', {
            slidesPerView: 1, // Show one testimonial at a time
            spaceBetween: 20, // Space between slides
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev'
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            loop: true, // Enable looping of slides
            autoplay: {
                delay: 5000, // Auto slide every 5 seconds
                disableOnInteraction: false, // Continue autoplay after interaction
            },
        });
    </script>
    <!--Testimonal java environment end-->



</body>

</html>