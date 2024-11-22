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
                <li class="nav-item"><a class="nav-link active" href="index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="Room.php">Rooms</a></li>
                <li class="nav-item"><a class="nav-link" href="Facilities.php">Facilities</a></li>
                <li class="nav-item"><a class="nav-link" href="ContactUs.php">Contact</a></li>
                <li class="nav-item"><a class="nav-link" href="About.php">About</a></li>
            </ul>
            <!--login and sing up bottom div-->
            <div class="d-flex">
                <button class="btn btn-primary shadow-none me-2" data-bs-toggle="modal"
                    data-bs-target="#loginSystemModal">Login</button>
                <button class="btn btn-primary shadow-none" data-bs-toggle="modal" data-bs-target="#signupModal">Sign
                    Up</button>
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
                            <input type="tel" class="form-control" id="userPhone" placeholder="Phone number" required>
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