<?php
require 'Include/connect.php';

// Retrieve transaction ID
$transaction_id = $_GET['transaction_id'] ?? null;

// Fetch transaction details
if ($transaction_id) {
    $stmt = $conn->prepare("SELECT t.*, g.firstname, g.lastname, r.room_type FROM transaction t 
                            INNER JOIN guest g ON t.guest_id = g.guest_id 
                            INNER JOIN room r ON t.room_id = r.room_id 
                            WHERE t.transaction_id = ?");
    $stmt->bind_param("i", $transaction_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $transaction = $result->fetch_assoc();

    if ($transaction) {
        ?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Payment</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        </head>

        <body class="bg-light">
            <div class="container my-5">
                <h2 class="text-center">Payment Details</h2>
                <div class="card p-4">
                    <h5>Guest Name: <?php echo $transaction['firstname'] . " " . $transaction['lastname']; ?></h5>
                    <p>Room Type: <?php echo $transaction['room_type']; ?></p>
                    <p>Bill Amount: <strong>$<?php echo $transaction['bill']; ?></strong></p>
                    <p>Status: <strong><?php echo $transaction['status']; ?></strong></p>

                    <?php if ($transaction['status'] !== 'Paid') { ?>
                        <a href="transaction.php?transaction_id=<?php echo $transaction_id; ?>" class="btn btn-success">Proceed to
                            Pay</a>
                    <?php } else { ?>
                        <p class="text-success">This transaction has already been paid.</p>
                        <a href="rooms.php" class="btn btn-primary">Return to Home</a>
                    <?php } ?>
                </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>

        </html>
        <?php
    } else {
        echo "<h3>Transaction not found.</h3>";
    }
} else {
    echo "<h3>Invalid transaction.</h3>";
}
?>