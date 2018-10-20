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
		print_r($_SESSION['user']);
		print_r($_SESSION['auth']);
		print_r($_SESSION['family_id']);
	?>
</p>
</body>
</html>