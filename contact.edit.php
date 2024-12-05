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

// Get the contact ID from the URL
$id = $_GET['id'];

// Fetch the contact form details
$sql = "SELECT * FROM contact_form WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$contact = $result->fetch_assoc();

// Update contact form data
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Update query
    $sql = "UPDATE contact_form SET name = ?, phone = ?, email = ?, message = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssi", $name, $phone, $email, $message, $id);

    if ($stmt->execute()) {
        header("Location: contact.php");
        exit;
    } else {
        $error = "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Contact - Admin Panel</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-7VIVo5E1ZyWc+9OpX+ymboUeNLoNyH/+tyNHRtzf8z1SHfNJIMXx9RL0NMDyfbE2fRqjoPpY6q/MgtFruWGzg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        /* Global Styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    color: #333;
    padding: 50px;
}

h2 {
    text-align: center;
    margin-bottom: 30px;
    font-size: 28px;
    color: #333;
}

/* Container for Form */
form {
    background-color: #fff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 50%;
    margin: 0 auto;
    max-width: 600px;
}

.form-group {
    margin-bottom: 20px;
}

label {
    font-size: 16px;
    font-weight: bold;
    color: #555;
}

input[type="text"],
input[type="email"],
textarea {
    width: 100%;
    padding: 12px;
    border-radius: 4px;
    border: 1px solid #ddd;
    font-size: 16px;
    color: #333;
    background-color: #f9f9f9;
    transition: all 0.3s ease-in-out;
}

input[type="text"]:focus,
input[type="email"]:focus,
textarea:focus {
    border-color: #007bff;
    background-color: #fff;
    outline: none;
}

textarea {
    resize: vertical;
    min-height: 150px;
}

button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 12px 25px;
    font-size: 16px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%;
}

button[type="submit"]:hover {
    background-color: #0056b3;
}

.alert {
    background-color: #f8d7da;
    color: #721c24;
    padding: 15px;
    margin-bottom: 20px;
    border-radius: 5px;
    border: 1px solid #f5c6cb;
}

/* Responsive Styles */
@media (max-width: 768px) {
    form {
        width: 80%;
    }
}

@media (max-width: 480px) {
    form {
        width: 100%;
    }
}

    </style>
</head>

<body>
    <h2>Edit Contact Information</h2>

    <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?php echo $contact['name']; ?>"
                required>
        </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo $contact['phone']; ?>"
                required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $contact['email']; ?>"
                required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="4"
                required><?php echo $contact['message']; ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</body>

</html>