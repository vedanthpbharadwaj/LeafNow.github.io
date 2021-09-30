<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if ($_SESSION['status'] != "Active") {
    header("location: pdf.php");
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="css/pdf.css" />
    <script src="js/pdf.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>

</head>

<body>

    <?php


    $con = mysqli_connect('127.0.0.1:3307', 'root');
    mysqli_select_db ($con, 'leafnow_db');

    $name = $_SESSION["name"];
    $totalamt = $_SESSION['totalAmount'];
    date_default_timezone_set("Asia/Calcutta");
    $date = date('Y-m-d H:i:s');

    $Name = mysqli_real_escape_string($con, $name);
    $query = " SELECT Mail, Address from customer where Name='$Name' ";
    $res = mysqli_query($con, $query) or die('SQL Error: ' . mysqli_error($con));
    $row = mysqli_fetch_array($res);
    $mail = $row[0];
    $address = $row[1];



    ?>





    <div class="container d-flex justify-content-center mt-50 mb-50">
        <div class="row">
            <div class="col-md-12 mb-3">
                <button class="btn btn-primary" onclick="window.location.href = 'home.php';"> Back</button>
                <button class="btn btn-primary" id="download"> download pdf</button>
            </div>
            <div class="col-md-12">
                <div class="card" id="invoice">
                    <div class="card-header bg-transparent header-elements-inline">
                        <h6 class="card-title text-primary">Receipt</h6>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="mb-4 pull-left">

                                    <ul class="list list-unstyled mb-0 text-left">
                                        <li>Leaf Now</li>
                                        <li>Bengaluru</li>
                                        <li>+91 7894561230 </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="mb-4 ">
                                    <div class="text-sm-right">
                                        <h4 class="invoice-color mb-2 mt-md-2">Invoice #BBB1243</h4>
                                        <ul class="list list-unstyled mb-0">
                                            <li>Date: <span class="font-weight-semibold"><?php echo "$date" ?></span></li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-md-flex flex-md-wrap">
                            <div class="mb-4 mb-md-2 text-left"> <span class="text-muted">Invoice To:</span>
                                <ul class="list list-unstyled mb-0">
                                    <li>
                                        <h5> <input class="my-2" name="name" id="name" value="<?php echo "$Name"; ?>"></h5>
                                    </li>
                                    <li><span class="font-weight-semibold" name="add" id="add"><b>Address</b></span></li>
                                  <li><?php echo "$address"; ?></li>
                                    <li><a href="#" data-abc="true" name="mail" id="mail"><?php echo "$mail"; ?></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
  <!--                  <div class="table-responsive">
                        <table class="table table-lg">
                            <thead>
                                <tr>
                                    <th>Description</th>
                                    <th>Rate</th>
                                    <th>Qty</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Cactus and Succulents</h6>
                                    </td>
                                    <td>120</td>
                                    <td>8</td>
                                    <td><span class="font-weight-semibold">$960</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Bonsai</h6>
                                    </td>
                                    <td>$140</td>
                                    <td>10</td>
                                    <td><span class="font-weight-semibold">$1400</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h6 class="mb-0">Flowering Plants and Seeds</h6>
                                    </td>
                                    <td>$250</td>
                                    <td>2</td>
                                    <td><span class="font-weight-semibold">$500</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>  -->
                    <div class="card-body">
                        <div class="d-md-flex flex-md-wrap">
                            <div class="pt-2 mb-3 wmin-md-400 ml-auto">
                                <h6 class="mb-3 text-left">Total due</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                            <tr>

                                            <tr>
                                                <th class="text-left">Total:</th>
                                                <td class="text-right text-primary">
                                                    <h5 class="font-weight-semibold">₹ <?php echo "$totalamt"; ?></h5>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
