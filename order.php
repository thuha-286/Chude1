<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <link rel="stylesheet" href="/Restaurant/asset/css/style.css">
    <link rel="icon" href="https://lh3.googleusercontent.com/proxy/xiURS71pGs-VR4uP8CIkyEAPt4N5A932mC_XyM2hFEeeogCI7PfltlaBQaMfksVzd1tc7wrFLrAq7b8-_gal9LrpoYrIUB-5Y2G-JedFICIJnAW67VoTrJc1hu3M" type="image/x-icon">
    
</head>
<body>
    <!-- Navbar section starts here -->
    <div class="navbar">
        <div class="container">
            <div class="logo">
                <img class="img-responsive" src="/Restaurant/asset/img/logo.png" alt="Restaurant Logo">
            </div>
            <div class="menu text-right">
                <ul>
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./categories.php">Categories</a></li>
                    <li><a href="./foods.php">Foods</a></li>
                    <li><a href="#social">Contact</a></li>
                </ul>
            </div>

            <div class="clear"></div>
        </div>
    </div>
    <!-- Navbar section ends here -->

     <!-- food search section starts here -->
     <div class="food-search">
        <div class="container">
            <h1 class="text-white text-center">Fill this form confirm your order.</h1>

            <form action="">
                
                <fieldset class="food-box-order order-box">
                <legend>Selected Food</legend>

                        <div class="food-menu-img">
                            <img class="img-responsive img-curve" src="/Restaurant/asset/img/menu-pizza.jpg" alt="Chicken Hawain Pizza">
                        </div>

                        <div class="food-menu-desc">
                            <h4 class="order-title">Food Title</h4>
                            <p class="food-price order-price">$2.3</p>
                            <p class="order-text">Quantity</p>
                            <input class="input-number" type="number" name="" id="">
                        </div>
                        <div class="clear"></div>
                    </fieldset>

                <div class="clear"></div>
            </form>

            <form action="">
                <fieldset class="food-box-order order-box">
                    <legend>Delivery Details</legend>
                    <div>
                        <label class="order-text">Full Name</label>
                        <label for=""></label>
                        <input require class="input-text" type="text" name="" id="" placeholder="E.g. Vijay Thapa">
                    </div>

                    <div>
                        <label class="order-text">Phone Number</label>
                        <input require class="input-text" type="text" name="" id="" placeholder="E.g. 9843xxxxxx">
                    </div>

                    <div>
                        <label class="order-text">Email</label>
                        <input require class="input-text" type="email" name="" id="" placeholder="E.g. hi@vijaythapa.com">
                    </div>

                    <div>
                        <label class="order-text">Address</label>
                        <input require class="input-text input-addr" type="text" name="" id="" placeholder="E.g. Street, City, Country">
                    </div>

                    <div>
                        <input class="btn btn-primary" type="submit" value="Confirm Order">
                    </div>

                </div>
                </fieldset>
                
            </form>

        </div>
    </div>
    <!-- food search section ends here -->
    

    <!-- Social section starts here -->
    <div id="social">
        <div class="container text-center">
            <a class="contact-icon" href="#"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a>
            
            <a class="contact-icon" href="#"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/></a>
            
            <a class="contact-icon" href="#"><img src="https://img.icons8.com/color/48/000000/twitter--v1.png"/></a>
            
        </div>
    </div>
    <!-- Social section ends here -->


    <!-- footer section starts here -->
    <div class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="http://cse.tlu.edu.vn/">CSE.TLU</a></p>
        </div>
    </div>
    <!-- footer section ends here -->

</body>
</html>