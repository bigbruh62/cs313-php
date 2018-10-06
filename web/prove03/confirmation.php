<!DOCTYPE html>
<html>
<head>
	<title>Confirmation</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>

<body>
	<h1>Order Confirmation</h1>
</br>
	<? include("shop_header.php"); ?>
	<h2>Shipping Information</h2>
	<?php
	  session_start();
	  echo $_SESSION['name']."<br>";
	  echo $_SESSION['add1']."<br>";
	  if ($_SESSION['add2'] !== "")
	    echo $_SESSION['add2']."<br>";
	  if ($_SESSION['add3'] !== "")
	    echo $_SESSION['add3']."<br>";
	  echo $_SESSION['city'].", ".$_SESSION['state'].' '.$_SESSION['zip'];
	?>
	<h2>Order Information</h2>
	<table>
	  <tr>
	    <td>Item</td>
	    <td>Quantity</td>
	  </tr>
	<?php
	  foreach ($_SESSION['order'] as $item => $quantity)
	    echo '<tr><td>'.$item.'</td><td>'.$quantity.'</td></tr>';
	?>
	</table>
	
	<h1>Thank you for shopping with us!</h1>
	<a href="http://<?php echo $_SERVER['HTTP_HOST']?>">Return to Shop</a>
	
	<?
	// remove all session variables
	session_unset(); 

	// destroy the session 
	session_destroy(); 
	?>

</body>
</html>