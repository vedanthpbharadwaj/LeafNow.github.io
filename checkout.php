<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Checkout Page</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/style.css">

    </head>

    <body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
      <div class="preloader-inner">
        <span class="dot"></span>
        <div class="dots">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="home.php" class="logo"><em>Leaf Now</em></a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="home.php" class="active">Home</a></li>
                            <li><a href="sell.php">Sell</a></li>


                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="cactus.php">Cactus and Succulents</a>
                                    <a class="dropdown-item" href="bonsai.php">Bonsai</a>
                                    <a class="dropdown-item" href="flowers.php">Flowering plants and Seeds</a>

                                </div>
                            </li>
                            <li><a href="checkout.php">Checkout</a></li>
                            <li><a href="logout.php">Logout</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <section class="section section-bg" id="call-to-action" style="background-image: url(image/35.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em>Easy Checkout</em></h2>
                        <p>Find your total and checkout with ease.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<center>
    <section class="section">
        <div class="container">
            <br>
            <br>
                <div class="col-md-4">
                    <ul class="list-group list-group-no-border">
                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                            <div class="col-6">
                                <strong>Sub-total</strong>
                            </div>

                            <div class="col-6">
                                <h5 class="text-right">
                                  <?php
                                  session_start();
                                  echo "₹".$_SESSION['totalAmount'];
                                  ?>
                                </h5>
                            </div>
                         </div>
                      </li>

                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                            <div class="col-6">
                                <strong>Tax</strong>
                            </div>

                            <div class="col-6">
                                <h5 class="text-right">₹ 10.00</h5>
                            </div>
                         </div>
                      </li>


                      <li class="list-group-item" style="margin:0 0 -1px">
                         <div class="row">
                            <div class="col-6">
                                <h4><strong>Total</strong></h4>
                            </div>

                            <div class="col-6">
                                <h4 class="text-right">
                                  <?php
                                  echo "₹".($_SESSION['totalAmount']+10);
                                  $_SESSION['totalAmount'] += 10;
                                  ?>
                                </h4>
                            </div>
                         </div>
                      </li>

                    </ul>

                    <br>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-button">

                                <a href="payment.php?type=Buy">Buy</a>


                                <a href="gift.php">Gift</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</center>

    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        <u>Copyright ©2021 Leaf Now</u>

                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="js/scrollreveal.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imgfix.min.js"></script>
    <script src="js/mixitup.js"></script>
    <script src="js/accordions.js"></script>

    <!-- Global Init -->
    <script src="js/custom.js"></script>

  </body>
</html>
