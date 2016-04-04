<?php
if (isset($_POST['send'])) {
    $to = 'tak0301@gmail.com';
    $subject = 'Contact from my portfolio';
    $message = 'Email: ' . $_POST['user_email'] . "\r\n\r\n";
    $message .= 'Comments: ' . $_POST['user_message'];
    $headers = "From: tak0301@gmail.com\r\n";
    $headers .= 'Content-Type: text/plain; charset=utf-8';
    $success = mail($to, $subject, $message, $headers, '‑ftak0301@gmail.com');
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>T. Kelly Online Learning Engineer</title>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/style_large.css">
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="js/mobile_menu.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
  </head>

  <body>
  <?php if (isset($success) && $success) { ?>
  <h1>Thank You</h1>
  Your message has been sent.
  <?php } else { ?>
  <h1>Oops!</h1>
  Sorry, there was a problem sending your message.
  <?php } ?>
  </body>

</html>
