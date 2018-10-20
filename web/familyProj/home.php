<!DOCTYPE html>
<html>
<head>
	<title>head</title>
</head>
<body>
<h1>Home.php</h1>
<p>
	<?
		session_start();
		printf('User:');
		print_r($_SESSION['user']);
		printf('Authorization:');
		print_r($_SESSION['auth']);
		printf('Family ID:');
		print_r($_SESSION['family_id']);
	?>
</p>
</body>
</html>