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
                window.location.href = 'Users_add.php';
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