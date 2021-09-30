<?php
session_start();

$con = mysqli_connect('127.0.0.1:3307', 'root');
mysqli_select_db ($con, 'leafnow_db');

$plantname1 = "Bunny Ear Cactus";
$plantname2 = "Acanthocalycium Thionanthum";
$plantname3 = "Burros Tail";
$plantname4 = "Flaming Katy";
$plantname5 = "Christmas Cactus";
$plantname6 = "Devils Backbone";

$query1 = "select Quantity from plant where Name = '$plantname1'";
$result1=mysqli_query($con, $query1);
$row1 = mysqli_fetch_array($result1);
$_SESSION['quantity1'] = $row1[0];


$query2 = "select Quantity from plant where Name = '$plantname2'";
$result2=mysqli_query($con, $query2);
$row2 = mysqli_fetch_array($result2);
$_SESSION['quantity2'] = $row2[0];

$query3 = "select Quantity from plant where Name = '$plantname3'";
$result3=mysqli_query($con, $query3);
$row3 = mysqli_fetch_array($result3);
$_SESSION['quantity3'] = (int)$row3[0];

$query4 = "select Quantity from plant where Name = '$plantname4'";
$result4=mysqli_query($con, $query4);
$row4 = mysqli_fetch_array($result4);
$_SESSION['quantity4'] = (int)$row4[0];

$query5 = "select Quantity from plant where Name = '$plantname5'";
$result5=mysqli_query($con, $query5);
$row5 = mysqli_fetch_array($result5);
$_SESSION['quantity5'] = $row5[0];

$query6 = "select Quantity from plant where Name = '$plantname6'";
$result6=mysqli_query($con, $query6);
$row6 = mysqli_fetch_array($result6);
$_SESSION['quantity6'] = (int)$row6[0];

mysqli_close($con);
 ?>




<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

    <title>Cactus Page</title>

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
                        <h2><em>Cactus and Succulents</em></h2>
                        <p>A rich variety of the two kinds.</p>
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
                            <img src="image/11.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>200.00
                            </span>

                            <h4>Bunny Ear Cactus</h4>

                            <p>This cactus doesn’t have leaves or stems. Instead, its pods grow out in large, oval groups that resemble a bunny’s ears!Kept outside, it can grow up to 6 feet wide! </p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease1" onclick="decreaseValue(200, 1)" value="Decrease Value">-</button>
                                    <input type="number" id="number1" value="0" />
                                    <button type="button" class="value-button" id="increase1" onclick="increaseValue(200, 1)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()" >+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/12.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>250.00
                            </span>

                            <h4>Acanthocalycium Thionanthum</h4>

                            <p>The specific name "thionantha" was originally applied to the yellow flowering form, but now comprises plant of variable colour of flowers and spines sizes.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease2" onclick="decreaseValue(250, 2)" value="Decrease Value">-</button>
                                    <input type="number" id="number2" value="0" />
                                    <button type="button" class="value-button" id="increase2" onclick="increaseValue(250, 2)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/13- Burro's Tail.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>350.00
                            </span>

                            <h4>Burro's Tail</h4>

                            <p>The Burro’s Tail also has a habit of producing long, trailing stems up to 4 feet long! This makes it a wonderful container plant and produces a full, overflowing container.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease3" onclick="decreaseValue(350, 3)" value="Decrease Value">-</button>
                                    <input type="number" id="number3" value="0" />
                                  <button type="button" class="value-button" id="increase3" onclick="increaseValue(350, 3)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/14- Flaming Katy.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>350.00
                            </span>

                            <h4>Flaming Katy</h4>

                            <p>The flaming katy is a succulent plant that blooms small tubular flowers (up to 50) within a flower head, originally grown as a gift plant.</p>

                            <ul class="social-icons">
                                <li><form>
                                   <button type="button" class="value-button" id="decrease4" onclick="decreaseValue(350, 4)" value="Decrease Value">-</button>
                                    <input type="number" id="number4" value="0" />
                               <button type="button" class="value-button" id="increase4" onclick="increaseValue(350, 4)" value="Increase Value">+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/15- Christmas cactus.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>400.00
                            </span>

                            <h4>Christmas Cactus</h4>

                            <p>Christmas cactus has flattened stems and is grown for its striking cerise flowers, blooming indoors about Christmastime in the Northern Hemisphere.</p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease5" onclick="decreaseValue(400, 5)" value="Decrease Value">-</button>
                                    <input type="number" id="number5" value="0"/>
                                   <button type="button" class="value-button" id="increase5" onclick="increaseValue(400, 5)" value="Increase Value" >+</button>
                                  </form></li>
                                <li><a href="#" onclick="checkout()">+ Order</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="trainer-item">
                        <div class="image-thumb">
                            <img src="image/16- Devil's Backbone.jpg" alt="" width="100" height="210">
                        </div>
                        <div class="down-content">
                            <span>
                                <del><sup></sup></del> <sup>₹</sup>250.00
                            </span>

                            <h4>Devil's Backbone</h4>

                            <p>The Devil's Backbone produces tiny plantlets along the edges of its leaves, and, in time, the mother plant passes away and drops these baby plants into the soil to propagate! </p>

                            <ul class="social-icons">
                                <li><form>
                                    <button type="button" class="value-button" id="decrease6" onclick="decreaseValue(250, 6)" value="Decrease Value">-</button>
                                    <input type="number" id="number6" value="0" min="0" max="5"/>
                                  <button type="button" class="value-button" id="increase6" onclick="increaseValue(250, 6)" value="Increase Value" max="">+</button>
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
document.getElementById('number1').value= value;
nameofplant = "Bunny Ear Cactus";
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
nameofplant = "Acanthocalycium Thionanthum";
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
nameofplant = "Burros Tail";
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
nameofplant="Flaming Katy";
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
nameofplant="Christmas Cactus";
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
nameofplant="Devils Backbone";
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
document.getElementById("decrease6").disabled = false;}

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
