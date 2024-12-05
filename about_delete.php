<?php
$conn = new mysqli('localhost', 'root', '', 'hotel_db');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Determine which table to delete from
    if (isset($_GET['table']) && $_GET['table'] == 'team') {
        $conn->query("DELETE FROM team WHERE id=$id");
    } elseif (isset($_GET['table']) && $_GET['table'] == 'statistics') {
        $conn->query("DELETE FROM statistics WHERE id=$id");
    } else {
        $conn->query("DELETE FROM about_us WHERE id=$id");
    }

    header('Location: about.php');
}
