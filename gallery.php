<?php
$conn = new mysqli("localhost", "root", "", "hotel_db");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallery Admin Panel</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <style>
        /* Layout for the page: Left for the upload form, Right for the gallery */
        .content-wrapper {
            display: flex;
            justify-content: space-between;
            margin-top: 30px;
        }

        .form-container {
            width: 30%;
            /* Set left side to 30% */
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container input[type="file"] {
            margin-bottom: 10px;
        }

        .gallery-container {
            width: 70%;
            /* Set right side to 70% */
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
            justify-items: center;
        }

        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 8px;
        }

        .gallery-item img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        h3 {
            text-align: center;
            font-size: 2em;
            color: #333;
            margin-bottom: 30px;
        }

        .form-container h3 {
            font-size: 1.5em;
            margin-bottom: 20px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #0056b3;
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
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>Gallery Management</h3>
                <div class="content-wrapper">
                    <!-- Left side: Image upload form -->
                    <div class="form-container">
                        <h3>Upload New Image</h3>
                        <form action="gallery_action.php?action=upload" method="POST" enctype="multipart/form-data">
                            <label for="image">Choose Image:</label>
                            <input type="file" name="image" id="image" required>
                            <br>
                            <label for="alt_text">Alt Text:</label>
                            <input type="text" name="alt_text" id="alt_text" required>
                            <br><br>
                            <button type="submit" class="btn">Upload Image</button>
                        </form>
                    </div>

                    <!-- Right side: Display gallery images -->
                    <div class="gallery-container">
                        <?php
                        $sql = "SELECT * FROM gallery_images";
                        $result = mysqli_query($conn, $sql);

                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo '<div class="gallery-item">';
                                echo '<img src="' . $row['image_path'] . '" alt="' . $row['alt_text'] . '" />';
                                echo '<br><a href="gallery_edit.php?id=' . $row['id'] . '">Edit</a>';
                                echo ' | <a href="gallery_action.php?action=delete&id=' . $row['id'] . '" onclick="return confirm(\'Are you sure you want to delete?\')">Delete</a>';
                                echo '</div>';
                            }
                        } else {
                            echo "No images found!";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>