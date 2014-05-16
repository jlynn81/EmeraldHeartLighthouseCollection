<!DOCTYPE html>
<html ng-app="items">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emerald Heart Lighthouse Collection</title>

<!--    Included Third Party Library and Javascript and CSS-->
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
                <li><a href="email_signup_page.inc">Email Sign-up</a></li>
                <li> <a href="contact.inc">Customer Care</a></li>
            </ul>
            <p><input id="search" type="text" /></p><p class="input">Search</p>

        </form>

        <!-- ------------------------------------ MAIN NAVIGATION START ---------------------------------------------->
        <nav id='nav'>
            <ul>

                <li class='active'><a href='whats_new.inc'><span>What's New</span></a></li>
                <li class='active has-sub'><a href='current_products.inc'><span>Current Products</span></a>
                    <ul>
                        <li><a href='#'><span>Home Decor</span></a></li>
                        <li class='last'><a href='#'><span>Books</span></a></li>
                    </ul>
                </li>

                <li class='active'><a href='about_us.inc'><span>About Us</span></a></li>
                <li class="active"><a href="contact.inc"><span>Contact Information</span></a> </li>
                <li class='active last'><a href='customer_feedback.inc'><span>Customer Feedback</span></a></li>

            </ul>
        </nav>
        <!-- ------------------------------------ MAIN NAVIGATION END ------------------------------------------------>

        <!-- WELCOME MESSAGE AND SHOPPING CART INFORMATION ----------------->
        <p>Welcome!
            <!--<a href="account_email_information.inc"> Sign In</a> or <a href="account_email_information.inc"> Create a Account</a> -->
        </p>

    </header>

    <section>

        <blockquote>"It's All About The Heart and Soul"<p>~Sue Frazier</p></blockquote>

        <div class="item_list">
            <div class="item">
                <a href="../detailProducts/mysticalCarousel.inc">
                    <img src="../css/images/product-images/unicorn1.jpg">
                    <p id="product_name">Mystical Carousel Unicorn</p>
                    <p id="product_amount">$40.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/clown1.inc">
                    <img src="../css/images/product-images/clown1.jpg">
                    <p id="product_name">Star Clown</p>
                    <p id="product_amount">$15.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/holidaywreath.inc">
                    <img src="../css/images/product-images/HolidayWreath.jpg">
                    <p id="product_name">Holiday Wreath</p>
                    <p id="product_amount">$50.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/waterlighthouse.inc">
                    <img src="../css/images/product-images/waterlighthouse.jpg">
                    <p id="product_name">Lighthouse Hurricane Statue</p>
                    <p id="product_amount">$175.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/underwaterdream.inc">
                    <img src="../css/images/product-images/underwaterdream.jpg">
                    <p id="product_name">Under Water Dream</p>
                    <p id="product_amount">$150.00</p>
                </a>
            </div>
            <div class="item">
                <a href="../detailProducts/maskofdreams.inc">
                    <img src="../css/images/product-images/mask.jpg">
                    <p id="product_name">Mystical Mask of Dreams</p>
                    <p id="product_amount">$200.00</p>
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
                <li><a href="../views/whats_new.inc">What's New</a> </li>
                <li><a href="../views/customer_feedback.inc">Customer Feedback</a> </li>
                <li><a href="../views/about_us.inc">About Us</a> </li>
                <li>Customer Service: 1-800-123-4567 </li>
                <li>Orders: 1-800-456-7890</li>
                <li>Email:<a href="mailto:emeraldheartlc@gmail.com"> EmeraldHeartLC@gmail.com</a> </li>
            </ul>
        </div>
    </section>

    <script type="text/javascript" src="../javascripts/main.js"></script>
    <script type="text/javascript" src="../javascripts/productInfo.js"></script>

    <footer>
        <p>All Rights</p>
        <p>&copy; April 2014</p>
        <p>Website Maintained by <a href="mailto:whymsicaldesigns@gmail.com">Whymsical Designs</a></p>
    </footer>

</body>
</html>