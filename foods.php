<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Cafe Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="food-search.html" method="POST">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-coffee.jpeg" alt="Cappuccino" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Cappuccino</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Cocoa and Milk.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-cake.jpg" alt="Forest" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Forest</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Chocolate, Cream and Milk.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-cake.jpg" alt="Truffle" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Truffle</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Milk and Egg.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-coffee.jpeg" alt="Latte" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Latte</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with espresso and milk.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-coffee.jpeg" alt="Affogato" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Affogato</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with Espresso and chocolate.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="images/menu-icecream.jpeg" alt="Chocolate" class="img-responsive img-curve">
                </div>

                <div class="food-menu-desc">
                    <h4>Chocolate</h4>
                    <p class="food-price">$2.3</p>
                    <p class="food-detail">
                        Made with cocoa and milk.
                    </p>
                    <br>

                    <a href="#" class="btn btn-primary">Order Now</a>
                </div>
            </div>


            <div class="clearfix"></div>

            

        </div>

    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/riteshhmishra"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="https://www.twitter.com/swaosc"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Ritesh Mishra</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>