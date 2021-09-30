<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sign In/ Sign Up</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>


    <br>
    <br>
    <div class="cont">
    <form method="POST">
        <div class="form sign-in">
            <h2>Welcome</h2>
            <label>
                <span>Email</span>
                <input type="email" name="email" required/>
            </label>
            <label>
                <span>Password</span>
                <input type="password" name="password" required/>
            </label>
            <button type="submit" class="submit" name="signin" id="signin" value="signin">Sign In</button>
    </form>

        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">

                    <h3>Don't have an account? Please Sign up!<h3>
                </div>
                <div class="img__text m--in">

                    <h3>If you already have an account, just sign in!<h3>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up" method="post" action="signup.php">
                <h2>Create your Account</h2>
            <form class="form sign-up" method="post" action="signup.php">
                <label>
                    <span>Name</span>
                    <input type="text" name="userName" id="userName" required/>
                </label>
                <label>
                    <span>Address</span>
                    <input type="text" name="address" id="address" required/>
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" name="mailid" id="mailid" required/>
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" name="pass" id="pass" required/>
                </label>
                <button type="submit" class="submit" name="signup" id="signup" value="signup">Sign Up</button>


            </div>
        </div>
    </form>
</div>
    <script>
        document.querySelector('.img__btn').addEventListener('click', function() {
            document.querySelector('.cont').classList.toggle('s--signup');
        });
    </script>


</body>

</html>

<?php

if (isset($_POST['signup'])) {
    //action for signup here
    $Name = $_POST["userName"];
    $address = $_POST["address"];
    $mail = $_POST["mailid"];
    $password = $_POST["pass"];
    echo "$Name";
    $conn = new mysqli('127.0.0.1:3307', 'root', '', 'leafnow_db');

    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {

        $stmt = $conn->prepare("insert into customer (Name, Mail,Address, Password ) values('$Name','$mail', '$address', '$password') ");
      //  $stmt->bind_param("ssss", $Name, $mail,$address, $pass);
        $stmt->execute();
        $stmt->close();
        $conn->close();
    }
}
else if ($_POST['signin'] == 'signin') {

    //action for signin
    $Mail = $_POST["email"];
    $Pass = $_POST["password"];


    $conn = new mysqli('127.0.0.1:3307', 'root', '', 'leafnow_db');

    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $sel = " select Mail, Password, Name from customer where Mail='$Mail' and  Password='$Pass' ";
        $res = mysqli_query($conn, $sel) or die('SQL Error: ' . mysqli_error($conn));
        $stmt = mysqli_fetch_array($res);

        echo "$stmt[0]";
        echo "$stmt[1]";


        if (($stmt[0] == $Mail) && ($stmt[1] == $Pass))
         {
                  session_start();
                  $_SESSION['status'] = "Active";
                  $_SESSION['name'] = $stmt[2];
                  header("location: home.php");
                }else{
                  $msg = "Your Username or Password is Invalid";
                  ?>
                <script>
                alert("Invalid Credentials !");
                </script>
                <?php

                  header("url=signup.php");
                }
                mysqli_close($conn);
              }

        }


?>
