<?php
	session_start();

	$cartArray = array();

	if(!isset($_SESSION['cart'])){
		$_SESSION['cart'] = $cartArray;		
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

	<div>
		<button id="product1" class="product" value="product 1">Add Product 1 to Cart</button>
		<button id="product2" class="product" value="product 2">Add Product 2 to Cart</button>
		<button id="product3" class="product" value="product 3">Add Product 3 to Cart</button>
		<button id="product4" class="product" value="product 4">Add Product 4 to Cart</button>
	</div>
	<div>
		<button id="toCart">Shopping Cart</button>
		<button id="checkout">Checkout</button>
	</div>

</body>
</html>