<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Bonsai Page</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">

    <link rel="stylesheet" href="css/style.css">



<style>
form {
  width: 150px;
  margin: 0 auto;
  text-align: center;

}

.value-button {
  display: inline-block;
  border: 1px solid #ddd;
  margin: 1px;
  width: 40px;
  height: 38px;
  text-align: center;
  vertical-align: middle;
  padding: 10px 0;
  background: #eee;
  -webkit-touch-callout: none;
  -webkit-user-select: none;
  -khtml-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

.value-button:hover {
  cursor: pointer;
}

form #decrease {
  margin-right: -4px;
  border-radius: 8px 0 0 8px;
}

form #increase {
  margin-left: -4px;
  border-radius: 0 8px 8px 0;
}

form #input-wrap {
  margin: 0px;
  padding: 0px;
}

input {
  text-align: center;
  border: none;
  border-top: 1px solid #ccc;
  border-bottom: 1px solid #ccc;
  color: #ed563b;
  margin: 0px;
  margin-top: 1px;
  width: 40px;
  height: 40px;
}

input[type=number]::-webkit-inner-spin-button,
input[type=number]::-webkit-outer-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

    </style>


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
                            <li><a href="home.php">Home</a></li>
                            <li><a href="sell.php">Sell</a></li>


                            <li class="dropdown">
                                <a class="dropdown-toggle active" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Products</a>

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

    <!-- ***** Call to Action Start ***** -->
    <section class="section section-bg" id="call-to-action" style="background-image: url(image/35.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="cta-content">
                        <br>
                        <br>
                        <h2><em>Bonsai</em></h2>
                        <p>Large bonsai collection for all hobbists.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container">
            <br>
            <br>

            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/16- black olive.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>600.00
                            </span>

                            <h4>Black Olive Bonsai</h4>

                            <p> The Black Olive is a delicate tree and almost grows into a bonsai by itself. It is very salt tolerant and is a good choice for bonsai lovers who live by the sea.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease1" onclick="decreaseValue(600, 1)" value="Decrease Value">-</button>
                                    <input type="number" id="number1" value="0" />
                                    <button type="button" class="value-button" id="increase1" onclick="increaseValue(600, 1)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/17- juniper.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>550.00
                            </span>

                            <h4>Juniper Bonsai</h4>

                            <p>Due to the flexibility of the branches and growing characteristic, the Juniper bonsai tree is very easy to train and shape. It is the most popular bonsai tree.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease2" onclick="decreaseValue(550, 2)" value="Decrease Value">-</button>
                                    <input type="number" id="number2" value="0" />
                                    <button type="button" class="value-button" id="increase2" onclick="increaseValue(550, 2)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/18- banyan ficus.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>800.00
                            </span>

                            <h4>Banyan Ficus Bonsai</h4>

                            <p>Also known as the common Fig and Chinese Banyan, this bonsai tree grows naturally in Southwest Asia.The “banyan” style roots are commonly trained in a root-over-rock style.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease3" onclick="decreaseValue(800, 3)" value="Decrease Value">-</button>
                                    <input type="number" id="number3" value="0" />
                                    <button type="button" class="value-button" id="increase3" onclick="increaseValue(800, 3)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/19- cherry blossom.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>1200.00
                            </span>

                            <h4>Cherry Bonsai</h4>

                            <p>Cherry blossom bonsai is the most inspiring for its beauty. It produces gorgeous blossoms in the early spring that fall to the ground and create a gorgeous backdrop of pink.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease4" onclick="decreaseValue(1200, 4)" value="Decrease Value">-</button>
                                    <input type="number" id="number4" value="0" />
                                    <button type="button" class="value-button" id="increase4" onclick="increaseValue(1200, 4)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/20- bald cypress.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>750.00
                            </span>

                            <h4>Bald Cypress Bonsai</h4>

                            <p>The Bald Cypress bonsai is one of the most illustrious bonsai specimens you can grow at home. It is a gorgeous plant with reddish-brown bark that is fibrous at first and later becomes furrowed and pale. </p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease5" onclick="decreaseValue(750, 5)" value="Decrease Value">-</button>
                                    <input type="number" id="number5" value="0" />
                                    <button type="button" class="value-button" id="increase5" onclick="increaseValue(750, 5)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/21- maple.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>950.00
                            </span>

                            <h4>Maple Bonsai</h4>

                            <p>It is typically grown outdoors. The leaves turn a reddish-brown at its prime and then grey during its fall.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease6" onclick="decreaseValue(950, 6)" value="Decrease Value">-</button>
                                    <input type="number" id="number6" value="0" />
                                    <button type="button" class="value-button" id="increase6" onclick="increaseValue(950, 6)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>

                            </ul>

                        </div>
                    </div>
                </div>
            </div>

            <br>


        </div>
    </section>
    <!-- ***** Fleet Ends ***** -->


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

    <script>

    var totalAmount = 0;
   // //var quantities = [0,0,0,0,0,0];
    var quantity = 0;
   var nameofplant="";
   console.log("Entered script section");

   function increaseValue(amount, number)
   { switch(number){

   case 1: var value = parseInt(document.getElementById('number1').value, 10);
   value = isNaN(value) ? 0 : value;
   value++;
   console.log("Case 1 "+value);
   // quantities[0]++;
   quantity++;
   document.getElementById("increase2").disabled = true;
   document.getElementById("decrease2").disabled = true;
   document.getElementById("increase3").disabled = true;
   document.getElementById("decrease3").disabled = true;
   document.getElementById("increase4").disabled = true;
   document.getElementById("decrease4").disabled = true;
   document.getElementById("increase5").disabled = true;
   document.getElementById("decrease5").disabled = true;
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById('number1').value= value;
   nameofplant = "Black Olive Bonsai";
   //quantity= quantities[0];
   totalAmount += amount;
   console.log("quantity = "+quantity+" nameofplant = "+nameofplant+" totalAmount = "+totalAmount);
   break;

   case 2: var value = parseInt(document.getElementById('number2').value, 10);
   value = isNaN(value) ? 0 : value;
   value++;
   //quantities[1]++;
   quantity++;
   document.getElementById("increase1").disabled = true;
   document.getElementById("decrease1").disabled = true;
   document.getElementById("increase3").disabled = true;
   document.getElementById("decrease3").disabled = true;
   document.getElementById("increase4").disabled = true;
   document.getElementById("decrease4").disabled = true;
   document.getElementById("increase5").disabled = true;
   document.getElementById("decrease5").disabled = true;
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById('number2').value = value;
   nameofplant = "Juniper Bonsai";
   //quantity= quantities[1];
   totalAmount += amount;
   break;

   case 3: var value = parseInt(document.getElementById('number3').value, 10);
   value = isNaN(value) ? 0 : value;
   value++;
   //quantities[2]++;
   quantity++;
   document.getElementById("increase1").disabled = true;
   document.getElementById("decrease1").disabled = true;
   document.getElementById("increase2").disabled = true;
   document.getElementById("decrease2").disabled = true;
   document.getElementById("increase4").disabled = true;
   document.getElementById("decrease4").disabled = true;
   document.getElementById("increase5").disabled = true;
   document.getElementById("decrease5").disabled = true;
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById('number3').value = value;
   nameofplant = "Banyan Ficus Bonsai";
   // quantity= quantities[2];
   totalAmount += amount;
   break;

   case 4: var value = parseInt(document.getElementById('number4').value, 10);
   value = isNaN(value) ? 0 : value;
   value++;
   // quantities[3]++;
   quantity++;
   document.getElementById("increase1").disabled = true;
   document.getElementById("decrease1").disabled = true;
   document.getElementById("increase2").disabled = true;
   document.getElementById("decrease2").disabled = true;
   document.getElementById("increase3").disabled = true;
   document.getElementById("decrease3").disabled = true;
   document.getElementById("increase5").disabled = true;
   document.getElementById("decrease5").disabled = true;
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById('number4').value = value;
   nameofplant="Cherry Bonsai";
   //quantity= quantities[3];
   totalAmount += amount;
   break;

   case 5: var value = parseInt(document.getElementById('number5').value, 10);
   value = isNaN(value) ? 0 : value;
   value++;
   // quantities[4]++;
   quantity++;
   document.getElementById("increase1").disabled = true;
   document.getElementById("decrease1").disabled = true;
   document.getElementById("increase2").disabled = true;
   document.getElementById("decrease2").disabled = true;
   document.getElementById("increase3").disabled = true;
   document.getElementById("decrease3").disabled = true;
   document.getElementById("increase4").disabled = true;
   document.getElementById("decrease4").disabled = true;
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById('number5').value = value;
   nameofplant="Bald Cypress Bonsai";
   // quantity= quantities[4];
   totalAmount += amount;
   break;

   case 6: var value = parseInt(document.getElementById('number6').value, 10);
   value = isNaN(value) ? 0 : value;
   value++;
   //quantities[5]++;
   quantity++;
   document.getElementById("increase1").disabled = true;
   document.getElementById("decrease1").disabled = true;
   document.getElementById("increase2").disabled = true;
   document.getElementById("decrease2").disabled = true;
   document.getElementById("increase3").disabled = true;
   document.getElementById("decrease3").disabled = true;
   document.getElementById("increase4").disabled = true;
   document.getElementById("decrease4").disabled = true;
   document.getElementById("increase5").disabled = true;
   document.getElementById("decrease5").disabled = true;
   document.getElementById('number6').value = value;
   nameofplant="Maple Bonsai";
   //quantity= quantities[5];
   totalAmount += amount;
   break;
   }
 }

   function activater()
   {
   document.getElementById("increase1").disabled = false;
   document.getElementById("decrease1").disabled = false;
   document.getElementById("increase2").disabled = false;
   document.getElementById("decrease2").disabled = false;
   document.getElementById("increase3").disabled = false;
   document.getElementById("decrease3").disabled = false;
   document.getElementById("increase4").disabled = false;
   document.getElementById("decrease4").disabled = false;
   document.getElementById("increase5").disabled = false;
   document.getElementById("decrease5").disabled = false;
   document.getElementById("increase6").disabled = false;
   document.getElementById("decrease6").disabled = false;
 }

   function decreaseValue(amount, number) {
   switch(number){
   case 1: var value = parseInt(document.getElementById('number1').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[0]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number1').value = value;
   break;

   case 2: var value = parseInt(document.getElementById('number2').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[1]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number2').value = value;
   break;

   case 3: var value = parseInt(document.getElementById('number3').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[2]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number3').value = value;
   break;

   case 4: var value = parseInt(document.getElementById('number4').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number4').value = value;
   break;

   case 5: var value = parseInt(document.getElementById('number5').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number5').value = value;
   break;

   case 6: var value = parseInt(document.getElementById('number6').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[5]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number6').value = value;
   break;
   }
   totalAmount -= amount;
   }


   function checkout()
   {

     window.location.href = "plant.php?i1="+quantity+"&totalAmount="+totalAmount+"&NameofPlant="+nameofplant;
   }


    </script>


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
