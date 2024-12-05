<?php
// Database connection
require_once 'Include/connect.php';
session_start();
session_destroy();
// Redirect to the login page
header("Location: home.php");
exit();
?>