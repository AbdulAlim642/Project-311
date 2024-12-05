<?php
require 'connect.php';

if (isset($_GET['transaction_id'])) {
    $transaction_id = $_GET['transaction_id'];

    // Fetch booking details
    $stmt = $conn->prepare("SELECT * FROM transaction WHERE transaction_id = ?");
    $stmt->bind_param("i", $transaction_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $booking = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Booking</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Dream Place Hotel</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name; ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <ul class="nav nav-pills">
            <li><a href="home.php">Home</a></li>
            <li class="active"><a href="account.php">Accounts</a></li>
            <li><a href="booking.php">Booking</a></li>
            <li><a href="room.php">Room</a></li>
            <li><a href="Users.php">Users</a></li>
            <li><a href="dine.php">Dine and Lounge</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="contact.php">Contact us</a></li>
            <li><a href="about.php">About us</a></li>
    
        </ul>
    </div>
    <br />
    <div class="container my-5">
        <h2>Edit Booking</h2>
        <form method="POST" action="update_booking.php">
            <input type="hidden" name="transaction_id" value="<?php echo $booking['transaction_id']; ?>">
            <!-- Guest Information -->
            <div class="mb-3">
                <label for="firstname" class="form-label">First Name</label>
                <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $booking['firstname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $booking['lastname']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $booking['email']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $booking['phone']; ?>" required>
            </div>

            <!-- Room Information -->
            <div class="mb-3">
                <label for="room_type" class="form-label">Room Type</label>
                <input type="text" class="form-control" id="room_type" name="room_type" value="<?php echo $booking['room_type']; ?>" readonly>
            </div>

            <!-- Booking Dates -->
            <div class="mb-3">
                <label for="checkin" class="form-label">Check-in Date</label>
                <input type="date" class="form-control" id="checkin" name="checkin" value="<?php echo $booking['checkin']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="checkout" class="form-label">Check-out Date</label>
                <input type="date" class="form-control" id="checkout" name="checkout" value="<?php echo $booking['checkout']; ?>" required>
            </div>

            <!-- Payment Information -->
            <div class="mb-3">
                <label for="bill" class="form-label">Bill Amount</label>
                <input type="number" class="form-control" id="bill" name="bill" value="<?php echo $booking['bill']; ?>" required>
            </div>

            <!-- Booking Status -->
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" id="status" name="status">
                    <option value="Pending" <?php echo ($booking['status'] == 'Pending') ? 'selected' : ''; ?>>Pending</option>
                    <option value="Approved" <?php echo ($booking['status'] == 'Approved') ? 'selected' : ''; ?>>Approved</option>
                    <option value="Canceled" <?php echo ($booking['status'] == 'Canceled') ? 'selected' : ''; ?>>Canceled</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update Booking</button>
        </form>
    </div>
</body>

</html>