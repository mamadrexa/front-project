<!doctype html>
<html lang = "fa">
	<head>
		<title>inbox</title>
		<meta charset = "utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="style.css">
		<style>
		</style>
	</head>
	<body class = "container">
        <h1>
		<a href="../Home/home_controller.php"><i class = "fa fa-home"></i></a>
		پیام های دریافتی</h1>
		<div class= "">
			<table class = "datatable">
			<tr>
			<th>
				<input type='checkbox'>
			</th>
			<th>	
				شناسه پیام
			</th>
			<th>	
				نام فرستنده
			</th>
			<th>	
				ایمیل فرستنده 
			</th>
			<th>	
				عنوان 
			</th>
			<th>	
				متن پیام
			</th>
			</tr>
			<?php
			foreach( $productList as $product ){
				include 'templates/messageListTable.php';
			}
			?>
			</table>








		</div>
	</body>
</html>