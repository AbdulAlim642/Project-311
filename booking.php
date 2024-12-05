<?php
require 'connect.php';

// Fetch all bookings with their statuses
$stmt = $conn->prepare("SELECT t.transaction_id, g.firstname, g.lastname, r.room_type, t.status, t.bill 
                        FROM transaction t
                        INNER JOIN guest g ON t.guest_id = g.guest_id
                        INNER JOIN room r ON t.room_id = r.room_id");
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel - Bookings</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css " />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<style>
		.table th,
		.table td {
			text-align: center;
		}

		.btn-pending {
			background-color: orange;
			color: white;
			border: none;
		}

		.btn-pending:hover {
			background-color: #ff7f00;
		}

		.btn-success {
			background-color: green;
			color: white;
		}

		.btn-danger {
			background-color: red;
			color: white;
		}
	</style>

	<!--<style>
        /* Navbar Styles */
.navbar {
    background-color: #343a40; /* Dark background color */
}

.navbar a {
    color: #fff !important; /* White text for links */
    font-weight: bold; /* Bold text */
    padding: 10px 15px; /* Padding around the links */
    text-transform: uppercase; /* Uppercase text */
    font-size: 16px; /* Font size */
    transition: all 0.3s ease; /* Smooth transition for hover effects */
}

.navbar a:hover,
.navbar a.active {
    background-color: #007bff; /* Highlight active or hovered links */
    color: #fff !important; /* Ensure text stays white on hover */
    border-radius: 4px; /* Rounded corners */
}

.navbar-toggler-icon {
    background-color: #fff; /* White color for the toggle icon */
}

.navbar-nav {
    text-align: center; /* Center-align the navbar items */
}

.navbar-nav li {
    padding: 5px 15px;
}

/* Active menu item */
.navbar-nav .active {
    background-color: #007bff; /* Highlight active item */
    border-radius: 4px;
}

/* For small screens (Mobile) */
@media (max-width: 767px) {
    .navbar-nav {
        text-align: left; /* Align links to the left on smaller screens */
    }
}

    </style> -->
</head>

<body>
	<nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand">Dream Place Hotel</a>
			</div>
			<ul class="nav navbar-nav pull-right ">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
						aria-expanded="false"><i class="glyphicon glyphicon-user"></i> <?php echo $name; ?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<ul class="nav nav-pills">
			<li class="active"><a href="home.php">Home</a></li>
			<li><a href="account.php">Accounts</a></li>
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
		<h2 class="text-center">Manage Bookings</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>#</th>
					<th>Guest Name</th>
					<th>Room Type</th>
					<th>Bill Amount</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($booking = $result->fetch_assoc()): ?>
					<tr>
						<td><?php echo $booking['transaction_id']; ?></td>
						<td><?php echo $booking['firstname'] . ' ' . $booking['lastname']; ?></td>
						<td><?php echo $booking['room_type']; ?></td>
						<td>$<?php echo $booking['bill']; ?></td>
						<td>
							<?php echo $booking['status']; ?>
							<?php if ($booking['status'] == 'Pending'): ?>
								<button class="btn btn-pending" data-bs-toggle="modal" data-bs-target="#approveModal"
									data-id="<?php echo $booking['transaction_id']; ?>">Approve</button>
							<?php endif; ?>
						</td>
						<td>
							<a href="booking_edit.php?transaction_id=<?php echo $booking['transaction_id']; ?>"
								class="btn btn-success">Edit</a>
							<a href="booking_delete.php?transaction_id=<?php echo $booking['transaction_id']; ?>"
								class="btn btn-danger">Delete</a>
						</td>
					</tr>
				<?php endwhile; ?>
			</tbody>
		</table>
	</div>

	<!-- Modal to Approve Booking -->
	<div class="modal fade" id="approveModal" tabindex="-1" aria-labelledby="approveModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="approveModalLabel">Approve Booking</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					Are you sure you want to approve this booking?
				</div>
				<div class="modal-footer">
					<form action="approve_booking.php" method="POST">
						<input type="hidden" id="transaction_id" name="transaction_id">
						<button type="submit" class="btn btn-success">Approve</button>
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
					</form>
				</div>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
	<script>
		// Set the transaction ID in the modal form
		const approveButtons = document.querySelectorAll('.btn-pending');
		approveButtons.forEach(button => {
			button.addEventListener('click', (e) => {
				const transactionId = e.target.getAttribute('data-id');
				document.getElementById('transaction_id').value = transactionId;
			});
		});
	</script>
</body>

</html>