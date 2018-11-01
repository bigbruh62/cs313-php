<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href=".\style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">
	<?
		session_start();
		//printf('User:');
		//print_r($_SESSION['user']);
		//printf('Authorization:');
		//print_r($_SESSION['auth']);
		//printf('Family ID:');
		//print_r($_SESSION['family_id']);
		try
	    {
	      $dbUrl = getenv('DATABASE_URL');

	      $dbOpts = parse_url($dbUrl);

	      $dbHost = $dbOpts["host"];
	      $dbPort = $dbOpts["port"];
	      $dbUser = $dbOpts["user"];
	      $dbPassword = $dbOpts["pass"];
	      $dbName = ltrim($dbOpts["path"],'/');

	      $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

	      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    }
	    catch (PDOException $ex)
	    {
	      echo 'Error!: ' . $ex->getMessage();
	      die();
	    }
	?>

<div class="container">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<h1>
				<?
				if ($_SESSION['family_id'] == 'Palmer') {
					echo "Palmer Family";
				} else {
					echo "Jackson Family";
				};
				?>
			</h1>	
		</div>
		<div class="col-3"></div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<?php
				$stmnt = $db->prepare('SELECT * FROM family WHERE family_id = ?');
				$stmnt->execute([$_SESSION['family_id']]);
			?>

			<table class="table-bordered">
				<tr class="bg-dark text-light">
					<th>First Name</th>
					<th>Last Name</th>
					<th>Birthday</th>
				</tr>
			<? foreach ($stmnt as $row): ?>
				<tr class="bg-info">
					<td><? echo $row['first_name'] ?></td>
					<td><? echo $row['last_name'] ?></td>
					<td><? echo $row['birthday'] ?></td>
				</tr>
			<? endforeach; ?>	
			</table>
		</div>
		<div class="col-3"></div>
	</div>
	<div class="row">
		<div class="col-3"></div>
		<div class="col-6">
			<a href="addMember.php" class="btn btn-large btn-success" role="button">Add Family Member</a>
		</div>
		<div class="col-3"></div>
	</div>
</div>
</body>
</html>