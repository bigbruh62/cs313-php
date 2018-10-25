<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Add Member</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="row">
		<div class="col-3"></div>
		<dir class="col-6">
			<h1>Add a family member</h1>
		</dir>
		<div class="col-3"></div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<dir class="col-6">
			<form class="panel" action="add.php" method="post">
				<span>
					<h2>First Name</h2>
					</br>
					<input type="text" name="first">
				</span>
				<span>
					<h2>Last Name</h2>
					</br>
					<input type="text" name="last">
				</span>
				<span>
					<h2>Birthday</h2>
					</br>
					<input type="text" name="date">
				</span>	
			</form>
		</dir>
		<div class="col-3"></div>
	</div>
</body>
</html>