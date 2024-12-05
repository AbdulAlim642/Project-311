<?php
require 'connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $transaction_id = $_POST['transaction_id'];

    // Update the transaction status to 'Approved'
    $stmt = $conn->prepare("UPDATE transaction SET status = 'Approved' WHERE transaction_id = ?");
    $stmt->bind_param("i", $transaction_id);

    if ($stmt->execute()) {
        echo "<script>alert('Booking Approved!'); window.location.href = 'booking.php';</script>";
    } else {
        echo "<script>alert('Error approving booking.'); window.location.href = 'booking.php';</script>";
    }
}
?>