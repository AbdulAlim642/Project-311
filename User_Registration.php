<?php
// Database connection
$host = 'localhost'; // Database host
$username = 'root'; // Database username
$password = ''; // Database password
$database = 'hotel_db'; // Database name

// Connect to MySQL
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if (isset($_POST['user_registration'])) {
    // Get form data
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $picture = $_POST['picture'];

    // SQL query to insert data
    $sql = "INSERT INTO users (id, name, email, phone, password, dob, address, picture, created_date) 
            VALUES ('$id', '$name', '$email', '$phone', '$password', '$dob', '$address', '$picture', NOW())";

    // Execute the query
    if (mysqli_query($conn, $sql)) {
        // JavaScript alert for successful registration and redirect
        echo "<script>
            alert('Registration successful!');
            setTimeout(function() {
                window.location.href = 'user_login.php';
            }, 2000); // 2-second delay before redirecting to login
        </script>";
    } else {
        // Display error message
        echo "Error: " . mysqli_error($conn);
    }

    // Close the connection
    mysqli_close($conn);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        h2 {
            margin-top: 20px;
        }

        .centered-image {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 400px;
            margin-bottom: 30px;
        }

        .centered-image img {
            width: 500px;
            height: auto;
        }

        p {
            font-size: 14px;
            margin-top: 10px;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-5">User Registration</h2>
        <div class="row d-flex justify-content-center">
            <!-- Image Section -->
            <div class="col-lg-6 col-xl-5">
                <img src="Images/Registation.jpg" alt="User Registration" class="img-fluid">
            </div>

            <!-- Form Section -->
            <div class="col-lg-6 col-xl-5">
                <div class="form-container">
                    <form action="" method="POST">
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
                            <input type="number" id="phone" name="phone" placeholder="Enter your phone number" required
                                class="form-control">
                        </div>

                        <!-- Picture Field -->
                        <div class="form-outline mb-4">
                            <label for="picture" class="form-label">Picture URL</label>
                            <input type="text" id="picture" name="picture" placeholder="Enter picture URL (optional)"
                                class="form-control">
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-block" name="user_registration"
                                value="Register">
                            <!-- Text and Link to Login Page -->
                            <p class="mt-3">
                                Already have an account?
                                <a href="user_login.php" class="text-primary">Login here</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>