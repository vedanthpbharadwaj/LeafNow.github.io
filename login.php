<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
	<link href="css/login.css" rel="stylesheet">
</head>
<body>
	<?php
//	session_start();
  // session_destroy();
	 ?>
	<form>
	<div class="form-box">
		<div class="header-text">
		  Sign In
		</div>
    <br>
    <input placeholder="Name" type="text" name="name" id="name" required>
    <input placeholder="E-Mail" type="email" name="email" id="email" required>
<br><br>
   <button type="button" onclick="document.location='home.php'">sign-in</button>
	</div>
</form>
</body>
</html>
