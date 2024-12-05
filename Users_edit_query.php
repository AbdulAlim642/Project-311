<?php
require_once 'connect.php';

if (isset($_POST['edit_account'])) {
	$id = $_GET['id'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$password = $_POST['password'];  // Ensure hashing if storing passwords
	$phone = $_POST['phone'];
	$dob = $_POST['dob'];
	$address = $_POST['address'];

	// Handle profile picture upload
	$profile_pic = $_POST['old_profile_pic'];  // Default to old picture
	if (isset($_FILES['profile_pic']) && $_FILES['profile_pic']['error'] == 0) {
		$target_dir = "uploads/";
		$profile_pic = $target_dir . basename($_FILES['profile_pic']['name']);
		if (!move_uploaded_file($_FILES['profile_pic']['tmp_name'], $profile_pic)) {
			echo "<center><label style='color:red;'>Failed to upload profile picture</label></center>";
			exit();
		}
	}

	// Hash the new password if provided
	if (!empty($password)) {
		$hashed_password = password_hash($password, PASSWORD_DEFAULT);
	} else {
		$hashed_password = $_POST['old_password']; // Keep the old password if not changing
	}

	// Update the user data in the database
	$query = "UPDATE `Users` SET 
                `name` = '$name', 
                `email` = '$email', 
                `password` = '$hashed_password', 
                `phone` = '$phone', 
                `dob` = '$dob', 
                `address` = '$address',
                `profile_pic` = '$profile_pic'
                WHERE `id` = '$id'";

	if ($conn->query($query)) {
		header("Location: Users.php");  // Redirect back to the users list after successful update
	} else {
		echo "Error updating user.";
	}
}
?>