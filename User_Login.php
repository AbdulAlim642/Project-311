<?php
// Database connection
require'Include/connect.php';
session_start();

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['User_login'])) {
    $customer_email = $_POST['email'];
    $customer_password = $_POST['password'];

    if ($customer_email  == '' ||$customer_password  == '' ) {
        echo "<p style='color: red; text-align: center;'>Please fill all the fields.</p>";
    } else {
        //Verification
        $verify_match ="select * 
                        from users
                        where email='$customer_email' and password='$customer_password'";
        

        $check_match=mysqli_query($conn, $verify_match);


        if (mysqli_num_rows($check_match ) == 0) {
            echo "<p style='color: red; text-align: center;'>Incorrect values!</p>";
        }
         else {
            $row = mysqli_fetch_assoc($check_match); // Fetch the row from the result
            $customerID = $row['customerID'];       // Get the customerID from the row
            $_SESSION['customerID'] = $customerID;

            header('Location: index.php');
        }
     }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Login</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h2 class="text-center mb-5"> Login</h2>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-xl-5">
                <img src="Images/3094352.jpg" alt="Customer Registration" class="img-fluid">
            </div>
            <div class="col-lg-6 col-xl-5">
                <div class="form-container">
                    <form action="" method="POST">
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
                        <!-- Submit Button -->
                        <div class="text-center">
                            <input type="submit" class="btn btn-primary btn-block" name="User_login" value="Login">
                            <!-- Text and Link to Registration Page -->
                            <p class="mt-3">
                                Don't have an account?
                                <a href="User_Registration.php" class="text-primary">Register</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>