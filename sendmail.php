<?php

$to = "gus@fluffygoatcoffee.com";

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$subject = "Fluffy Goat Coffee Contact Form";

$body = "
Name: $name

Email: $email

Message:
$message
";

$headers = "From: $email";

mail($to, $subject, $body, $headers);

header("Location: index.html?success=1");

?>
