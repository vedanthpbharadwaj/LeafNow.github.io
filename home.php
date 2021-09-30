<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Leaf Now - Home Page</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/donate.css">
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
                            <li><a href="#donate">Donate</a></li>

                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>

                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="cactus.php">Cactus and Succulents</a>
                                    <a class="dropdown-item" href="bonsai.php">Bonsai</a>
                                    <a class="dropdown-item" href="flowers.php">Flowering plants and Seeds</a>

                                </div>
                            </li>

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

    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <video autoplay muted loop id="bg-video">
            <source src="image/video2.mp4" type="video/mp4" />
        </video>

        <div class="video-overlay header-text">
            <div class="caption">
                <h6><em background-color="#ed563b"><?php session_start();
                                                    echo "Hello, " . $_SESSION['name'] ?></em></h6>
                <h6>For all the nature and plant enthusiasts</h6>
                <h2>Best <em>Plant store</em> in town</h2>
                <div class="main-button">
                    <a href="#contact">Contact us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Cars Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2><em> Our Plants</em></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/12.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>

                            </span>

                            <h4>Cactus and Succulents</h4>

                            <p>Browse through our large collection of cactus and succulents. It is a true delight for all cactus lovers.</p>

                            <ul class="social-icons">
                                <li><a href="cactus.php">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/16- black olive.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>

                            </span>

                            <h4>Bonsai</h4>

                            <p>Check out the wide variety of bonsai which purify the surrounding air and create a positive environment.</p>

                            <ul class="social-icons">
                                <li><a href="bonsai.php">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/23- jasmine.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>

                            </span>

                            <h4>Flowering Plants and Seeds</h4>

                            <p>Buy from our largest nursery which holds a collection of flowering plants as well seeds for your garden.</p>

                            <ul class="social-icons">
                                <li><a href="flowers.php">+ View More</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <br>
        </div>
    </section>
    <!-- ***** Cars Ends ***** -->

    <!-- Start of About Us and Donate -->
    <section class="section section-bg" id="schedule" style="background-image: url(image/7.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2><em>About Us</em></h2>
                        <p>Bringing together all plant and nature enthusiasts.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="cta-content text-center">
                        <p>Leaf Now hopes to bring all the nature lovers and help make connections in this new online era. A way for all to:<br>
                            1. Buy from our wide collection of plants and seeds.<br>
                            2. Donate money and contribute to our organisation which hopes to plant more greens.<br>
                            3. Sell existing plant.<br>
                            4. Gift a plant for an occassion and help someone start a new hobby.</p>
                    </div>
                </div>
            </div>
            <div class="row" id="donate">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading dark-bg">
                        <h2><em>Donate</em></h2>
                        <p>Every donation you make is valuable. Every ₹1.00 is counted toward a plant.</p>
                    </div>
                    <form method="post" action="donate.php">
                        <div class="form-box">
                            <input placeholder="Amount" type="text" name="donateamount" id="donateamount" required>
                            <button type="submit">Donate</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** End of About Us and Donate ***** -->


    <!-- ***** Testimonials Item Start ***** -->
    <section class="section" id="features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2><em>Read our Testimonials</em></h2>
                        <br>
                        <p style="color: white">See what other plant enthusiasts have to say about our collection as well as the service provided.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="image/features-first-icon.png" alt="First One">
                            </div>
                            <div class="right-content">
                                <h4>John Doe</h4>
                                <p style="color: white"><em>"The best online store for all your plant needs. Has a wide variety of plants and seeds collection to choose from. I'm a frequent customer."</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="image/features-first-icon.png" alt="second one">
                            </div>
                            <div class="right-content">
                                <h4>Susan Collins</h4>
                                <p style="color: white"><em>"Very much happy with with my buy everytime I shop here. I recently donated a plant to my gardening loving mother and she was extremely happy!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="image/features-first-icon.png" alt="fourth muscle">
                            </div>
                            <div class="right-content">
                                <h4>Anusha Gupta</h4>
                                <p style="color: white"><em>"I'm a plant and nature enthusiast, so this shop is a favourite of mine! Love the assistance they provide with the maintainace and growth of the plant!!"</em></p>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="image/features-first-icon.png" alt="training fifth">
                            </div>
                            <div class="right-content">
                                <h4>Peter Howards</h4>
                                <p style="color: white"><em>"Truly the best collection of bonsai they have. And I love Bonsai gardening as it's my hobby and helps me de-stress from my hectic life!"</em></p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <br>
        </div>
    </section>
    <!-- ***** Testimonials Item End ***** -->


    <!-- ***** Features Item Start ***** -->
    <section class="section" id="features">
        <div class="container" id="contact">
            <div class="row text-center">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>contact <em> info</em></h2>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-phone"></i>
                    </div>

                    <h5><a href="#">+91 7894561230</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-envelope"></i>
                    </div>

                    <h5><a href="#">contact@leafnow.com</a></h5>

                    <br>
                </div>

                <div class="col-md-4">
                    <div class="icon">
                        <i class="fa fa-map-marker"></i>
                    </div>

                    <h5>613 BSK, Bengaluru</h5>

                    <br>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Features Item End ***** -->



    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>
                        <u>Copyright ©2021 Leaf Now</u>
                        <u>Designed by Tejaswini Shailesh, Ananya B and Vedanth P Bharadwaj</u>
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