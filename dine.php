<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dream Place Hotel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        /* General Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            color: #333;
        }

        .container {
            margin-top: 50px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 40px;
            font-weight: 600;
            color: #4a4a4a;
        }

        /* Form Styling */
        .form-section {
            border-right: 1px solid #e0e0e0;
            padding-right: 30px;
        }

        .form-group label {
            font-weight: bold;
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            width: 100%;
            font-weight: bold;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        /* Table Styling */
        .table-section {
            padding-left: 30px;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table th {
            background-color: #f8f9fa;
            color: #333;
            text-align: center;
            font-weight: bold;
        }

        table td {
            text-align: center;
            vertical-align: middle;
        }

        table img {
            max-width: 80px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        /* Button Styling */
        .btn-warning,
        .btn-danger {
            width: 80px;
            margin: 5px;
        }

        .actions {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .actions form {
            display: inline-block;
        }

        /* Footer Styling */
        .footer {
            text-align: center;
            margin-top: 50px;
            padding: 15px;
            background-color: #343a40;
            color: white;
            border-radius: 5px;
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

    <div class="container">
        <h2> Manage Dine & Lounge Items</h2>

        <div class="row">
            <!-- Left Column: Form for adding images -->
            <div class="col-md-4 form-section">
                <form action="Dine_action.php" method="POST" enctype="multipart/form-data">
                    <h4>Add New Image</h4>
                    <div class="form-group">
                        <label for="image">Select Image:</label>
                        <input type="file" name="image" id="image" class="form-control" required>
                    </div>
                    <button type="submit" name="add" class="btn btn-primary">Add Image</button>
                </form>
            </div>

            <!-- Right Column: Table for managing images -->
            <div class="col-md-8 table-section">
                <h4>Manage Existing Images</h4>
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // Database connection
                        $conn = new mysqli('localhost', 'root', '', 'hotel_db');

                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }

                        // Fetch images from the dine_lounge table
                        $sql = "SELECT * FROM dine_lounge";
                        $result = $conn->query($sql);

                        // Loop through each image and display in table
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>
                                    <td><img src='" . $row['image_path'] . "' class='img-fluid'></td>
                                    <td class='actions'>
                                        <form action='Dine_action.php' method='POST'>
                                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                                            <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
                                        </form>

                                        <form action='Dine_edit.php' method='GET'>
                                            <input type='hidden' name='id' value='" . $row['id'] . "'>
                                            <button type='submit' name='edit' class='btn btn-warning'>Edit</button>
                                        </form>
                                    </td>
                                  </tr>";
                            }
                        } else {
                            echo "<tr><td colspan='2'>No images found.</td></tr>";
                        }

                        $conn->close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>© 2024 Dream Place Hotel. All rights reserved.</p>
    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>