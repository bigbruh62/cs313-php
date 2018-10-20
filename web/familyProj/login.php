<!DOCTYPE html>
<html>
<head>
	<title>
		Login
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="container">
		<div class="container">
			<div class="container">
				<form class="container" action="authenticate.php" method="post">
					<span class="container">
						Account Login
					</span>
					</br>
					<span class="container">
						Username
					</span>
					<div class="container" data-validate = "Username is required">
						<input type="text" name="username" id="username" placeholder="username">
						<span ></span>
					</div>
					
					<span class="container">
						Password
					</span>
					<div class="container" data-validate = "Password is required">
						<span ></span>
						<input type="password" name="password" id="password">
						<span class="glyphicon glyphicon-eye-open"></span>
					</div>

					<div class="container">
						<input type="submit" value="Login">
					</div>

				</form>
			</div>
		</div>
	</div>
</body>
</html>