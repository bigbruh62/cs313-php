<!DOCTYPE html>
<? session_start(); ?>
<html>
<head>
	<title>Add Member</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href=".\style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
	<div class="row header">
		<div class="col-3"></div>
		<dir class="col-6">
			<h1>Add a family member</h1>
		</dir>
		<div class="col-3"></div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<dir class="col-6">
			<form class="panel bg-dark text-white" action="add.php" method="post">
				<div data-validate="First name is required!">
					<h2>First Name</h2>
					<input type="text" name="first" id="first">
				</div>
			</br>
				<div data-validate="Last name is required!">
					<h2>Last Name</h2>
					<input type="text" name="last" id="last">
				</div>
			</br>
				<div data-validate="Birthday is required!">
					<h2>Birthday</h2>
					<input type="text" name="date" id="date">
				</div>
			</br>
				<div>
					<input class="btn btn-success" type="submit" value="Add Member">
				</div>	
			</form>
		</dir>
		<div class="col-3"></div>
	</div>
</body>
</html>