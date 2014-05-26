<?php

$firstname = $_POST['txt_FirstName'];
$lastname = $_POST['txt_LastName'];

$to = "emeraldheartlc@gmail.com";
$subject = "Customer Feedback Form Submission";
$message = "$firstname \n\n $lastname";
$from = "txt_Email";
$headers = "From:" . $from;

mail($to, $subject, $message, $headers);

?>