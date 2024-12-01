<?php

// Check if the form has been submitted
if (isset($_POST['add_account'])) {
    // Fetch form data
    $name = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $created_at = $_POST['created_at'];

    // Handle file upload for profile picture
    $profile_pic = '';
    if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
        // Define the target directory and file path
        $target_dir = "uploads/";
        $profile_pic = $target_dir . basename($_FILES['profile_pic']['name']);
        // Move uploaded file to the target directory
        if (!move_uploaded_file($_FILES['profile_pic']['tmp_name'], $profile_pic)) {
            echo "<center><label style='color:red;'>Failed to upload profile picture</label></center>";
            exit();
        }
    }

    // Check for duplicate username using a prepared statement
    $stmt = $conn->prepare("SELECT * FROM `Users` WHERE `username` = ?");
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<center><label style='color:red;'>Username already taken</label></center>";
    } else {
        // Hash the password before inserting it into the database
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insert new account into the admin table
        $stmt = $conn->prepare("INSERT INTO `Users` (name, username, password, dob, profile_pic, created_at) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param('ssssss', $name, $username, $hashed_password, $dob, $profile_pic, $created_at);

        if ($stmt->execute()) {
            // Redirect to account page after successful insertion
            header("location: account.php");
            exit();
        } else {
            echo "<center><label style='color:red;'>Error occurred while creating the account</label></center>";
        }
    }

    // Close statement and connection
    $stmt->close();
}
?>