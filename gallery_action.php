<?php
$conn = new mysqli("localhost", "root", "", "hotel_db");

if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM gallery_images WHERE id = $id";

    if (mysqli_query($conn, $sql)) {
        header("Location: gallery.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}
?>
