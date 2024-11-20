<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dream Place Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            font-family: "Poppins", sans-serif;
        }

        .h-font {
            font-family: 'Cursive', cursive;
        }

        .custom-file-input::before {
            content: "Choose file";
            display: inline-block;
            background: #f8f9fa;
            border: 1px solid #ced4da;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 4px;
        }

        .custom-file-input {
            position: relative;
            overflow: hidden;
        }

        .custom-file-input input[type="file"] {
            position: absolute;
            left: 0;
            top: 0;
            opacity: 0;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="#">Dream Place Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Facilities</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                </ul>
                <!--login and sing up bottom div-->
                <div class="d-flex">
                    <button class="btn btn-primary shadow-none me-2" data-bs-toggle="modal"
                        data-bs-target="#loginSystemModal">Login</button>
                    <button class="btn btn-primary shadow-none" data-bs-toggle="modal"
                        data-bs-target="#signupModal">Sign Up</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End and start modal form -->

    <div class="modal fade" id="loginSystemModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">Login</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Password</label>
                            <input type="password" class="form-control" id="loginPassword" placeholder="Enter password"
                                required>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Login</button>
                            <a href="#" class="text-secondary">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Sign-Up Modal form -->
    <div class="modal fade" id="signupModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title">User Registration</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="userName" class="form-label">Name</label>
                                <input type="text" class="form-control" id="userName" placeholder="Full name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="userPhone" class="form-label">Phone</label>
                                <input type="tel" class="form-control" id="userPhone" placeholder="Phone number"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="userEmail" class="form-label">Email</label>
                                <input type="email" class="form-control" id="userEmail" placeholder="Email address"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="userPicture" class="form-label">Picture</label>
                                <div class="custom-file-input">
                                    <input type="file" id="userPicture" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="userDob" class="form-label">Date of Birth</label>
                                <input type="date" class="form-control" id="userDob" required>
                            </div>
                            <div class="col-md-6">
                                <label for="userPassword" class="form-label">Password</label>
                                <input type="password" class="form-control" id="userPassword" placeholder="Password"
                                    required>
                            </div>
                            <div class="col-md-6">
                                <label for="userConfirmPassword" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control" id="userConfirmPassword"
                                    placeholder="Confirm Password" required>
                            </div>
                        </div>
                        <div class="mt-3 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>
</body>

</html>