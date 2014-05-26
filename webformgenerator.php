<!--
 Created with Webformgenerator by easyclick.ch
 www.easyclick.ch
 -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css"/>
    <link href="css/uniform.css" media="screen" rel="stylesheet" type="text/css"/>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
    <script type="text/javascript" src="javascripts/jquery.tools.js"></script>
    <script type="text/javascript" src="javascripts/jquery.uniform.min.js"></script>
    <script type="text/javascript" src="../../../../Users/jlynn81/Downloads/1400726751/js/main.js"></script>
</head>
<body>

<div class="TTWForm-container">
     
     
     <form action="process_form.php" class="TTWForm" method="post" novalidate="">
          
          
          <div id="field1-container" class="field f_75">
               <label for="field1">
                    Your Name
               </label>
               <input name="name" id="field1" required="required" type="text">
          </div>
          
          
          <div id="field6-container" class="field f_75">
               <label for="field6">
                    Your Phone
               </label>
               <input name="phone" id="field6" type="text">
          </div>
          
          
          <div id="field5-container" class="field f_75">
               <label for="field5">
                    Email Address
               </label>
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
                    <input name="how" id="field3-2" value="Internet Search" type="radio">
                    <span class="option-title">
                         Internet Search
                    </span>
               </div>
               
               
               <div class="option clearfix">
                    <input name="how" id="field3-3" value="Newspaper" type="radio">
                    <span class="option-title">
                         Newspaper
                    </span>
               </div>
               
               
               <div class="option clearfix">
                    <input name="how" id="how-4" value="Other" type="radio">
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
                    <span class="option-title">
                         Email
                    </span>
                    <br>
               </div>
               
               
               <div class="option clearfix">
                    <input name="contact" id="field4-2" value="Phone" type="checkbox">
                    <span class="option-title">
                         Phone
                    </span>
                    <br>
               </div>
               
               
               <div class="option clearfix">
                    <input name="contact" id="field4-3" value="Neither" type="checkbox">
                    <span class="option-title">
                         Neither
                    </span>
                    <br>
               </div>
               
               
               <div class="option clearfix">
                    <input name="contact" id="contact-4" value="Both" type="checkbox">
                    <span class="option-title">
                         Both
                    </span>
                    <br>
               </div>
          </div>
          
          
          <div id="field2-container" class="field f_75">
               <label for="field2">
                    Comments
               </label>
               <textarea rows="5" cols="20" name="comments" id="field2"></textarea>
          </div>
          
          
          <div id="form-submit" class="field f_100 clearfix submit">
               <input value="Submit Form" type="submit">
          </div>
     </form>
</div>

</body>
</html>