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
    <link href="../js/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="../js/themes/1/js-image-slider.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    <header>

        <h1><a href="../index.php"><img src="../css/images/contentimages/logo.png"></a></h1>
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

    <!-- BEGIN CENTER CONTENT OF PAGE -------------------------------------->

    <section id="sign_up">

        <h1> Email </h1>

        <h2> Email Sign-up</h2>

            <form action="?action=checkemail" method="post">
                <input type="text" name="first_name" placeholder="First Name"/>
                <input type="text" name="last_name" placeholder="Last Name"/>
                <input type="text" name="email" placeholder="E-mail Address"/>
                <input type="text" name="confirm_email" placeholder="Confirm E-mail Address"/>
                <p>Press Submit to Sign-up for email alerts</p>
                <input class="button" type="submit" value="Submit"/>

            </form>


    </section>


    <section id="bottom_nav">
        <div id="subfooter">
            <ul>
                <li><a href="whats_new.inc">What's New</a> </li>
                <li><a href="customer_feedback.inc">Customer Feedback</a> </li>
                <li><a href="current_products.inc">Current Products</a> </li>
                <li><a href="themes.inc">Themes</a> </li>
                <li><a href="about_us.inc">About Us</a> </li>
                <li><a href="site_map.inc">Site Map</a> </li>
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