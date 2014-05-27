<?php

$name = $_POST['field1'];

$to = "emeraldheartlc@gmail.com";
$subject = "Customer Feedback Form Submission";
$message = "$name";
$from = "txt_Email";
$headers = "From:" . $from;

mail($to, $subject, $message, $headers);

?>