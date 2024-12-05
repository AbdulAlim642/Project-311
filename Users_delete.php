<?php
require_once 'connect.php';

// Check if the user ID is provided in the URL
if (isset($_GET['id'])) {
	$id = $_GET['id'];

	// Perform the delete query
	if ($conn->query("DELETE FROM `Users` WHERE `id` = '$id'")) {
		echo "<script>alert('User deleted successfully'); window.location = 'Users.php';</script>";
	} else {
		echo "<script>alert('Error deleting user'); window.location = 'Users.php';</script>";
	}
}
?>