<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Emerald Heart Lighthouse Collection</title>

    <!--Included Third Party Library and Javascript and CSS-->
    <!--<script type="text/javascript" src="js/angular.min.js"></script>-->
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">-->
    <!--<link rel="stylesheet" href="css/bootstrap-responsive.min.css">-->

    <!-- Included Application specific CSS and Javascript -->
    <link href="../js/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="../js/themes/1/js-image-slider.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="../css/main.css">

</head>

<body>
    <header>

        <h1><a href="../main.inc"><img src="../css/images/contentimages/logo.png"></a></h1>

        <form>

            <ul>
                <li><a href="account_email_information.inc">Email Sign-up</a></li>
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
        <div id="feedback">
            <h1>Your Feedback is Important to Us!</h1>
            <p>Please fill out the form so that we can better serve you in the future, or tell us how we are doing.
                All feedback is sent directly to the CEO of the company!
            </p>


            <form action="" method="post">
                <div class="row_requiredRow">
                    <label for="txt_FirstName" id="FirstName-ariaLabel">First Name</label>
                    <input id="txt_FirstName" name="txt_FirstName" type="text" aria-labelledby="FirstName-ariaLabel" class="required" title="First Name. This is a required field">
                </div>
                <div class="row_requiredRow">
                    <label for="txt_LastName" id="LastName-ariaLabel">Last Name</label>
                    <input id="txt_LastName" name="txt_LastName" type="text" aria-labelledby="LastName-ariaLabel" class="required" title="Last Name. This is a required field">
                </div>
                <div class="row">
                    <label for="txt_Address" id="Address-ariaLabel">Address</label>
                    <input id="txt_Address" name="txt_Address" type="text" aria-labelledby="Address-ariaLabel">
                </div>
                <div class="row">
                    <label for="sel_State" id="State-ariaLabel">State</label>
                    <select id="sel_State" name="sel_State" aria-labelledby="State-ariaLabel">
                        <option value="Alabama">Alabama</option>
                        <option value="Alaska">Alaska</option>
                        <option value="Arizona">Arizona</option>
                        <option value="Arkansas">Arkansas</option>
                        <option value="California">California</option>
                        <option value="Colorado">Colorado</option>
                        <option value="Connecticut">Connecticut</option>
                        <option value="Delaware">Delaware</option>
                        <option value="District of Columbia">District of Columbia</option>
                        <option value="Florida">Florida</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Idaho">Idaho</option>
                        <option value="Illinois">Illinois</option>
                        <option value="Indiana">Indiana</option>
                        <option value="Iowa">Iowa</option>
                        <option value="Kansas">Kansas</option>
                        <option value="Kentucky">Kentucky</option>
                        <option value="Louisiana">Louisiana</option>
                        <option value="Maine">Maine</option>
                        <option value="Maryland">Maryland</option>
                        <option value="Massachusetts">Massachusetts</option>
                        <option value="Michigan">Michigan</option>
                        <option value="Minnesota">Minnesota</option>
                        <option value="Mississippi">Mississippi</option>
                        <option value="Missouri">Missouri</option>
                        <option value="Montana">Montana</option>
                        <option value="Nebraska">Nebraska</option>
                        <option value="Nevada">Nevada</option>
                        <option value="New Hampshire">New Hampshire</option>
                        <option value="New Jersey">New Jersey</option>
                        <option value="New Mexico">New Mexico</option>
                        <option value="New York">New York</option>
                        <option value="North Carolina">North Carolina</option>
                        <option value="North Dakota">North Dakota</option>
                        <option value="Ohio">Ohio</option>
                        <option value="Oklahoma">Oklahoma</option>
                        <option value="Oregon">Oregon</option>
                        <option value="Pennsylvania">Pennsylvania</option>
                        <option value="Rhode Island">Rhode Island</option>
                        <option value="South Carolina">South Carolina</option>
                        <option value="South Dakota">South Dakota</option>
                        <option value="Tennessee">Tennessee</option>
                        <option value="Texas">Texas</option>
                        <option value="Utah">Utah</option>
                        <option value="Vermont">Vermont</option>
                        <option value="Virginia">Virginia</option>
                        <option value="Washington">Washington</option>
                        <option value="West Virginia">West Virginia</option>
                        <option value="Wisconsin">Wisconsin</option>
                        <option value="Wyoming">Wyoming</option>
                    </select>
                </div>
                <div class="row">
                    <label for="txt_ZipCode" id="ZipCode-ariaLabel">Zip Code</label>
                    <input id="txt_ZipCode" name="txt_ZipCode" type="text" aria-labelledby="ZipCode-ariaLabel">
                </div>
                <div class="row">
                    <label for="txt_Email" id="Email-ariaLabel">Email</label>
                    <input id="txt_Email" name="txt_Email" type="text" aria-labelledby="Email-ariaLabel">
                </div>
                <div class="row">
                    <label for="txt_Phone" id="Phone-ariaLabel">Phone</label>
                    <input id="txt_Phone" name="txt_Phone" type="text" aria-labelledby="Phone-ariaLabel">
                </div>
                <div class="row">
                    <label for="sel_Ifyouwishtobecontactedpleaseletusknowwhatismostconvenient" id="Ifyouwishtobecontactedpleaseletusknowwhatismostconvenient-ariaLabel">If you wish to be contacted, please let us know what is most convenient...</label>
                    <select id="sel_Ifyouwishtobecontactedpleaseletusknowwhatismostconvenient" name="sel_Ifyouwishtobecontactedpleaseletusknowwhatismostconvenient" aria-labelledby="Ifyouwishtobecontactedpleaseletusknowwhatismostconvenient-ariaLabel">
                        <option value="Email">Email</option>
                        <option value="Phone">Phone</option>
                        <option value="None">None</option>
                        <option value="Either">Either</option>
                    </select>
                </div>
                <div class="row">
                    <label for="sel_Howdidyoufindus?" id="Howdidyoufindus?-ariaLabel">How did you find us?</label>
                    <select id="sel_Howdidyoufindus?" name="sel_Howdidyoufindus?" aria-labelledby="Howdidyoufindus?-ariaLabel">
                        <option value="Friend">Friend</option>
                        <option value="Internet Search">Internet Search</option>
                        <option value="Newspaper">Newspaper</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="row">
                    <label for="txt_Comments" id="Comments-ariaLabel">Comments:</label>
                    <input id="txt_Comments" name="txt_Comments" type="text" aria-labelledby="Comments-ariaLabel">
                </div>
                <div class="row">
                    <button onclick="alert('Your Form was submitted successfully! Thank you for your input!')" type="button">Submit Form </button>
                </div>
            </form>


        </div>

        <div id="side_nav">
            <h2>Themes</h2>
            <ul>
                <li>Nautical</li>
                <li>Fantasy</li>
                <li>Whimsical</li>
                <li>Nature</li>
                <li>5 Elements</li>
                <li>Spiritual</li>
            </ul>
            <br>
            <h2>Current Products</h2>
            <ul>
                <li>Home Decor</li>
                <li>Books</li>
            </ul>
        </div>

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