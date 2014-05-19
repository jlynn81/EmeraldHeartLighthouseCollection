<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emerald Heart Lighthouse Collection</title>

    <!--Included Third Party Library and Javascript and CSS-->
    <!--<script type="text/javascript" src="js/angular.min.js"></script>-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css">

    <!-- Included Application specific CSS and Javascript -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
<header>

    <h1><a href="../index.html"><img src="../css/images/contentimages/logo.png"></a></h1>

    <form>

        <ul>
            <li><a href="email_signup_page.html">Email Sign-up</a></li>
            <li> <a href="contact.html">Customer Care</a></li>
        </ul>
        <label for="search"><input id="search" type="text" class="input">Search</label>

    </form>

    <!-- ------------------------------------ MAIN NAVIGATION START ---------------------------------------------->
    <nav id='nav'>
        <ul>

            <li class='active'><a href='whats_new.php'><span>What's New</span></a></li>
            <li class='active has-sub'><a href='current_products.php'><span>Current Products</span></a>
                <ul>
                    <li><a href='#'><span>Home Decor</span></a></li>
                    <li class='last'><a href='#'><span>Books</span></a></li>
                </ul>
            </li>

            <li class='active'><a href='about_us.html'><span>About Us</span></a></li>
            <li class="active"><a href="contact.html"><span>Contact Information</span></a> </li>
            <li class='active last'><a href='customer_feedback.html'><span>Customer Feedback</span></a></li>

        </ul>
    </nav>
    <!-- ------------------------------------ MAIN NAVIGATION END ------------------------------------------------>

    <!-- WELCOME MESSAGE AND SHOPPING CART INFORMATION INTRODUCED AT A LATER DATE----------------->
    <br>
        <!--<a href="account_email_information.inc"> Sign In</a> or <a href="account_email_information.inc"> Create a Account</a> -->


</header>

    <section>

        <blockquote>"It's All About The Heart and Soul"<p>~Sue Frazier</p></blockquote>

        <div class="item_list">
            <div class="item">
                <a href="../detailProducts/mysticalCarousel.html">
                    <img src="../css/images/product-images/unicorn1.jpg">
                    <p id="product_name">Mystical Carousel Unicorn</p>
                    <p id="product_amount">$40.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/clown1.html">
                    <img src="../css/images/product-images/clown1.jpg">
                    <p id="product_name1">Star Clown</p>
                    <p id="product_amount1">$15.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/holidaywreath.html">
                    <img src="../css/images/product-images/HolidayWreath.jpg">
                    <p id="product_name2">Holiday Wreath</p>
                    <p id="product_amount2">$50.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/waterlighthouse.html">
                    <img src="../css/images/product-images/waterlighthouse.jpg">
                    <p id="product_name3">Lighthouse Hurricane Statue</p>
                    <p id="product_amount3">$175.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/underwaterdream.html">
                    <img src="../css/images/product-images/underwaterdream.jpg">
                    <p id="product_name4">Under Water Dream</p>
                    <p id="product_amount4">$150.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/maskofdreams.html">
                    <img src="../css/images/product-images/mask.jpg">
                    <p id="product_name5">Mystical Mask of Dreams</p>
                    <p id="product_amount5">$200.00</p>
                </a>
            </div>

        </div>

        <div id="side_nav">
            <h2>Themes</h2>
            <ul>
                <li><a href=""> Nautical</a></li>
                <li><a href=""> Fantasy</a> </li>
                <li><a href=""> Whimsical</a> </li>
                <li><a href=""> Nature</a> </li>
                <li><a href=""> 5 Elements</a> </li>
                <li><a href=""> Spiritual</a> </li>
            </ul>
            <br>
            <h2>Current Products</h2>
            <ul>
                <li><a href=""> Home Decor</a> </li>
                <li><a href=""> Books</a> </li>
            </ul>
        </div>

    </section>

    <section id="bottom_nav">
        <div id="subfooter">
            <ul>
                <li><a href="../views/whats_new.php">What's New</a> </li>
                <li><a href="../views/customer_feedback.html">Customer Feedback</a> </li>
                <li><a href="../views/about_us.html">About Us</a> </li>
                <li>Customer Service: 1-800-123-4567 </li>
                <li>Orders: 1-800-456-7890</li>
                <li>Email:<a href="mailto:emeraldheartlc@gmail.com"> EmeraldHeartLC@gmail.com</a> </li>
            </ul>
        </div>
    </section>

    <footer>
        <p>All Rights</p>
        <p>&copy; April 2014</p>
        <p>Website Maintained by <a href="mailto:whymsicaldesigns@gmail.com">Whymsical Designs</a></p>
    </footer>

</body>
</html>