<!DOCTYPE html>
<?php
require_once 'connect.php';
?>
<html lang="en">

<head>
    <title>Dream Place Hotel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css " />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <style>
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .form-container {
            margin-left: 20px;
            /* Add space between the image and the form */
        }

        img {
            max-width: 100%;
            /* Ensures the image is responsive */
            height: auto;
        }

        .col-lg-6 {
            width: 48%;
            /* Ensures the image and form share the screen evenly */
        }
    </style>
</head>

<body>
    <nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Dream Place Hotel</a>
            </div>
            <ul class="nav navbar-nav pull-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                        aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?php echo $name; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container-fluid">
        <ul class="nav nav-pills">
            <li><a href="home.php">Home</a></li>
            <li><a href="account.php">Accounts</a></li>
            <li><a href="Room_book.php">Room_book</a></li>
            <li><a href="room.php">Room</a></li>
            <li class="active"><a href="Users.php">Users</a></li>
        </ul>
    </div>

    <br />
    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="alert alert-info">Account / Create Account</div>
                <br />
                <!-- Content Wrapper to align Image and Form -->
                <div class="content-wrapper">
                    <!-- Image Section -->
                    <div class="col-lg-6 col-xl-5">
                        <img src="img/Registation.jpg" alt="User Registration" class="img-fluid">
                    </div>

                    <!-- Form Section -->
                    <div class="col-lg-6 col-xl-5 form-container">
                        <form action="User_add_query.php" method="POST" enctype="multipart/form-data">
                            <!-- ID Field -->
                            <div class="form-outline mb-4">
                                <label for="id" class="form-label">ID</label>
                                <input type="number" id="id" name="id" placeholder="Enter your ID" required
                                    class="form-control">
                            </div>

                            <!-- Name Field -->
                            <div class="form-outline mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" id="name" name="name" placeholder="Enter your name" required
                                    class="form-control">
                            </div>

                            <!-- Email Field -->
                            <div class="form-outline mb-4">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" id="email" name="email" placeholder="Enter your email" required
                                    class="form-control">
                            </div>

                            <!-- Password Field -->
                            <div class="form-outline mb-4">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" id="password" name="password" placeholder="Enter your password"
                                    required class="form-control">
                            </div>

                            <!-- Date of Birth Field -->
                            <div class="form-outline mb-4">
                                <label for="dob" class="form-label">Date of Birth</label>
                                <input type="date" id="dob" name="dob" required class="form-control">
                            </div>

                            <!-- Address Field -->
                            <div class="form-outline mb-4">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" id="address" name="address" placeholder="Enter your address" required
                                    class="form-control">
                            </div>

                            <!-- Phone Field -->
                            <div class="form-outline mb-4">
                                <label for="phone" class="form-label">Phone Number</label>
                                <input type="number" id="phone" name="phone" placeholder="Enter your phone number"
                                    required class="form-control">
                            </div>

                            <!-- Picture Field -->
                            <div class="form-outline mb-4">
                                <label for="profile_pic" class="form-label">Profile Picture</label>
                                <input type="file" id="profile_pic" name="profile_pic" class="form-control" />
                            </div>


                            <!-- Created Time -->
                            <div class="form-outline mb-4">
                                <label for="created_time" class="form-label">Created Time</label>
                                <input type="datetime-local" id="created_time" name="created_time" class="form-control">
                            </div>

                            <div class="form-group">
                                <button name="add_account" class="btn btn-info form-control" 
                                onclick="return confirm('Are you sure you want to add this account?')" href
                                ="<?php echo base_url('Users_add.php');>Save< button>

                            </div>
                        </form>
                    </div>
                </div>
                <!-- End of Content Wrapper -->
            </div>
        </div>
    </div>

    <br />
    <br />

</body>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>

</html>