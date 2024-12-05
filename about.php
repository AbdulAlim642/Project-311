<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <style>
        .container {
            margin-top: 50px;
        }

        table {
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table th,
        table td {
            text-align: center;
            vertical-align: middle;
        }

        .action-btns a {
            margin-right: 10px;
        }

        h2 {
            margin-bottom: 20px;
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
    <li><a href="home.php">Home</a></li>
    <li><a href="account.php">Accounts</a></li>
    <li><a href="booking.php">Booking</a></li>
    <li><a href="room.php">Room</a></li>
    <li class="active"><a href="Users.php">Users</a></li>
    <li><a href="dine.php">Dine and Lounge</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li><a href="contact.php">Contact us</a></li>
    <li><a href="about.php">About us</a></li>

</div>
<br />
    
			
    <div class="container">
        <h2>About Us Information</h2>
        <?php
        $conn = new mysqli('localhost', 'root', '', 'hotel_db');
        $about_result = $conn->query("SELECT * FROM about_us");

        echo "<table class='table table-bordered'>";
        echo "<tr><th>ID</th><th>Title</th><th>Description</th><th>Actions</th></tr>";
        while ($about = $about_result->fetch_assoc()) {
            echo "<tr>
                <td>{$about['id']}</td>
                <td>{$about['title']}</td>
                <td>{$about['description']}</td>
                <td class='action-btns'>
                    <a href='about_edit.php?id={$about['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='about_delete.php?id={$about['id']}' class='btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>";
        }
        echo "</table>";

        echo "<h2>Team Information</h2>";
        $team_result = $conn->query("SELECT * FROM team");

        echo "<table class='table table-bordered'>";
        echo "<tr><th>ID</th><th>Name</th><th>Role</th><th>Image</th><th>Actions</th></tr>";
        while ($team = $team_result->fetch_assoc()) {
            echo "<tr>
                <td>{$team['id']}</td>
                <td>{$team['name']}</td>
                <td>{$team['role']}</td>
                <td><img src='{$team['image']}' alt='{$team['name']}' width='100'></td>
                <td class='action-btns'>
                    <a href='about_edit.php?id={$team['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='about_delete.php?id={$team['id']}' class='btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>";
        }
        echo "</table>";

        echo "<h2>Statistics Information</h2>";
        $stats_result = $conn->query("SELECT * FROM statistics");

        echo "<table class='table table-bordered'>";
        echo "<tr><th>ID</th><th>Name</th><th>Value</th><th>Actions</th></tr>";
        while ($stat = $stats_result->fetch_assoc()) {
            echo "<tr>
                <td>{$stat['id']}</td>
                <td>{$stat['name']}</td>
                <td>{$stat['value']}</td>
                <td class='action-btns'>
                    <a href='about_edit.php?id={$stat['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='about_delete.php?id={$stat['id']}' class='btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>";
        }
        echo "</table>";
        ?>
    </div>
</body>

</html>