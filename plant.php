<?php
session_start();

$_SESSION['i1'] = $_GET['i1'];
$quant = $_SESSION['i1'];
$_SESSION['NameofPlant'] = $_GET['NameofPlant'];
$_SESSION['totalAmount']= $_GET['totalAmount'];
$_SESSION['type'] = "Buy";

$plant1 = $_SESSION['NameofPlant'];

$con = mysqli_connect('127.0.0.1:3307', 'root');
mysqli_select_db ($con, 'leafnow_db');


  $query = "select Plant_Id from plant where Name = '$plant1'";
  $result=mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  $_SESSION['plant_id'] = (int)$row[0];

mysqli_close($con);
header("location: checkout.php");

 ?>
