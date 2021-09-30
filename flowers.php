<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Flowers and Seeds Page</title>

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
                                    <a class="dropdown-item" href="#Flowers">Flowering plants</a>
                                    <a class="dropdown-item" href="#Seeds">Seeds</a>
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
                        <h2><em>Flowering Plants and Seeds</em></h2>
                        <p>Decorate your home and re-design your graden.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Call to Action End ***** -->

    <!-- ***** Fleet Starts ***** -->
    <section class="section" id="trainers">
        <div class="container" id="Flowers">
            <div class="section-heading" >
                <h2><em>Flowering Plants</em></h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/22- bromeliad.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>200.00
                            </span>

                            <h4>Bromeliad</h4>

                            <p>Bromeliads are plants that are adapted to various climates. The foliage, which usually grows in a rosette, is widely patterned and colored. </p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease1" onclick="decreaseValue(200, 1)" value="Decrease Value">-</button>
                                    <input type="number" id="number1" value="0" />
                                    <button type="button" class="value-button" id="increase1" onclick="increaseValue(200, 1)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/24- kaffir lily.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>200.00
                            </span>

                            <h4>Kaffir Lily</h4>

                            <p>Kaffir Lily is an undemanding and easy-to-grow bulb. It makes a wonderful border plant and is also useful as a container specimen on a shaded patio.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease2" onclick="decreaseValue(200, 2)" value="Decrease Value">-</button>
                                    <input type="number" id="number2" value="0" />
                                    <button type="button" class="value-button" id="increase2" onclick="increaseValue(200, 2)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/25- gloxinia.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>250.00
                            </span>

                            <h4>Gloxinia</h4>

                            <p>The plant is a herb with large nodding, purple, mint-scented flowers. It is sometimes known as "Canterbury bells".</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease3" onclick="decreaseValue(250, 3)" value="Decrease Value">-</button>
                                    <input type="number" id="number3" value="0" />
                                    <button type="button" class="value-button" id="increase3" onclick="increaseValue(250, 3)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/26- cyclamen.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>150.00
                            </span>

                            <h4>Cyclamen</h4>

                            <p>This species is very popular with florists, and it is frequently called the "Florist's Cyclamen." They typically bloom from early winter to spring and are dormant during the summer. </p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease4" onclick="decreaseValue(150, 4)" value="Decrease Value">-</button>
                                    <input type="number" id="number4" value="0" />
                                    <button type="button" class="value-button" id="increase4" onclick="increaseValue(150, 4)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/27- crown of thorns.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>150.00
                            </span>

                            <h4>Crown of Thorns</h4>

                            <p>Crown of thorns is popular as a houseplant and is grown in warm climates as a garden shrub. Flowering is year-round but most plentiful in wintertime .</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease5" onclick="decreaseValue(150, 5)" value="Decrease Value">-</button>
                                    <input type="number" id="number5" value="0" />
                                    <button type="button" class="value-button" id="increase5" onclick="increaseValue(150, 5)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/30- lavendar.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>250.00
                            </span>

                            <h4>Lavendar</h4>

                            <p>One of the most attractive plants. The flowers are borne in whorls, held on spikes rising above the foliage, the spikes being branched in some species.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease6" onclick="decreaseValue(250, 6)" value="Decrease Value">-</button>
                                    <input type="number" id="number6" value="0" />
                                    <button type="button" class="value-button" id="increase6" onclick="increaseValue(250, 6)" value="Increase Value">+</button>
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

     <!-- ***** Fleet Starts ***** -->
     <section class="section" id="trainers">
        <div class="container" id="Seeds">
            <div class="section-heading">
                <h2><em>Seeds</em></h2>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/28- bamboo.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>20.00
                            </span>

                            <h4>Bamboo</h4>

                            <p>Fastest growing plants. They are easy to maintain and are considered us bringing one luck. Mainly used for gifting purposes.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease7" onclick="decreaseValue(20, 7)" value="Decrease Value">-</button>
                                    <input type="number" id="number7" value="0" />
                                    <button type="button" class="value-button" id="increase7" onclick="increaseValue(20, 7)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
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
                                <del><sup></sup></del> <sup>₹</sup>20.00
                            </span>

                            <h4>Jasmine</h4>

                            <p>The most common and popular household flowering plant. Has a sweet scent and comes in colours of white and yellow.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease8" onclick="decreaseValue(20, 8)" value="Decrease Value">-</button>
                                    <input type="number" id="number8" value="0" />
                                    <button type="button" class="value-button" id="increase8" onclick="increaseValue(20, 8)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/29 - gerbera daisies.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>25.00
                            </span>

                            <h4>Gerbera Daisies</h4>

                            <p>Gerbera daisies are so vividly colored that they can sometimes make you wonder if they're real. They can be grown from seed in both containers and garden beds.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease9" onclick="decreaseValue(25, 9)" value="Decrease Value">-</button>
                                    <input type="number" id="number9" value="0" />
                                    <button type="button" class="value-button" id="increase9" onclick="increaseValue(25, 9)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/31- organic basil.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>25.00
                            </span>

                            <h4>Organic Basil</h4>

                            <p> This basil is often used fresh and is better when added towards the end of the cooking process, as cooking quickly dulls the herb's standout flavor.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease10" onclick="decreaseValue(25, 10)" value="Decrease Value">-</button>
                                    <input type="number" id="number10" value="0" />
                                    <button type="button" class="value-button" id="increase10" onclick="increaseValue(25, 10)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/32- petunia.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>30.00
                            </span>

                            <h4>Petunia</h4>

                            <p>Common variety of flowering plant seen in garden with a wide variety of colours. They can be used as decoratives for hanging baskets.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease11" onclick="decreaseValue(30, 11)" value="Decrease Value">-</button>
                                    <input type="number" id="number11" value="0" />
                                    <button type="button" class="value-button" id="increase11" onclick="increaseValue(30, 11)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/33- bellis monstrosa.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>30.00
                            </span>

                            <h4>Bellis Monstrosa</h4>

                            <p>'Monstera' has large blooms with curled - or quilled - petals that give the flowers a pompom look. They bloom through Spring and Summer.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease12" onclick="decreaseValue(30, 12)" value="Decrease Value">-</button>
                                    <input type="number" id="number12" value="0" />
                                    <button type="button" class="value-button" id="increase12" onclick="increaseValue(30, 12)" value="Increase Value">+</button>
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
   {
     switch(number){

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
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number1').value= value;
   nameofplant = "Bromeliad";
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
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number2').value = value;
   nameofplant = "Kaffir Lily";
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
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number3').value = value;
   nameofplant = "Gloxinia";
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
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number4').value = value;
   nameofplant="Cyclamen";
   //quantity= quantities[3];
   totalAmount += amount;
   break; case 5: var value = parseInt(document.getElementById('number5').value, 10);
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
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number5').value = value;
   nameofplant="Crown of Thorns";
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
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number6').value = value;
   nameofplant="Lavendar";
   //quantity= quantities[5];
   totalAmount += amount;
   break;

   case 7: var value = parseInt(document.getElementById('number7').value, 10);
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
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number7').value = value;
   nameofplant="Bamboo";
   //quantity= quantities[5];
   totalAmount += amount;
   break;

   case 8: var value = parseInt(document.getElementById('number8').value, 10);
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
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number8').value = value;
   nameofplant="Jasmine";
   //quantity= quantities[5];
   totalAmount += amount;
   break;

   case 9: var value = parseInt(document.getElementById('number9').value, 10);
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
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase10").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number9').value = value;
   nameofplant="Gerbera Daisies";
   //quantity= quantities[5];
   totalAmount += amount;
   break;

   case 10: var value = parseInt(document.getElementById('number10').value, 10);
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
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number10').value = value;
   nameofplant="Organic Basil";
   //quantity= quantities[5];
   totalAmount += amount;
   break;

   case 11: var value = parseInt(document.getElementById('number11').value, 10);
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
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase1").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase12").disabled = true;
   document.getElementById("decrease12").disabled = true;
   document.getElementById('number11').value = value;
   nameofplant="Petunia";
   //quantity= quantities[5];
   totalAmount += amount;
   break;

   case 12: var value = parseInt(document.getElementById('number12').value, 10);
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
   document.getElementById("increase6").disabled = true;
   document.getElementById("decrease6").disabled = true;
   document.getElementById("increase7").disabled = true;
   document.getElementById("decrease7").disabled = true;
   document.getElementById("increase8").disabled = true;
   document.getElementById("decrease8").disabled = true;
   document.getElementById("increase9").disabled = true;
   document.getElementById("decrease9").disabled = true;
   document.getElementById("increase1").disabled = true;
   document.getElementById("decrease10").disabled = true;
   document.getElementById("increase11").disabled = true;
   document.getElementById("decrease11").disabled = true;
   document.getElementById('number12').value = value;
   nameofplant="Bellis Monstrosa";
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
   document.getElementById("increase7").disabled = false;
   document.getElementById("decrease7").disabled = false;
   document.getElementById("increase8").disabled = false;
   document.getElementById("decrease8").disabled = false;
   document.getElementById("increase9").disabled = false;
   document.getElementById("decrease9").disabled = false;
   document.getElementById("increase10").disabled = false;
   document.getElementById("decrease10").disabled = false;
   document.getElementById("increase11").disabled = false;
   document.getElementById("decrease11").disabled = false;
   document.getElementById("increase12").disabled = false;
   document.getElementById("decrease12").disabled = false;
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

   case 7: var value = parseInt(document.getElementById('number7').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[5]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number7').value = value;
   break;

   case 8: var value = parseInt(document.getElementById('number8').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[5]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number8').value = value;
   break;

   case 9: var value = parseInt(document.getElementById('number9').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[5]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number9').value = value;
   break;

   case 10: var value = parseInt(document.getElementById('number10').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[5]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number10').value = value;
   break;

   case 11: var value = parseInt(document.getElementById('number11').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[5]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number11').value = value;
   break;

   case 12: var value = parseInt(document.getElementById('number12').value, 10);
   value = isNaN(value) ? 0 : value;
   value < 1 ? value = 1 : '';
   value--;
   //quantities[5]--;
   quantity--;
   if(quantity == 0)
   {
   activater();
   }
   document.getElementById('number12').value = value;
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
