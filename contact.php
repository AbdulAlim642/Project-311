<?php
// Database connection
$host = 'localhost';
$username = 'root'; // Use your database username
$password = ''; // Use your database password
$dbname = 'hotel_db';

$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get all contact submissions
$sql = "SELECT * FROM contact_form ORDER BY submission_date DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Contact Submissions</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-7VIVo5E1ZyWc+9OpX+ymboUeNLoNyH/+tyNHRtzf8z1SHfNJIMXx9RL0NMDyfbE2fRqjoPpY6q/MgtFruWGzg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
  <style>
    /* Reset default styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    color: #333;
    padding: 20px;
}

/* Heading Style */
h2.text-center {
    text-align: center;
    margin-bottom: 20px;
    font-size: 2rem;
    color: #4CAF50;
}

/* Table Styling */
table.table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
}

table.table th, table.table td {
    padding: 10px;
    text-align: left;
    border: 1px solid #ddd;
}

table.table th {
    background-color: #4CAF50;
    color: white;
}

table.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

table.table tr:hover {
    background-color: #ddd;
}

/* Button Styling */
.btn {
    text-decoration: none;
    padding: 8px 12px;
    border-radius: 5px;
    font-size: 0.9rem;
    display: inline-block;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-sm {
    font-size: 0.8rem;
}

.btn-warning {
    background-color: #ff9800;
    color: white;
}

.btn-warning:hover {
    background-color: #e68900;
}

.btn-danger {
    background-color: #f44336;
    color: white;
}

.btn-danger:hover {
    background-color: #e53935;
}

/* Responsive Styling */
@media (max-width: 768px) {
    h2.text-center {
        font-size: 1.5rem;
    }

    table.table th, table.table td {
        padding: 8px;
    }

    table.table {
        font-size: 0.9rem;
    }
}

  </style>
<style>
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

    </style>
</head>

<body>
    <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Dream Place Hotel</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i> <?php echo $name;?></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
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

    <h2 class="text-center">Admin Panel - Contact Submissions</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Message</th>
                <th>Submission Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['message']; ?></td>
                    <td><?php echo $row['submission_date']; ?></td>
                    <td>
                        <a href="contact.edit.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="contact.delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm"
                            onclick="return confirm('Are you sure you want to delete this entry?')">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <?php
    // Close connection
    $conn->close();
    ?>
</body>

</html>