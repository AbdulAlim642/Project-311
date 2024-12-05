<?php
$conn = new mysqli('localhost', 'root', '', 'hotel_db');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Check if this is an about_us, team, or statistics update
    if (isset($_POST['update_about'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $conn->query("UPDATE about_us SET title='$title', description='$description' WHERE id=$id");
    } elseif (isset($_POST['update_team'])) {
        $name = $_POST['name'];
        $role = $_POST['role'];
        $conn->query("UPDATE team SET name='$name', role='$role' WHERE id=$id");
    } elseif (isset($_POST['update_stats'])) {
        $name = $_POST['name'];
        $value = $_POST['value'];
        $conn->query("UPDATE statistics SET name='$name', value='$value' WHERE id=$id");
    }

    // Fetch record
    $about = $conn->query("SELECT * FROM about_us WHERE id=$id")->fetch_assoc();
    $team = $conn->query("SELECT * FROM team WHERE id=$id")->fetch_assoc();
    $stat = $conn->query("SELECT * FROM statistics WHERE id=$id")->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Information</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit About Us</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="<?= $about['title']; ?>">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description"
                    rows="3"><?= $about['description']; ?></textarea>
            </div>
            <button type="submit" name="update_about" class="btn btn-primary">Update</button>
        </form>

        <h2 class="mt-5">Edit Team</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $team['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="role" class="form-label">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="<?= $team['role']; ?>">
            </div>
            <button type="submit" name="update_team" class="btn btn-primary">Update</button>
        </form>

        <h2 class="mt-5">Edit Statistics</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="<?= $stat['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="value" class="form-label">Value</label>
                <input type="number" class="form-control" id="value" name="value" value="<?= $stat['value']; ?>">
            </div>
            <button type="submit" name="update_stats" class="btn btn-primary">Update</button>
        </form>
    </div>
</body>

</html>