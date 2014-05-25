
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emerald Heart Lighthouse Collection</title>

    <!--Included Third Party Library and Javascript and CSS-->
    <link href="../css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="../css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="../javascripts/jquery.tools.js"></script>
    <script type="text/javascript" src="../javascripts/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="../javascripts/main.js"></script>
    <script type="text/javascript" src="../javascripts/validate.js"></script>



    <!-- Included Application specific CSS and Javascript -->
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
<header>

    <h1><a href="../index.html"><img src="../css/images/contentimages/logo.png" alt=""></a></h1>
    <form>

        <ul>
            <li><a href="email_signup_page.html">Email Sign-up</a></li>
            <li> <a href="contact.html">Customer Care</a></li>
        </ul>
    </form>

    <!-- MAIN NAVIGATION START -->
    <nav id='nav'>
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
            <li class='active last'><a href='customer_feedback.php'><span>Customer Feedback</span></a></li>

        </ul>
    </nav>
    <!-- MAIN NAVIGATION END -->


</header>

<section id="customer_feedback_form">

    <p class="image"><img src="../css/images/contentimages/feedback.png" alt=""> </p>

    <div id="feedback">
        <h1>Your Feedback is Important to Us!</h1>
        <p>Please fill out the form so that we can better serve you in the future, or tell us how we are doing.  All feedback is sent directly to the CEO of the company!
        </p>


        <div class="TTWForm-container">

            <form  class="TTWForm" name="TTWForm" method="post" novalidate="">


                <div id="field1-container" class="field f_75">
                    <p>* Denotes a Required Field prior to form submission</p>
                    <label for="field1">Your Name</label>
                    <label id="field1_req" class="required">*</label>
                    <input name="field1" id="field1" required="required" type="text">

                </div>


                <div id="field6-container" class="field f_75">
                    <label for="field6">Your Phone</label>
                    <label id="field6_req" class="required">*</label>
                    <input name="phone" id="field6" type="text">
                </div>


                <div id="field5-container" class="field f_75">
                    <label for="field5">Email Address</label>
                    <label id="field5_req" class="required">*</label>
                    <input name="email" id="field5" required="required" type="email">
                </div>


                <div id="field3-container" class="field radio-group required f_50">
                    <label for="field3-1">
                        How did you find us?
                    </label>


                    <div class="option clearfix">
                        <input name="how" id="field3-1" value="Friend" type="radio">
                    <span class="option-title">
                         Friend
                    </span>
                    </div>


                    <div class="option clearfix">
                        <label for="field3-2"></label><input name="how" id="field3-2" value="Internet Search" type="radio">
                    <span class="option-title">
                         Internet Search
                    </span>
                    </div>


                    <div class="option clearfix">
                        <label for="field3-3"></label><input name="how" id="field3-3" value="Newspaper" type="radio">
                    <span class="option-title">
                         Newspaper
                    </span>
                    </div>


                    <div class="option clearfix">
                        <label for="how-4"></label><input name="how" id="how-4" value="Other" type="radio">
                    <span class="option-title">
                         Other
                    </span>
                        <br>
                    </div>
                </div>


                <div id="field4-container" class="field checkbox-group required f_50">
                    <label for="field4-1">
                        Please let us know which way is most convenient to be contacted
                    </label>


                    <div class="option clearfix">
                        <input name="contact" id="field4-1" value="Email" type="checkbox">
                    <span class="option-title">Email</span>
                        <br>
                    </div>


                    <div class="option clearfix">
                        <label for="field4-2"></label><input name="contact" id="field4-2" value="Phone" type="checkbox">
                    <span class="option-title">Phone</span>
                        <br>
                    </div>


                    <div class="option clearfix">
                        <label for="field4-3"></label><input name="contact" id="field4-3" value="Neither" type="checkbox">
                    <span class="option-title">Neither</span>
                        <br>
                    </div>


                    <div class="option clearfix">
                        <label for="contact-4"></label><input name="contact" id="contact-4" value="Both" type="checkbox">
                    <span class="option-title">Both</span>
                        <br>
                    </div>
                </div>


                <div id="field2-container" class="field f_75">
                    <label for="field2">Comments</label>
                    <textarea rows="5" cols="20" name="comments" id="field2"></textarea>
                </div>


                <div id="form-submit" class="field f_100 clearfix submit">
                    <button onclick="alert('Your form was successfully submitted!')" id="submit" value="Submit Form" type="submit">Submit Form</button>
                </div>
            </form>
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

<footer>
    <p>All Rights</p>
    <p>&copy; April 2014</p>
    <p>Website Maintained by <a href="mailto:whymsicaldesigns@gmail.com">Whymsical Designs</a></p>
</footer>

</body>
</html>