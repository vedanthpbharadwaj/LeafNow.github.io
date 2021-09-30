<?php

session_start();
$_SESSION['totalAmount'] = $_POST['donateamount'];
header("location: payment.php?type=Donate");

 ?>
