<?
	session_start();
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
	<script type="text/javascript">
		$(document).ready(function() {
			$('.product').click(function() {
				$.ajax({
					type:"POST",
					url:"some.php",
					data: {}
				}).done(function() {
					alert( "Item added to cart")
				});
			});
		});
	</script>
</head>

<body>
	<? include("shop_header.php"); ?>
	<div class="container">
		<div class="row">
			<div class="col" style="overflow: auto; max-height: 100vh;">
				<table>
					<tr>
						<td colspan="2" rowspan="2">
							<img src=".\image-not-found.png" height="126" width="126">
							</br>
							Product 1 Name
							<button id="product1" class="product" value="product1">
								Add to cart
							</button>
						</td>
						<td colspan="2" rowspan="2">
							<img src=".\image-not-found.png" height="126" width="126">
							</br>
							Product 2 Name
							<button id="product2" class="product" value="product1">
								Add to cart
							</button>
						</td>
						<td colspan="2" rowspan="2">
							<img src=".\image-not-found.png" height="126" width="126">
							</br>
							Product 3 Name
							<button id="product3" class="product" value="product1">
								Add to cart
							</button>
						</td>
					</tr>
					<tr>
						<td colspan="2" rowspan="2">
							<img src=".\image-not-found.png" height="126" width="126">
							</br>
							Product 4 Name
							<button id="product4" class="product" value="product1">
								Add to cart
							</button>
						</td>
						<td colspan="2" rowspan="2">
							<img src=".\image-not-found.png" height="126" width="126">
							</br>
							Product 5 Name
							<button id="product5" class="product" value="product1">
								Add to cart
							</button>
						</td>
						<td colspan="2" rowspan="2">
							<img src=".\image-not-found.png" height="126" width="126">
							</br>
							Product 6 Name
							<button id="product6" class="product" value="product1">
								Add to cart
							</button>
						</td>
					</tr>
				</table> 
			</div>
		</div>
		<div class="row">
			<button id="cart">
				Shopping Cart
			</button>
		</div>
	</div>

</body>
</html>