<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gifting Page</title>
	<link href="css/gift.css" rel="stylesheet">
</head>
<body>
	<form method="post">
	<div class="form-box">
		<div class="header-text">
		  Gift
		</div>
    <input placeholder="Name" type="text" name="name" id="name" required>
    <input placeholder="Phone" type="text" name="phone" id="phone" minlength="10" maxlength="10" required>
    <textarea id="address" name="address" placeholder="Address" rows="3" cols="20" required>
</textarea>
   <button type="button" onclick="document.location='payment.php?type=Gift'">Gift</button>
	</div>
</form>
</body>
</html>
