<!DOCTYPE html>
<html>
<head>
	<title>head</title>
</head>
<body>
	<?
		session_start();
		printf('User:');
		print_r($_SESSION['user']);
		printf('Authorization:');
		print_r($_SESSION['auth']);
		printf('Family ID:');
		print_r($_SESSION['family_id']);
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
<h1>Home.php</h1>
<div class="container">
	<div class="container">
		<?php
			$stmnt = $db->prepare('SELECT * FROM family WHERE family_id = ?');
			$stmnt->execute([$_SESSION['family_id']]);
		?>

		<table>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Birthday</th>
			</tr>
		<? foreach ($stmnt as $row): ?>
			<tr>
				<td><? echo $row['first_name'] ?></td>
				<td><? echo $row['last_name'] ?></td>
				<td><? echo $row['birthday'] ?></td>
			</tr>	
		</table>
		<? endforeach; ?>
	</div>
</div>
</body>
</html>