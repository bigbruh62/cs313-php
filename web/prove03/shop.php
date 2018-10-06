<?php
	session_start();

	$cartArray = array();

	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = [
			'p1' => 0,
			'p2' => 0,
			'p3' => 0,
			'p4' => 0,
			'p5' => 0,
			'p6' => 0,
		];		
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tech Future Computer Shop</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
	<? include("shop_header.php"); ?>
	<? include("shopNavbar.php"); ?>
	<div class="container-fluid">
		<form action="add.php" method="POST">
			<input class="button" type="submit" title="Add product to cart" value="Add product to cart">
			<input type="hidden" name="item" value="p1">
		</form>
	</div>
	<div class="container-fluid">
		<form action="add.php" method="POST">
			<input class="button" type="submit" title="Add product to cart" value="Add product to cart">
			<input type="hidden" name="item" value="p2">
		</form>
	</div>
	<div class="container-fluid">
		<form action="add.php" method="POST">
			<input class="button" type="submit" title="Add product to cart" value="Add product to cart">
			<input type="hidden" name="item" value="p3">
		</form>
	</div>
	<div class="container-fluid">
		<form action="add.php" method="POST">
			<input class="button" type="submit" title="Add product to cart" value="Add product to cart">
			<input type="hidden" name="item" value="p4">
		</form>
	</div>
	<div class="container-fluid">
		<form action="add.php" method="POST">
			<input class="button" type="submit" title="Add product to cart" value="Add product to cart">
			<input type="hidden" name="item" value="p5">
		</form>
	</div>
	<div class="container-fluid">
		<form action="add.php" method="POST">
			<input class="button" type="submit" title="Add product to cart" value="Add product to cart">
			<input type="hidden" name="item" value="p6">
		</form>
	</div>
</body>
</html>