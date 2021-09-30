<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Selling Page</title>
	<link href="css/gift.css" rel="stylesheet">
</head>
<body>
	<form method="post" action="#">
	<div class="form-box">
		<div class="header-text">
		  Sell
		</div>

		<input placeholder="Plant" type="text" name="example" list="PlantName">
		<datalist id="PlantName" name="plantname">
			<optgroup label="Cactus">
				<option value="Bunny Ear Cactus">Bunny Ear Cactus</option>
				<option value="Acanthocalycium Thionanthum">Acanthocalycium Thionanthum</option>
				<option value="Burro's Tail">Burro's Tail</option>
				<option value="Flaming Katy">Flaming Katy</option>
				<option value="Christmas Cactus">Christmas Cactus</option>
				<option value="Devil's Backbone">Devil's Backbone</option>
			</optgroup>
			<optgroup label="Bonsai">
				<option value="Black Olive Bonsai">Black Olive Bonsai</option>
				<option value="Juniper Bonsai">Juniper Bonsai</option>
				<option value="Banyan Ficus Bonsai">Banyan Ficus Bonsai</option>
				<option value="Cherry Bonsai">Cherry Bonsai</option>
				<option value="Bald Cypress Bonsai">Bald Cypress Bonsai</option>
				<option value="Maple Bonsai">Maple Bonsai</option>
			</optgroup>
			<optgroup label="Flowers">
				<option value="Bromeliad">Bromeliad</option>
				<option value="Kaffir Lily">Kaffir Lily</option>
				<option value="Gloxinia">Gloxinia</option>
				<option value="Cyclamen">Cyclamen</option>
				<option value="Crown of Thorns">Crown of Thorns</option>
				<option value="Lavendar">Lavendar</option>
			</optgroup>
			<optgroup label="Seeds">
				<option value="Bamboo">Bamboo</option>
				<option value="Jasmine">Jasmine</option>
				<option value="Gerbera Daisies">Gerbera Daisies</option>
				<option value="Organic Basil">Organic Basil</option>
				<option value="Petunia">Petunia</option>
				<option value="Bellis Monstrosa">Bellis Monstrosa</option>
			</optgroup>
	</datalist>
<!--    <input placeholder="Plant Name" type="text" name="plantname" id="plantname" required>  -->
    <input placeholder="Quantity" type="number" name="quantity" id="quantity" min ="1" max="10" required>
   <button type="submit" name="sell" onclick="alert('Successfully sold!')">Sell</button>
	</div>
</form>

<?php
if(isset($_POST['sell']))
{
$plantName = $_POST['example'];
$quantity = $_POST['quantity'];
$quantity = (int)$quantity;
//echo $quantity;
//echo gettype($quantity);
//echo $plantName;
//echo $quantity;
$con = mysqli_connect('127.0.0.1:3307', 'root');
mysqli_select_db ($con, 'leafnow_db');
$query = "select Plant_Id from plant where Name = '$plantName'";
$result=mysqli_query($con, $query);

$row = mysqli_fetch_array($result);
//print_r($row);
$plant_id = $row[0];
$plant_id = (int)$plant_id;
//echo $plant_id;
//echo gettype($quantity);
$query = "update plant set Quantity=Quantity+$quantity where Plant_Id = $plant_id";
mysqli_query($con, $query);
header("location: home.php");
}
 ?>
</body>
</html>
