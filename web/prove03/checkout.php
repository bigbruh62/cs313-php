<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
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
		<h1>Please review your cart before checking out:</h1>
		<?php
		  echo '<ul>';
		  foreach ($_SESSION['cart'] as $item => $quantity) {
		    if ($quantity > 0) {
		      echo '<li class="item">' .
		           $item .
		           ': ' .
		           $quantity.
		           '</li > ';
		    }
		  }
		  echo '</ul > ';
		?>
		<form action='finalize_order.php' method='POST'>
		  Shipping Address:<br>
		  <label for="name">Name:</label>
		  <input type="text" name="name" maxlength="50"><br/>
		  <label for="add1">Address Line 1:</label>
		  <input type="text" name="add1"><br/>
		  <label for="add2">Address Line 2:</label>
		  <input type="text" name="add2"><br/>
		  <label for="add3">Address Line 3:</label>
		  <input type="text" name="add3"><br/>
		  <label for="city">City:</label>
		  <input type="text" name="city">
		  <label for="state">State:</label>
		  <input type="text" name="state">
		  <label for="zip">Zipcode:</label>
		  <input type="number" name="zip" maxlength="5"><br/>
		  <input type="submit" />
		</form>		
	</div>
</body>
</html>