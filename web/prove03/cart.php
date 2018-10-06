<? session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cart</title>
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
	<div>
		<h1>Here's what's in your shopping cart:</h1>
		<?php
		  echo '<ul>';
		  foreach ($_SESSION['quantity'] as $item => $quantity) {
		    if ($quantity > 0) {
		      echo '<li class="item">' .
		           $item .
		           ': ' .
		           $quantity .
		           "<form action='remove.php' method='post'>
		              <input class='button' type='submit' title='Remove Item' value='Remove item from cart'>
		              <input type='hidden' name='item' value=". $item .'>
		            </form >
		            </li > ';
		    }
		  }
		  echo '</ul > ';
		?>
	</div>
</body>
</html>