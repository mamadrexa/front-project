<?php
include '../phps/settings.php';
include '../phps/db.php';

	$uid = $_SESSION['uid'];
	$db = new db($dbhost, $dbuser, $dbpass, $dbname);

	$userlist = $db->query("SELECT * FROM users WHERE id = $uid ")->fetchArray();
	
?>
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
	
		
		<form action = "editprofile_controller?id=<?php echo $uid;?>" method = "post">
		<h2>
		<a href="../Home/home_controller.php"><i class = "fa fa-home"></i></a>
		ویرایش پروفایل</h2>
		<label for = "name">نام کاربری : </label>
		<br>
		<input type = "text" id="name" name = "name" value = <?php echo $userlist['name'];?> >

		<label for = "gender">جنسیت: </label>
		<input type = "radio" name = "gender" value = "male" checked id = "maleGender">
			<label for = "maleGender"> مرد </label>

		<input type = "radio" name = "gender" value = "female" id = "femaleGender">
			<label for = "femaleGender">زن </label>
		<br>
		<label for = "pass"> رمز  عبور جدید:</label>
		<br>
		<input type = "password" id="pass" name = "pass" placeholder = "a-z,1-9"value = <?php echo $userlist['pass'];?>>	
		<br>
		<label for = "email">ایمیل :</label>
		<br>
		<input type = "email" id = "email" name = "email" placeholder = "example@example.com" value = <?php echo $userlist['email'];?>>
		<br>
		<button type = "submit" class = "btn btn-filled" name = "submit" onclick = "alert ('با موفقیت انجام شد ')" >
				<span>
				ثبت تغییرات
				</span>
				
			</button>
		</form> 
	</body>
</html>