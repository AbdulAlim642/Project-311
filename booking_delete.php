<?php
require 'connect.php';

if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];

    // Delete the transaction
    $stmt = $conn->prepare("DELETE FROM transaction WHERE transaction_id = ?");
    $stmt->bind_param("i", $transaction_id);

    if ($stmt->execute()) {
        echo "<script>alert('Booking deleted successfully!'); window.location.href = 'booking.php';</script>";
    } else {
        echo "<script>alert('Error deleting booking.'); window.location.href = 'booking.php';</script>";
    }
}
?>