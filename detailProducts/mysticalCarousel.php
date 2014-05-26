<!DOCTYPE html>
<html ng-app="items">
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emerald Heart Lighthouse Collection - Mystical Carousel Unicorn</title>

    <!--    Included Third Party Library and Javascript and CSS-->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="../jquery-ui-1.10.4.custom/development-bundle/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
    <script src="../jquery-ui-1.10.4.custom/development-bundle/ui/jquery.ui.accordion.js"></script>
    <link rel="stylesheet" href="../jquery-ui-1.10.4.custom/development-bundle/themes/base/jquery.ui.accordion.css">

    <!-- Included Application specific CSS and Javascript -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">

    <script>
        $(function() {
            $( "#accordion" ).accordion({
                collapsible: true
            });
        });
    </script>

</head>

<body>

<header>

    <h1><a href="../index.html"><img src="../css/images/contentimages/logo.png"></a></h1>
    <form>

        <ul>
            <li><a href="../views/email_signup_page.html">Email Sign-up</a></li>
            <li> <a href="../views/contact.html">Customer Care</a></li>
        </ul>
    </form>

    <!-- ------------------------------------ MAIN NAVIGATION START ---------------------------------------------->
    <nav>
        <ul>

            <li class='active'><a href='../views/whats_new.php'><span>What's New</span></a></li>
            <li class='active'><a href='../views/current_products.php'><span>Current Products</span></a>
                <ul>
                    <li><a href='../views/current_products.php'><span>Home Decor</span></a></li>
                    <li class='last'><a href='../views/current_products.php'><span>Books</span></a></li>
                </ul>
            </li>

            <li class='active'><a href='../views/about_us.html'><span>About Us</span></a></li>
            <li class="active"><a href="../views/contact.html"><span>Contact Information</span></a> </li>
            <li class='active last'><a href='../views/customer_feedback.php'><span>Customer Feedback</span></a></li>

        </ul>
    </nav>
    <!-- ------------------------------------ MAIN NAVIGATION END ------------------------------------------------>


</header>

    <section id="product_info">

        <p><a href="../views/current_products.php"> Return to Current Products</a></p>

        <p><img src="../css/images/product-images/unicorn1.jpg" alt="unicorn"/></p>

       <div class="item_description">

           <form>
               <ul>
                   <li><h2>Mythical Carousel Unicorn</h2></li>
                   <li>by artist Sue Frazier</li>
                   <li></li>
                   <li>$40.00</li>
                   <li>Status: Available <p>(Only one item)</p> </li>

               </ul>

           </form>

           <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
               <input type="hidden" name="cmd" value="_s-xclick">
               <input type="hidden" name="hosted_button_id" value="W595ZC5M7Z322">
               <button type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">Add to Cart</button>
           </form>


           <div id="accordion">

               <h3>Product Overview</h3>
               <div>
                   <p>The statuesque portrayal of a mythical carousel unicorn inspired to serenade
                       you into fantasy with the press of the music button located at the base of the unicorn.</p>
                   <ul>
                       <li>12" Tall, 4" Wide</li>
                       <li>Made from local materials</li>
                   </ul>
               </div>


           </div>


        </div>

    </section>

<section id="bottom_nav">
    <div id="subfooter">
        <ul>
            <li><a href="../views/whats_new.php">What's New</a> </li>
            <li><a href="../views/customer_feedback.php">Customer Feedback</a> </li>
            <li><a href="../views/about_us.html">About Us</a> </li>
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