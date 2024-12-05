<?php
require 'Include/connect.php';

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Get the form data
    $transaction_id = $_POST['transaction_id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $bill = $_POST['bill'];
    $status = $_POST['status'];

    // Prepare the SQL query to update the booking information
    $stmt = $conn->prepare("UPDATE transaction t
                            INNER JOIN guest g ON t.guest_id = g.guest_id
                            SET g.firstname = ?, g.lastname = ?, g.email = ?, g.phone = ?, 
                                t.checkin = ?, t.checkout = ?, t.bill = ?, t.status = ?
                            WHERE t.transaction_id = ?");
    $stmt->bind_param("ssssssds", $firstname, $lastname, $email, $phone, $checkin, $checkout, $bill, $status, $transaction_id);

    // Execute and check if the update was successful
    if ($stmt->execute()) {
        echo "<script>alert('Booking updated successfully!'); window.location.href = 'booking.php';</script>";
    } else {
        echo "<script>alert('Error updating booking.'); window.location.href = 'booking.php';</script>";
    }
} else {
    echo "Invalid request.";
}
?>