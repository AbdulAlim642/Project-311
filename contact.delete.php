<?php
// Database connection
$host = 'localhost';
$username = 'root'; // Use your database username
$password = ''; // Use your database password
$dbname = 'hotel_db';

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the contact ID from the URL
$id = $_GET['id'];

// Delete the contact form entry
$sql = "DELETE FROM contact_form WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    header("Location: contact.php");
    exit;
} else {
    echo "Error: " . $stmt->error;
}

// Close connection
$conn->close();
?>
