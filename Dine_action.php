<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'hotel_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Add new image
if (isset($_POST['add'])) {
    $image = $_FILES['image']['name'];
    $target = "Images/images/dine/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $sql = "INSERT INTO dine_lounge (image_path) VALUES ('$target')";
        if ($conn->query($sql) === TRUE) {
            header("Location: dine.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}

// Delete image
if (isset($_POST['delete'])) {
    $id = $_POST['id'];

    // Get the image path before deleting
    $sql = "SELECT image_path FROM dine_lounge WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imagePath = $row['image_path'];

        // Delete the file from the server
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

    // Delete the image from the database
    $sql = "DELETE FROM dine_lounge WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location:dine.php");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>