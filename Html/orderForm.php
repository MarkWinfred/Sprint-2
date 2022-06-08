<?php
    session_start()         // added this to use the _SERVER['REQUEST_METHOD'] in send.php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="style.css">
    
    
</head>

<body>

    <!-- header section start here  -->
  <header class="header">
    <div class="logoContent">
        <a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
    </div>

    <nav class="navbar">
        <a href="index.html">home</a>
        <a href="orderForm.html">order now</a>
    </nav>
    </header>
    <!-- header section end here  -->

<div class="container">

    <form action="send.php" method="post">

        <div class="row">

            <div class="col">

                <h3 class="title">billing address</h3>

                <div class="inputBox">
                    <span for="name">full name :</span>
                    <input type="text" id="name" name="name" placeholder="john deo">
                </div>
                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" id="email" name="email"placeholder="example@example.com">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" id="address" name= "address" placeholder="room - street - locality">
                </div>
                <div class="inputBox">
                    <span>city :</span>
                    <input type="text" id="city" name="city" placeholder="mumbai">
                </div>
                <div class="inputBox">
                    <span>Orders</span>
                    <input type="text" id="orders" name="orders" placeholder="Order Name/s - Quantity">
                </div>

            </div>

            <div class="col">
                <h3 class="title">payment</h3>

                <div class="inputBox">
                    <span>cards accepted :</span>
                    <img src="images/card_img.png" alt="">
                </div>
                <div class="inputBox">
                    <span>CardName :</span>
                    <input type="text" id="cName" name="cName" placeholder="mr. john deo">
                </div>

                <div class="inputBox">
                    <span>credit card number :</span>
                    <input type="number" id="cNumber" name="cNumber" placeholder="1111222233334444">
                </div>
                <div class="inputBox">
                    <span>exp month :</span>
                    <input type="text" id="expMonth" name="expMonth" placeholder="january">
                </div>

                <div class="flex">
                    <div class="inputBox">
                        <span>exp year :</span>
                        <input type="number" id="expYear" name="expYear" placeholder="2022">
                    </div>
                    <div class="inputBox">
                        <span>CVV :</span>
                        <input type="text" id="cvv" name="cvv" placeholder="1234">
                    </div>
                </div>

            </div>

    
        </div>
             
    <input type="submit" value="Submit" class="submit-btn" >
    </form> 
  
</div>    
    
</body>
</html>