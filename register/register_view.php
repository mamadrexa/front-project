<!doctype html>
<html lang= "fa">
	<head>
		<title>editProfile</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/e36ff0bc6c.js" crossorigin="anonymous"></script>
		
		<link rel = "stylesheet" href = "style.css">
	</head>
	<body>
	
		
		<form action = "register_controller.php" method = "post">
			<h2>ثبت نام کاربر جدید</h2>
		<input type = "text" id="name" name = "name" placeholder ="نام کاربری">
		<br>
		<input type = "password" id="pass" name = "pass" placeholder ="رمز عبور">	
		<br>
		<input type = "email" id = "email" name = "email" placeholder = "ایمیل">
		<br>
		<button type = "submit" class = "btn btn-filled" name = "submit" onclick = "alert ('با موفقیت انجام شد ')">
				<span>
				ثبت نام
				</span>
				
			</button>
		</form> 
	</body>
</html>