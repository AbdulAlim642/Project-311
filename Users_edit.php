<!DOCTYPE html>
<?php
require_once 'connect.php';
?>
<html lang="en">

<head>
    <title>Dream Place Hotel - Edit User</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>

<body>
    <nav style="background-color:rgba(0, 0, 0, 0.1);" class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand">Dream Place Hotel</a>
            </div>
            <ul class="nav navbar-nav pull-right">
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
            <li><a href="home.php">Home</a></li>
            <li><a href="account.php">Accounts</a></li>
            <li><a href="reserve.php">Reservation</a></li>
            <li><a href="room.php">Room</a></li>
            <li class = "active"><a href="Users.php">Users</a></li>
        </ul>
    </div>
    <br />

    <div class="container-fluid">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="alert alert-info">Account / Edit Account</div>
                <?php
                // Fetch user data for editing
                $query = $conn->query("SELECT * FROM `Users` WHERE `id` = '$_REQUEST[id]'") or die(mysqli_error());
                $fetch = $query->fetch_array();
                ?>
                <br />

                <!-- Table to display user information -->
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Date of Birth</th>
                                <th>Address</th>
                                <th>Profile Picture</th>
                                <th>Created Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $fetch['id']; ?></td>
                                <td><?php echo $fetch['name']; ?></td>
                                <td><?php echo $fetch['email']; ?></td>
                                <td><?php echo $fetch['phone']; ?></td>
                                <td><?php echo $fetch['dob']; ?></td>
                                <td><?php echo $fetch['address']; ?></td>
                                <td><img src="<?php echo $fetch['profile_pic']; ?>" width="50" height="50" /></td>
                                <td><?php echo $fetch['created_at']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Edit Form to update user information -->
                <div class="col-md-6">
                    <form method="POST" action="Users_edit_query.php?id=<?php echo $fetch['id']; ?>"
                        enctype="multipart/form-data">
                        <!-- Hidden ID Field -->
                        <input type="hidden" name="id" value="<?php echo $fetch['id']; ?>" />

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name"
                                value="<?php echo $fetch['name']; ?>" required maxlength="100" />
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="<?php echo $fetch['email']; ?>" required />
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" name="password"
                                value="<?php echo $fetch['password']; ?>" minlength="6" />
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone"
                                value="<?php echo $fetch['phone']; ?>" required maxlength="15"
                                pattern="^[0-9]{10,15}$" />
                        </div>

                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea class="form-control" id="address" name="address" rows="3"
                                required><?php echo $fetch['address']; ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="dob">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob"
                                value="<?php echo $fetch['dob']; ?>" required />
                        </div>

                        <div class="form-group">
                            <label for="profile_pic">Profile Picture</label>
                            <input type="file" class="form-control" id="profile_pic" name="profile_pic" />
                            <small>Leave empty if you don't want to change the picture.</small>
                        </div>

                        <div class="form-group">
                            <label for="created_at">Created Date</label>
                            <input type="text" class="form-control" id="created_at" name="created_at"
                                value="<?php echo $fetch['created_at']; ?>" disabled />
                        </div>

                        <br />
                        <div class="form-group">
                            <button name="edit_account" class="btn btn-warning form-control"><i
                                    class="glyphicon glyphicon-edit"></i> Save Changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
</body>

<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>

</html>