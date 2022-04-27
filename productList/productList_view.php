<!doctype html>
<html lang = "fa">
	<head>
		<title>کاتالوگ</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="style.css">
		<style>
		</style>
	</head>
	<body class = "container">
        <h1><a href="../Home/home_controller.php"><i class = "fa fa-home"></i></a>
		کاتالوگ محصولات</h1>
		<div class= "grid-container">
		<?php
			foreach( $productList as $product ){
				include 'templates/productCard.php';
			}
		?>
		</div>
		<script src = "assets/components/js/components.js"></script>
	</body>
</html>