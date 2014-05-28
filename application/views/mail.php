<?php

$name = $_POST['submit_btn'];

$to = "emeraldheartlc@gmail.com";
$subject = "Customer Feedback Form Submission";
$message = "$name";
$from = "field5";
$headers = "From:" . $from;

mail($to, $subject, $message, $headers);

$thankYou = "<p>Thank you for your Feedback!</p>"

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emerald Heart Lighthouse Collection</title>

    <!--Included Third Party Library and Javascript and CSS-->
    <!--<script type="text/javascript" src="js/angular.min.js"></script>-->
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/bootstrap-responsive.min.css">

    <!-- Included Application specific CSS and Javascript -->
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/main.css">


</head>

<body>

    <header>

        <h1><a href="../../index.html"><img src="../../css/images/contentimages/logo.png"></a></h1>
        <form>

            <ul>
                <li><a href="email_signup_page.html">Email Sign-up</a></li>
                <li> <a href="contact.html">Customer Care</a></li>
            </ul>
        </form>

        <!-- ------------------------------------ MAIN NAVIGATION START ---------------------------------------------->
        <nav>
            <ul>

                <li class='active'><a href='whats_new.php'><span>What's New</span></a></li>
                <li class='active has-sub'><a href='current_products.php'><span>Current Products</span></a>
                    <ul>
                        <li><a href='current_products.php'><span>Home Decor</span></a></li>
                        <li class='last'><a href='current_products.php'><span>Books</span></a></li>
                    </ul>
                </li>

                <li class='active'><a href='about_us.html'><span>About Us</span></a></li>
                <li class="active"><a href="contact.html"><span>Contact Information</span></a> </li>
                <li class='active last'><a href='customer_feedback.html'><span>Customer Feedback</span></a></li>

            </ul>
        </nav>
        <!-- ------------------------------------ MAIN NAVIGATION END ------------------------------------------------>

    </header>

    <section id="submission_conf">
        <h1>Thank you</h1>

        <p>Your submission has successfully been submitted, please click the below link to continue shopping</p>

        <p><a href="../../index.html"> Return to Main Page</a></p>


    </section>

    <div id="subfooter">
        <ul>
            <li><a href="whats_new.php">What's New</a> </li>
            <li><a href="customer_feedback.html">Customer Feedback</a> </li>
            <li><a href="about_us.html">About Us</a> </li>
            <li>Customer Service: 1-800-123-4567 </li>
            <li>Orders: 1-800-456-7890</li>
            <li>Email:<a href="mailto:emeraldheartlc@gmail.com"> EmeraldHeartLC@gmail.com</a> </li>
        </ul>
    </div>

    <footer>
        <p>All Rights</p>
        <p>&copy; April 2014</p>
        <p>Website Maintained by <a href="mailto:whymsicaldesigns@gmail.com">Whymsical Designs</a></p>
    </footer>



</body>
</html>