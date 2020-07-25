<?php 
  // Content-Type helps email client to parse file as HTML 
  // therefore retaining styles
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
  $message = "<html>
  <head>
  	<title>New message from website contact form</title>
  </head>
  <body>
  	<h1>Test Email</h1>
  	<p>Email sent sir :)</p>
  </body>
  </html>";
  if (mail('yk.terrier@gmail.com', "TEST", $message, $headers)) {
   echo "Email sent";
  }else{
   echo "Failed to send email. Please try again later";
  }
  header("Location: barang.php");
?>