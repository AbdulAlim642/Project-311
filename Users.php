<!DOCTYPE html>
<?php
require_once 'connect.php';
?>
<html lang="en">

<head>
    <title>Dream Place Hotel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css " />
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
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
        <li ><a href="home.php">Home</a></li>
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

    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="alert alert-info">Users</div>
                <a class="btn btn-success" href="Users_add.php"><i class="glyphicon glyphicon-plus"></i> Create New
                    Account</a>
                <br />
                <br />
                <table id="table" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Phone</th>
                            <th>Date of Birth</th>
                            <th>Profile Picture</th>
                            <th>Created Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Query to fetch all users
                        $query = $conn->query("SELECT * FROM `Users`") or die(mysqli_error($conn));
                        while ($fetch = $query->fetch_array()) {
                            ?>
                            <tr>
                                <td><?php echo $fetch['id']; ?></td>
                                <td><?php echo $fetch['name']; ?></td>
                                <td><?php echo $fetch['email']; ?></td>
                                <td>******</td> <!-- Password hidden for security reasons -->
                                <td><?php echo $fetch['phone']; ?></td>
                                <td><?php echo $fetch['dob']; ?></td>
                                <td><img src="<?php echo $fetch['profile_pic']; ?>" width="50" height="50" /></td>
                                <td><?php echo $fetch['created_at']; ?></td>
                                <td>
                                    <center>
                                        <!-- Edit Button -->
                                        <a class="btn btn-warning" href="Users_edit.php?id=<?php echo $fetch['id']; ?>">
                                            <i class="glyphicon glyphicon-edit"></i> Edit
                                        </a>
                                        <!-- Delete Button with JavaScript Confirmation -->
                                        <a class="btn btn-danger"
                                            onclick="return confirm('Are you sure you want to delete this user?');"
                                            href="Users_delete.php?id=<?php echo $fetch['id']; ?>">
                                            <i class="glyphicon glyphicon-remove"></i> Delete
                                        </a>
                                    </center>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <br /><br />

    <!-- JS Scripts -->
    <script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <script src="../js/dataTables.bootstrap.js"></script>
    <script type="text/javascript">
        // DataTable initialization
        $(document).ready(function () {
            $("#table").DataTable();
        });
    </script>

</body>

</html>