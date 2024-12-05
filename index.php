<!DOCTYPE html>
<?php require_once "connect.php"
?>
<html lang = "en">
	<head>
		<title>Admin Panel_DPH</title>
		<meta charset = "utf-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css " />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		
	</head>
<body>
	<nav style = "bg-light" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Admin Panel_DPH</a>
			</div>
		</div>
	</nav>
	<div class = "container">
		<br />
		<br />
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					<h5>Admin Panel</h5>
				</div>
				<div class = "panel-body">
					<form method = "POST">
						<div class = "form-group">
							<label>Username</label>
							<input type = "text" name = "username" class = "form-control" required = "required" />
						</div>
						<div class = "form-group">
							<label>Password</label>
							<input type = "password" name = "password" class = "form-control" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button name = "login" class = "form-control btn btn-primary"><i class = "glyphicon glyphicon-log-in"> Login</i></button>
						</div>
					</form>
					<?php require_once 'login.php'?>
				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>	
	<br />
	<br />
	
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>	
</html>