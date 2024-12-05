<?php
require 'Include/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $contactno = $_POST['contactno'];
    $room_id = $_POST['room_id'];
    $room_price = $_POST['room_price'];

    $checkin = date('Y-m-d');
    $checkout = date('Y-m-d', strtotime('+1 day'));

    $stmt = $conn->prepare("INSERT INTO guest (firstname, middlename, lastname, address, contactno) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $firstname, $middlename, $lastname, $address, $contactno);
    $stmt->execute();
    $guest_id = $stmt->insert_id;

    $days = 1;
    $bill = $room_price * $days;

    $stmt = $conn->prepare("INSERT INTO transaction (guest_id, room_id, room_no, status, days, checkin, checkout, bill) VALUES (?, ?, 'TBD', 'Reserved', ?, ?, ?, ?)");
    $stmt->bind_param("iiissd", $guest_id, $room_id, $days, $checkin, $checkout, $bill);
    $stmt->execute();

    header("Location: payment.php?transaction_id=" . $stmt->insert_id);
    exit;
}
?>