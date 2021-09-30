<?php
session_start();
$Name = $_SESSION['name'];
if( isset($_SESSION['plant_id']))
{
  $plantid = $_SESSION['plant_id'];
}
else {
  $plantid = 125;
}

$totalamt = $_SESSION['totalAmount'];
$type = $_SESSION['type'];
$quant = $_SESSION['i1'];

date_default_timezone_set("Asia/Calcutta");
$date = date('Y-m-d H:i:s');
//$date = strtotime($date);
$con = mysqli_connect('127.0.0.1:3307', 'root');
mysqli_select_db ($con, 'leafnow_db');


  $query = "select Customer_Id from customer where Name = '$Name'";
  $result=mysqli_query($con, $query);
  $row = mysqli_fetch_array($result);
  $custid = $row[0];

  $stmt = $con->prepare("insert into transactions (Customer_Id, Plant_Id, Type, Total_Amount, Date_Time) values ('$custid', '$plantid', '$type', '$totalamt', '$date' )");
  $stmt->execute();
  $query = "update plant set Quantity=Quantity-$quant where Plant_Id = $plantid";
  mysqli_query($con, $query);
//$query = "insert into transactions (Customer_Id, Plant_Id, Type, Total_Amount, Date_Time) values ('$custid', '$plantid', '$type', '$totalamt', '$date' )";
//$result=mysqli_query($con, $query);
if($stmt){
  echo "Successful";
}else{
  echo "Fail";
}
$stmt->close();
// echo $custid;
// echo $plantid;
// echo $type;
// echo $totalamt;
// echo $date;
// echo "\n";
// echo gettype($custid);
// echo "\n";
// echo gettype($plantid);
// echo "\n";
// echo gettype($type);
// echo "\n";
// echo gettype($totalamt);
// echo "\n";
// echo gettype($date);
// echo "\n";
mysqli_close($con);
header("location: pdf.php");
/*date_default_timezone_set("Asia/Calcutta");
$date = date('Y/m/d H:i:s');
$d=strtotime("10:30pm April 15 2014");
echo "Created date is " . date("Y-m-d h:i:sa", $d);
*/
 ?>
