<?php
// Database connection
$conn = new mysqli('localhost', 'root', '', 'hotel_db');

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted for editing
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $image = $_FILES['image']['name'];
    $target = "Images/images/dine/" . basename($image);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        // Update the image in the database
        $sql = "UPDATE dine_lounge SET image_path='$target' WHERE id=$id";
        if ($conn->query($sql) === TRUE) {
            header("Location:dine.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Failed to upload image.";
    }
}

// Get image details to edit
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM dine_lounge WHERE id=$id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $currentImage = $row['image_path'];
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Edit Image</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        /* Center the form on the page */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 600;
            color: #333;
        }

        .form-group img {
            display: block;
            margin: 10px auto;
            border-radius: 5px;
            box-shadow: 0px 2px 8px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            display: block;
            width: 100%;
            font-weight: bold;
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Edit Image</h2>

        <form action="Dine_action.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="currentImage">Current Image:</label>
                <img src="<?php echo $currentImage; ?>" width="150" height="150" alt="Current Image">
            </div>
            <div class="form-group">
                <label for="newImage">Select New Image:</label>
                <input type="file" class="form-control" name="image" required>
            </div>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <button type="submit" name="update" class="btn btn-primary">Update Image</button>
        </form>

    </div>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>